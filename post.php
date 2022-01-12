<?php 

include "nav.php";
include "news-file-handler.php";

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php "Posting" . $articuloTitle ?> </title>
    <link rel="stylesheet" href="static/styles.css">
    <link rel="stylesheet" href="static/articulos-styles.css">
    <link rel="stylesheet" href="static/post.css">
    <script src="https://kit.fontawesome.com/f55b7cd972.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="noticias-wrapper">

        <div class="noticias-container">

            <div class="noticias-header">
                <a href="https://www.facebook.com/LexNay" target="_blank"><img src="image/logo.png" class="profile-pic" alt="lexnay-logo"></a>
                <div class="name-date">
                    <p class="profile-name"><a href="https://www.facebook.com/LexNay" target="_blank">LexNay</a></p>
                </div>
            </div>

            <div class="noticias-descripcion">

                <div class="form-container">
                    <form action="post.php" id="form" method="post">
                        Título: <input type="text" class="text-input" name="titulo">
                        Fecha: <input type="text" class="text-input" name="fecha">
                        Descripcion: <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="text-input"></textarea>
                        Contenido: <textarea name="contenido" id="contenido" cols="30" rows="30" class="text-input"></textarea>
                        Fuente: <input type="text" class="text-input" name="fuente">
                        <button type="submit" class="text-input">Submit</button>
                    </form>
                </div>

            </div>

            <div class="siguenos">
                <p>Siguenos:</p>
                <a href="https://www.facebook.com/LexNay"><i class="fab fa-facebook"></i></a> 
                <a href="https://www.youtube.com/channel/UCSaMAvfZsP7eNTQmL581BUg/featured"><i class="fab fa-youtube"></i></a>
            </div>

        </div>

    </div>

</body>

</html>