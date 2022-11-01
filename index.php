<?php
$titulo = "JordanGarciaDev | GitHub buscar usuario de Github";
$mode_text = "DARK";
$no_results = "No existe";
$no_cumple = "No cumple criterio";
$text_search = "Buscar";
$text_repo = "Repositorios";
$text_Seguidores = "Seguidores";
$text_Siguiendo = "Siguiendo";
$logo = "https://www.doublevpartners.com/assets/images/shared/dvp-logo.svg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png">
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
  <title><?php echo $titulo;?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container">
    <header class="header">
      <img src="<?php echo $logo;?>" alt="logo">
      <div id="btn-modo">
        <p id="mode-text"><?php echo $mode_text;?></p>
        <div class="icon-container"><img id="mode-icon" src="./assets/icon-moon.svg" alt=""></div>
      </div>
    </header>
    <main>

      <div id="app">
        <div class="buscar-container active">
          <input type="search" name="user-input" id="usuario" minlength="4" placeholder="Buscar usuario de Github...">
          <div class="error">
            <p id="no-results"><?php echo $no_results;?></p>
            <p id="no-cumple"><?php echo $no_cumple;?></p>
          </div>
          <button class="btn-buscar" id="submit"><?php echo $text_search;?></button>
        </div>
        <div class="perfil-container">
          <div class="perfil-content">
            <div class="perfil-header">
              <a href="#" id="linkPerfil">
                <img id="avatar" src="./assets/favicon-32x32.png" alt="icono default">
              </a>
              <div class="perfil-info-wrapper">
                <div class="perfil-nombre">
                  <h2 id="name"></h2>
                  <a href="#" id="linkPerfil1">
                    <p id="user"></p>
                  </a>
                </div>
                <p id="date"></p>
              </div>
            </div>
            <p id="bio"></p>
            <div class="perfil-stats-wrapper">
              <div class="perfil-stat">
                <p class="titulo-stat"><?php echo $text_repo;?></p>
                <p id="repos"class="valor-stat"></p>
              </div>
              <div class="perfil-stat">
                <p class="titulo-stat"><?php echo $text_Seguidores;?></p>
                <p id="followers" class="valor-stat"></p>
              </div>
              <div class="perfil-stat">
                <p class="titulo-stat"><?php echo $text_Siguiendo;?></p>
                <p id="following" class="valor-stat"></p>
              </div>
            </div>
            <div class="perfil-bottom-wrapper">
              <div class="perfil-info">
                <div class="bottom-icons"><img src="./assets/icon-gps.svg" alt=""></div>
                <p id="location"></p>
              </div>
              <div class="perfil-info">
                <div class="bottom-icons"><img src="./assets/icon-website.svg" alt=""></div>
                <p id="page"></p>
              </div>
              <div class="perfil-info">
                <div class="bottom-icons"><img src="./assets/icon-twitter.svg" alt=""></div>
                <p id="twitter"></p>
              </div>
              <div class="perfil-info">
                <div class="bottom-icons"><img src="./assets/icon-company.svg" alt=""></div>
                <p id="company"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <script src="script.js"></script>
</body>
</html>