<?php include "../nav.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexnay - ETA</title>
    <script src="https://kit.fontawesome.com/f55b7cd972.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../static/styles.css">
    <link rel="stylesheet" href="../static/serv-styles.css">
    <?php echo $adSense ?>
    <?php echo $analytics ?>
</head>
<body>

    <div class="main-wrapper">
        
        <div class="lx-ad-container" style="background-image: url(<?php echo $imageFolder ?>can.jpg);">
            <h1>Quiero Iniciar el Tramite de mi ETA</h1>
            <div class="option-1">
                <h2>¡Emprende tu proceso para viajar a Canadá!</h2>
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
                <h2>¿Qué es la ETA?</h2>
                <i class="far fa-address-card qa-icon"></i>
            </div>
            <div class="answer">
                <h2>La Autorización Electrónica de Viaje (ETA por sus siglas en inglés) es el permiso que da el gobierno canadience a los extranjeros para visitar o transitar por su país.</h2>
                <br>
                <h2>La ETA no sirve para trabajar o vivir en Canadá.</h2>
                <br>
                <h2>Además de la ETA, en la actualidad es necesario registrar la entrada a Canadá antes de su viaje. Si bien es un trámite sencillo, debe tomarse en cuenta antes de viajar.</h2>
            </div>
        </div>

        <div class="band-b">
            <div class="question-and-icon">
                <h2>¿Cuanto cuesta tramitarla?</h2>
                <i class="fas fa-money-check-alt qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Tiene 2 costos:</h2>
                <br>
                <h2>
                    <ol>
                        <li><u>Tarifa del ETA</u>: $7 CAD ($115 MXN aproximadamente)</li>
                        <li><u>Honorarios</u>: $1,000 MXN</li>
                    </ol>
                </h2>
            </div>
        </div>

        <div class="band-a">
            <div class="question-and-icon">
                <h2>¿Cuáles son los Requisitos?</h2>
                <i class="fas fa-tasks qa-icon"></i>
            </div>
            <div class="answer">
                <h2>El único requisito es:</h2>
                <br>
                <h2> <u>Pasaporte Mexicano:</u>  Para información sobre estre trámite, da click <a href="serv-pmx.php">aquí.</a></h2>
                <br>
                <h2> Cada caso es diferente y dependiendo de la o las personas, hay diferentes <u>documentos complementarios</u> que se deben presentar. Para conocer exactamente qué documentos, es necesario programar una asesoría.</h2>
            </div>
        </div>

        <div class="band-b">
            <div class="question-and-icon">
                <h2>¿Cuáles son mis probabilidades de aprobación?</h2>
                <i class="fas fa-check qa-icon"></i>
            </div>
            <div class="answer">
                <h2>La aprobación del ETA es casi segura, excepto si el solicitante:</h2>
                <br>
                <h2>
                    <ul>
                        <li>Tiene antecedentes criminales.</li>
                        <li>Ha sido deportado de algún otro país</li>
                    </ul>
                </h2>
                <br>
                <h2>En caso de lo anterior, es posible que se deba presentar documentación complementaria. Dependiendo de los resultados, el gobierno canadiense determinará la aprobación o no de la ETA.</h2>
            </div>
        </div>

        <div class="band-a">
            <div class="question-and-icon">
                <h2>¿Cuánto dura este proceso?</h2>
                <i class="fas fa-clock qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Normalmente 30 minutos, pero puede durar hasta 48 horas.</h2>
            </div>
        </div>

        <div class="start-wrapper">
            <div class="start-process-container">
                <i class="fas fa-rocket start-icon"></i>
                <h1 class="start-h1 start-title">Quiero Iniciar Mi Trámite de ETA</h1>
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