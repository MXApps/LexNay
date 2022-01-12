<?php 

$domain = "http://localhost:4000/php-sites/lexnay%20website/";

function getFileLines($fname){

    $file = fopen($fname, "r");
    $lines = array();

    while(!feof($file)){
        $line = trim(fgets($file));
        if (str_contains($line, "iframe")){
            array_push($lines, $line);
            continue;
        }
        if ($line == "\n" || $line == "\r" || $line == "\r\n" || strlen($line) == 0 || $line == "\n\n"){
            continue;
        };
        array_push($lines, $line);
    }

    fclose($file);

    return $lines;  
}

function checkImgExt($extArray, $string){
    for($i=0;$i<count($extArray);$i++){
        if (str_ends_with($string,$extArray[$i])){
            return true;
        }
    }
}

function getCurrentFileNumber(){
    return count(glob('noticias/*.txt') );
}

function generateNewsURL($domain, $id){
    return $domain . "articulo.php?id=" . $id;
}

function getContent($contentIndexes, $lines){

    $contentList = array();

    $imgExtensions = array(".tif", ".tiff", ".gif", ".png", ".jpeg", ".svg", ".jpg", ".jfif", ".webp");
    $previewIMG = "";

    for($i=$contentIndexes[0]; $i <= $contentIndexes[1]; $i++){

        $item = $lines[$i];

        if(checkImgExt($imgExtensions, $item)){

            if(strlen($previewIMG) < 1){
                $previewIMG = $item;
            }
            
            $lines[$i] = 
            '<div class=media-container>
            <a href=' . $item . ' target=_blank>
                <img class=news-img src=' . $item . ' alt=s>
            </a>
            </div>';
            array_push($contentList, $lines[$i]);
            continue;
        }

        if (str_contains($item,"</iframe>")){
            $lines[$i] = 
            '<div class="video-container">' . $item . '</div>'; 
            array_push($contentList, $lines[$i]);
            continue;
        }

        $lines[$i] = "<p>" . $item . "</p>";
        array_push($contentList, $lines[$i]);
    }

    array_push($contentList, $previewIMG);

    return $contentList;
    
}

function mainGET($id){
    $fname = "noticias/" . $id . ".txt";

    $flines = getFileLines($fname);
    $contentIndexes = array(3, count($flines)-2);

    $articuloTitle = $flines[0];
    $date = $flines[1];
    $descripcion = $flines[2];
    $content = getContent($contentIndexes, $flines);
    $previewIMG = $content[count($content)-1];
    $fuente = $flines[count($flines)-1];

    return array($articuloTitle, $date, $descripcion, $content, $fuente, $previewIMG);
}

if($_GET){
    $data = mainGET($_GET['id']);

    $articuloTitle  = $data[0];
    $date           = $data[1];
    $descripcion    = $data[2];
    $content        = $data[3];
    $fuente         = $data[4];
    $previewIMG     = $data[5];
}

if ($_POST){
    //decide on file name
    $currentFiles = getCurrentFileNumber();
    $currentId = $currentFiles + 1;

    //get data
    $content = array(
        $_POST['titulo'],
        $_POST['fecha'],
        $_POST['descripcion'],
        $_POST['contenido'],
        $_POST['fuente']
    );
    
    //write data on to file
    $articleFile = fopen("noticias/" . $currentId . ".txt", "w");
    for($i=0;$i<count($content);$i++){
        fwrite($articleFile, $content[$i] . "\n\n"); //easier to read in txt
    }

    //close file
    fclose($articleFile);
}


?>