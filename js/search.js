$(document).ready(function() {


    var result = ''

    $("#form").submit(function (event) {
        event.preventDefault();

        var user = $("#usuario").val()

        searchUsers(user)

    })


    $("#submit").click(function () {
        var user = document.getElementById("usuario");
        var noresults = document.getElementById("no_results");
        var submit = document.getElementById("submit");

        const box = document.getElementById('box');
        console.log(box); // 👉️ null


        //btns
        if (user.value !== "doublevpartners")
        {
            box.style.display = 'none';
            }
            else{
            box.style.display = 'block';
            searchUsers(user)
            }
    })


    function searchUsers(user) {

        $("#result").empty()

        $.get("https://api.github.com/search/users?q="+user+"+in:user&per_page=10&page=1",function (data) {
            data.items.forEach(item => {
                user =`<div class="perfil-container">

                <div class="perfil-content">
                    <div class="perfil-header">
                        <a title="ir al sitio de github" href="${item.html_url}" id="linkPerfil">
                            <img id="avatar" src="${item.avatar_url}" alt="icono default">
                        </a>
                        <div class="perfil-info-wrapper">
                            <div class="perfil-nombre">
                                <h2 id="name" style="color:white;">${item.login} <img src="https://img.icons8.com/color/512/verified-badge.png" width="16" alt="verified"></h2>
                                <a title="ver perfil de github desde nuestra web" href="usuario.php?usuario=${item.login}" id="linkPerfil1">
                                    <p id="user"><img style="vertical-align: middle;width: 16px;" src="https://www.doublevpartners.com/assets/images/shared/logo.ico" alt="website"> Perfil Parther</p>
                                </a>
                            </div>
                        </div>
                                            <div class="perfil-bottom-wrapper">
                        <div class="perfil-info">
                            <div class="bottom-icons"> <a title="ir al sitio de github" href="${item.html_url}" id="linkPerfil1"><img src="./assets/icon-website.svg" alt="website"></a></div>
                            <p id="page"></p>
                        </div>
                    </div>
                    </div>                   
                </div>
            </div><br>`

                $("#result").append(user)
            });
        })
    }

    })