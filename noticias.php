<?php 
include "nav.php";
include "news-file-handler.php" ;

$currentNewsNumber = getCurrentFileNumber();

$news = array();

//get all news data from available articles
for($i=1;$i<=$currentNewsNumber;$i++){
    $url = generateNewsURL($domain, $i);
    $newsData = mainGET($i);
    array_push($newsData, $url); //insert url
    array_push($news, $newsData);
}

//create container per news
function generateNewsContainer($news){
    //excract data
    $articuloTitle  = $news[0];
    $date           = $news[1];
    $descripcion    = $news[2];
    $content        = $news[3];
    $fuente         = $news[4];
    $previewIMG     = $news[5];
    $url            = $news[6];

    //gen HTML
    echo 
    '<div class="noticias-container">

        <div class="noticias-header">
            <div class="name-date">
                <p class="date">', $date, '</p>
            </div>
            <h1 class="title">', $articuloTitle, '</h1>
        </div>

        <div class="noticias-descripcion">
            <p class="descripcion-de-articulo">', $descripcion . " ", '<a href="',$url, '" class="see-more">ver más...</a></p>
        </div>
        
        <a href="',$url,'"><img src="',$previewIMG,'" alt="" class="preview-img"></a>


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
    <link rel="stylesheet" href="static/noticias-styles.css">
    <script src="https://kit.fontawesome.com/f55b7cd972.js" crossorigin="anonymous"></script>
    <?php echo $adSense ?>
    <?php echo $analytics ?>
</head>
<body>

    <div class= "section-bg-img">
        <div class="section-container">
            <h1>Noticias</h1>
        </div>
    </div>

    <div class="noticias-wrapper">

        <div class="year-container">
            <h2 class="year">2022</h2>
        </div>

        <?php 
        for($i=count($news)-1;$i>=0;$i--){
            generateNewsContainer($news[$i]);
        } 
        ?>

    </div>

</body>

</html>