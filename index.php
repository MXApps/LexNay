<?php 
include "nav.php";
include "news-file-handler.php" ;

$currentNewsNumber = getCurrentFileNumber();

$news = array();

//get all news data from last 5 articles.
for($i=1;$i<=$currentNewsNumber || $i==5;$i++){
    $url = generateNewsURL($domain, $i); //to article
    $newsData = mainGET($i); 
    array_push($newsData, $url); 
    array_push($news, $newsData);
}

//create container per news
function generateNewsSlides($news){
    //exctract data
    $articuloTitle  = $news[0];
    $date           = $news[1];
    $descripcion    = $news[2];
    $content        = $news[3];
    $fuente         = $news[4];
    $previewIMG     = $news[5];
    $url            = $news[6];

    //gen HTML
    echo 
    '<div class="mySlides fade">
        <a href="',$url,'">
            <img src="',$previewIMG,'">
            <div class="text">',$articuloTitle,'</div>
        </a>
    </div>'
    ;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexnay</title>
    <link rel="stylesheet" href="static/styles.css">
    <script src="https://kit.fontawesome.com/f55b7cd972.js" crossorigin="anonymous"></script>
    <?php echo $adSense ?>
    <?php echo $analytics ?>
</head>
<body>

    <div class= "section-bg-img">
        <div class="section-container">
            <h1>Despacho Juridico y Migratorio en Nayarit</h1>
        </div>
    </div>

    <div class="slide-main-container">

        <div>
            <h1 class="reciente">Reciente (Presiona / Da Clic en la Imagen)</h1>
        </div>

        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->


            <?php
            for($i=count($news)-1;$i>=0;$i--){
                generateNewsSlides($news[$i]);
            }
            ?>
        
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <?php
            for($i=0;$i<count($news);$i++){
                echo 
                '<span class="dot" onclick="currentSlide(',$i,')"></span>';
            };
            ?>
        </div>
    </div>
 
    <script type="text/javascript" src="scripts/slides.js"></script>

</body>

</html>