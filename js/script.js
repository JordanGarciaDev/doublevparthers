//Variables
const buscar = document.querySelector(".buscar-container");
const perfilcontainer = document.querySelector(".perfil-container");
const root = document.documentElement.style;
const get = (param) => document.getElementById(`${param}`);
const url = "https://api.github.com/users/";
const noresults = get("no-results");
const nocumple = get("no-cumple");
const btnmode = get("btn-modo");
const modetext = get("mode-text");
const modeicon = get("mode-icon");
const btnsubmit = get("submit");
const usuario = get("usuario");
const avatar = get("avatar");
const linkPerfil = get("linkPerfil");
const linkPerfil1 = get("linkPerfil1");
const urlPerfil = get("html_url");
const userName = get("name");
const user = get("user");
const date = get("date");
const months = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
];
const bio = get("bio");
const repos = get("repos");
const followers = get("followers");
const following = get("following");
const user_location = get("location");
const page = get("page");
const twitter = get("twitter");
const company = get("company");
let darkMode = false;
//btns
    if (usuario.value !== "doublevpartners" && usuario.value.length >= 4) {
        ObtenerDatosUser(url + usuario.value);
    }
    else{
        nocumple.style.display = "block";
    }

usuario.addEventListener(
    "keydown",
    function (e) {
        if (!e) {
            var e = window.event;
        }
        if (e.key == "Enter") {
            if (usuario.value !== "doublevpartners" && usuario.value.length >= 4) {
                ObtenerDatosUser(url + usuario.value);
            }
            else{
                nocumple.style.display = "block";
            }
        }
    },
    false
);
usuario.addEventListener("usuario", function () {
    noresults.style.display = "none";
    nocumple.style.display = "none";
    perfilcontainer.classList.remove("active");
    buscar.classList.add("active");
});
btnmode.addEventListener("click", function () {
    if (darkMode == false) {
        modoDark();
    } else {
        modoLight();
    }
});

//funciones JS
function ObtenerDatosUser(gitUrl) {
    fetch(gitUrl)
        .then((response) => response.json())
        .then((data) => {
            actualizarPerfil(data);
        })
        .catch((error) => {
            throw error;
        });
}

function actualizarPerfil(data) {
    if (data.message !== "Not Found") {
        noresults.style.display = "none";
        nocumple.style.display = "none";

        function checkNull(param1, param2) {
            if (param1 === "" || param1 === null) {
                param2.style.opacity = 0.5;
                param2.previousElementSibling.style.opacity = 0.5;
                return "No Disponible";
            } else {
                return `${param1}`;
            }
        }

        avatar.src = `${data.avatar_url}`;
        linkPerfil.href = `${data.html_url}`;
        userName.innerText = `${data.name}`;
        user.innerText = `@${data.login}`;
        datesegments = data.created_at.split("T").shift().split("-");
        date.innerText = `desde ${datesegments[2]} ${
            months[datesegments[1] - 1]
            } ${datesegments[0]}`;
        bio.innerText =
            data.bio == null ? "Este perfil no tiene biografia" : `${data.bio}`;
        repos.innerText = `${data.public_repos}`;
        followers.innerText = `${data.followers}`;
        following.innerText = `${data.following}`;
        linkPerfil1.href = `${data.html_url}`;
        user_location.innerText = checkNull(data.location, user_location);
        page.innerText = checkNull(data.blog, page);
        twitter.innerText = checkNull(data.twitter_username, twitter);
        company.innerText = checkNull(data.company, company);
        buscar.classList.toggle("active");
        perfilcontainer.classList.toggle("active");
    } else {
        noresults.style.display = "block";
    }
}

//MODO OSCURO
const prefersDarkMode =
    window.matchMedia &&
    window.matchMedia("(prefers-color-scheme: dark)").matches;

const localStorageDarkMode = localStorage.getItem("test");

if (localStorageDarkMode === null) {
    localStorage.setItem("dark-mode", prefersDarkMode);
    darkMode = prefersDarkMode;
}

if (localStorageDarkMode) {
    darkMode = localStorageDarkMode;
    modoDark();
} else {
    localStorage.setItem("dark-mode", prefersDarkMode);
    darkMode = prefersDarkMode;
    modoLight();
}

function cerrar_tab() {
    if (confirm("Estas seguro que deseas salir?")) {
        window.close();
    }
}

function modoLight() {
    root.setProperty("--lm-bg", "#F6F8FF");
    root.setProperty("--lm-bg-content", "#FEFEFE");
    root.setProperty("--lm-text", "#4B6A9B");
    root.setProperty("--lm-text-alt", "#2B3442");
    root.setProperty("--lm-shadow-xl", "rgba(70, 88, 109, 0.25)");
    modetext.innerText = "CAMBIAR A OSCURO";
    modeicon.src = "./assets/icon-moon.svg";
    root.setProperty("--lm-icon-bg", "brightness(100%)");
    darkMode = false;
    localStorage.setItem("dark-mode", false);
}

function modoDark() {
    root.setProperty("--lm-bg", "#141D2F");
    root.setProperty("--lm-bg-content", "#1E2A47");
    root.setProperty("--lm-text", "white");
    root.setProperty("--lm-text-alt", "white");
    root.setProperty("--lm-shadow-xl", "rgba(70,88,109,0.15)");
    modetext.innerText = "CAMBIAR A CLARO";
    modeicon.src = "./assets/icon-sun.svg";
    root.setProperty("--lm-icon-bg", "brightness(1000%)");
    darkMode = true;
    localStorage.setItem("dark-mode", true);
}


perfilcontainer.classList.toggle("active");
buscar.classList.toggle("active");
ObtenerDatosUser(url + usuario.value);