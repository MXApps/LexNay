<?php include "../nav.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexnay - CRBA</title>
    <link rel="stylesheet" href="../static/styles.css">
    <script src="https://kit.fontawesome.com/f55b7cd972.js" crossorigin="anonymous"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7583592460687457"
     crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../static/serv-styles.css">
    <?php echo $adSense ?>
    <?php echo $analytics ?>
</head>
<body>

    <div class="main-wrapper">
        
        <div class="lx-ad-container" style="background-image: url(<?php echo $imageFolder ?>family.jpg);">
            <h1>Quiero Iniciar el Tramite de CRBA</h1>
            <div class="option-1">
                <h2>¡Otorgale la ciudadanía americana a tu hijo o hija!</h2>
                <div class="contact-methods">
                    <a href="https://wa.me/523222112044" target="_blank">
                        <img src="<?php echo $imageFolder ?>wa.png" alt="wa">
                    </a> 
                    <a href="https://www.facebook.com/LexNay" target="_blank">
                        <img src="<?php echo $imageFolder ?>fb.png" alt="fb">
                    </a>
                    <a href="tel:322-211-2044">
                        <img src="<?php echo $imageFolder ?>phone.png" alt="">
                    </a>
                </div>
            </div>
            <div class="option-2">
                <h2>Quiero Saber Más</h2>
                <button id="btn-more-info">Más Información</button>
            </div>
            <div class="disponibilidad">
                <h2>¡Ofrecemos este servicio en toda la republica mexicana!</h2>
            </div>
        </div>

        <div class="band-a" id="band-1">
            <div class="question-and-icon">
                <h2>¿Qué es el CRBA?</h2>
                <i class="far fa-address-card qa-icon"></i>
            </div>
            <div class="answer">
                <h2>El Consular Report of Birth Abroad (Reporte Consular de Nacimiento en el Extranjero) o CRBA por sus siglas, es el otrogamiento de la doble nacionalidad a hijos de ciudadanos americanos.</h2>
                <br>
                <h2>Los niños que hayan nacido en México podrán obtener su nacionalidad americana a través de este proceso.</h2>
                <br>
                <h2>Además del CRBA, una vez terminado el proceso, su hijo o hija habrá obtenido su primer pasaporte americano.</h2>
            </div>
        </div>

        <div class="band-b">
            <div class="question-and-icon">
                <h2>¿Cuanto cuesta tramitarlo?</h2>
                <i class="fas fa-money-check-alt qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Tiene 3 costos básicos:</h2>
                <br>
                <h2> <u>CRBA:</u> $100USD</h2>
                <br>
                <h2> <u>Pasaporte Americano del Menor:</u> $115USD</h2>
                <br>
                <h2> <u>Honorarios:</u> $9,000MXN</h2>
                <br>
                <h2>Dependiendo de cada caso, puede que haya costos adicionales.</h2>
                <br>
                <h2>Los pagos no se hacen en una sola exhibición, se van requiriendo conforme avanza el proceso.</h2>
            </div>
        </div>

        <div class="band-a">
            <div class="question-and-icon">
                <h2>¿Le puedo transmitir la ciudadanía a mi hijo o hija?</h2>
                <i class="fas fa-baby qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Esto se determina dependiendo de la presencia física que tuvo el padre o madre americano en Estados Unidos antes del nacimiento del menor.</h2>
                <br>
                <h2>La presencia física requerida depende a su vez de diferentes factores como si el ciudadano americano es el padre o la madre, estado civil de los padres al momento del nacimiento del menor, entre otros.</h2>
                <br>
                <h2>Si el padre o madre americano no cumple con el requisitos de presencia física, el CRBA puede ser negado. Para determinar la posibilidad exacta de transmitir la ciudadanía al menor, se recomienda programar una cita de asesoría con nosotros.</h2>
            </div>
        </div>

        <div class="start-wrapper">
            <div class="start-process-container">
                <i class="fas fa-rocket start-icon"></i>
                <h1 class="start-h1 start-title">Quiero Iniciar el Trámite de CRBA para mi Hijo o Hija</h1>
                <div class="visitanos" id="visitanos-link">
                    <h1 class="start-h1">Visitanos</h1>
                    <h2 style="color: blue;"><u>Corregidora 25A, Col. San José</u></h2>
                    <h2 style="color: blue;"><u>Las Varas, Nayarit</u></h2>
                </div>
                <div class="mandanos-mensaje">
                    <h1 class="start-h1">Mandanos Mensaje</h1>
                    <a href="https://www.facebook.com/LexNay" target="_blank">
                        <img src="<?php echo $imageFolder ?>fb.png" alt="fb" class="start-img">
                    </a>
                    <a href="https://wa.me/523222112044" target="_blank">
                        <img src="<?php echo $imageFolder ?>wa.png" alt="wa" class="start-img">
                    </a>
                </div>
                <div class="llamanos">
                    <h1 class="start-h1">Llamanos</h1>
                    <a href="tel:322-211-2044">
                        <img src="<?php echo $imageFolder ?>phone.png" alt="" class="start-img">
                    </a>
                </div>
            </div>
        </div>

    </div>

    
    <script type="text/javascript" src="../scripts/search.js"></script>
    <script src="../scripts/serv.js"></script>
    
</body>

</html>