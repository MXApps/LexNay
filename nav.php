<?php

$DomainPath = "http://localhost:4000/php-sites/lexnay%20website/"; // end with '/'
$imageFolder = $DomainPath . "image/";
$adSense = "<script async src=https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7583592460687457
crossorigin=anonymous></script>";
$analytics = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexnay</title>
    <link rel="stylesheet" href="static/nav-styles.css">
    <script src="https://kit.fontawesome.com/f55b7cd972.js" crossorigin="anonymous"></script>
    <?php echo $adSense ?>
    <?php echo $analytics ?>
</head>

<body>

    <!--Navigation bar-->
    <div class="nav-container">
        <nav class="nav-bar">
    
            <div class="logo-container">
                <a href="index.html">
                    <img class="logo-img" src=<?php echo $DomainPath . "image/logo.png"?> alt="logo.png">
                </a>
                <a href="index.html">
                    <div class="logo-txt-container">
                        <h1 class="logo-text">Despacho Juridico</h1>
                        <h1 class="logo-text">y Migratorio</h1>
                    </div>
                </a>
                <a href="index.html">
                    <img class="logo-img3" src=<?php echo $DomainPath . "image/logo3.png"?> alt="logo3.png">
                </a>
            </div>
    
            <div class="nav-right"> 
                <div class="nav-menu">
                    <a href=<?php echo $DomainPath . "index.php"?> class="nav-item">Inicio</a>
                    <a href=<?php echo $DomainPath . "servicios.php"?> class="nav-item">Servicios</a>
                    <a href=<?php echo $DomainPath . "noticias.php"?> class="nav-item">Noticias</a>
                    <a href=<?php echo $DomainPath . "contactanos.php"?> class="nav-item">Contactanos</a>
                </div>
                <div class="social-media-container search-bar-container">
    
                    <div>
                        <a href="https://www.facebook.com/LexNay" target="_blank">
                            <img src=<?php echo $DomainPath . "image/fb.png"?> alt="fb" class="fb-logo social-media-logo">
                        </a>
                        <a href="https://wa.me/523222112044" target="_blank">
                            <img src=<?php echo $DomainPath . "image/wa.png"?> alt="wa" class="wa-logo social-media-logo">
                        </a>
                        <a href="https://www.youtube.com/channel/UCSaMAvfZsP7eNTQmL581BUg/featured" target="_blank">
                            <img src=<?php echo $DomainPath . "image/yt.png"?> alt="yt" class="yt-logo social-media-logo">
                        </a>
                    </div>
    
                    <div class="search-bar">
                        <form role="search", id="search-form">
                            <input type="text" placeholder="Buscar.." name="search" id="search-btn">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>                        
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <script type="text/javascript" src="scripts/search.js"></script>

</body>

</html>