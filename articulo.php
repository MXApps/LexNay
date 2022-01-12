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
    <title> <?php echo "Lexnay - " . $articuloTitle ?> </title>
    <link rel="stylesheet" href="static/styles.css">
    <link rel="stylesheet" href="static/articulos-styles.css">
    <script src="https://kit.fontawesome.com/f55b7cd972.js" crossorigin="anonymous"></script>
    <?php echo $adSense ?>
    <?php echo $analytics ?>
</head>

<body>

    <div class="noticias-wrapper">

        <div class="noticias-container">

            <div class="noticias-header">
                <a href="https://www.facebook.com/LexNay" target="_blank"><img src="image/logo.png" class="profile-pic" alt="lexnay-logo"></a>
                <div class="name-date">
                    <p class="profile-name"><a href="https://www.facebook.com/LexNay" target="_blank">LexNay</a></p>
                    <p class="date"> <?php echo $date ?> </p>
                </div>
                <h1 class="title"> <?php echo $articuloTitle ?> </h1>
            </div>

            <div class="noticias-descripcion">

                <p class="descripcion-de-articulo"><strong> <?php echo $descripcion ?> </strong></p>

                <?php 
                for ($c=0;$c<count($content)-1;$c++){
                    echo $content[$c];
                }
                ?>

                <p><a href= <?php echo $fuente ?> id="fuente" target="_blank"> Fuente: <?php echo $fuente ?> </a></p>

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