<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 31/10/2022
 * Time: 10:20 PM
 */

$titulo = "JordanGarciaDev | GitHub buscar usuarios de Github";
$no_results = "No puede buscar este nombre!";
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
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #0a0e16;">

<div class="container">
    <header class="header">
        <img src="<?php echo $logo;?>" alt="logo">
    </header>
    <main>

        <div id="app">
            <form action="" id="form">
                <div class="buscar-container active">

                    <input type="text" name="usuario" id="usuario" minlength="4" placeholder="Buscar usuarios de Github...">
                    <button class="btn-buscar" id="submit" type="submit"><?php echo $text_search;?></button>

                </div>
            </form>
            <div class="error">
                <p id="box" style="display: none"><?php echo $no_results;?></p>
            </div>

            <div id="result" style="height: 0px;">

            </div>
        </div>
    </main>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/search.js"></script>
</body>
</html>