<?php include "../nav.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexnay - Pasaporte Americano</title>
    <link rel="stylesheet" href="../static/styles.css">
    <link rel="stylesheet" href="../static/serv-styles.css">
    <script src="https://kit.fontawesome.com/f55b7cd972.js" crossorigin="anonymous"></script>
    <?php echo $adSense ?>
    <?php echo $analytics ?>
</head>
<body>
    <div class="main-wrapper">
        
        <div class="lx-ad-container" style="background-image: url(<?php echo $imageFolder ?>travel-usa.jpg);">
            <h1>Quiero Iniciar el Tramite de mi Pasaporte Americano</h1>
            <div class="option-1">
                <h2>¡Emprende tu proceso para viajar, vivir o trabajar en otro país!</h2>
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
                <h2>¿Qué es el Pasaporte Americano?</h2>
                <i class="fas fa-passport qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Es un documento que todos los <u>ciudadanos americanos</u> tienen derecho adquirir. Su función más común desde México es permitir el ingreso a ciudadanos americanos a los Estados Unidos, pero además tiene la función de permitir viajar a otros países, ser una identificación oficial, acredita la nacionalidad, es requerido en varios tramites de migración, etc.</h2>
            </div>
        </div>

        <div class="band-b">
            <div class="question-and-icon">
                <h2>¿Cuanto cuesta tramitarlo?</h2>
                <i class="fas fa-money-check-alt qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Costos básicos:</h2>
                <br>
                <h2>
                    <ul>
                        <li><u>Primera Vez para Adultos (16 años o más):</u> $145 USD*</li>
                        <li><u>Renovación para Adultos (16 años o más):</u> $110 USD</li>
                        <li><u>Aplicación para menores de 16 años:</u> $115 USD</li>
                        <li><u>Honorarios:</u> $1,500 MXN</li>
                    </ul>
                </h2>
                <br>
                <h2>* Se considera como primera vez la tramitación de un pasaporte de adulto aunque el solicitante haya tenido pasaporte siendo menor de edad.</h2>
            </div>
        </div>

        <div class="band-a">
            <div class="question-and-icon">
                <h2>¿Cuáles son los requisitos?</h2>
                <i class="fas fa-clipboard-list qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Los requisitos pueden variar dependiendo del caso de cada solicitante, pero generalmente se requiere:</h2>
                <br>
                <h2>
                    <ol style="list-style-position: inside;">
                        <li><u>Prueba de Nacionalidad Americana</u>: Acta de nacimiento y/o pasaporte americano.</li>
                        <li><u>Identificación Oficial</u>: Del padre o madre del menor, o del solicitante cuando es mayor de edad..</li>
                        <li><u>Fotografías</u>: Tamaño Pasaporte Americano.</li>
                        <li><u>Consentimiento Parental:</u> La forma de proveerlo depende de la edad del menor. No se requiere en adultos.</li>
                    </ol>
            </div>
        </div>

        <div class="band-b">
            <div class="question-and-icon">
                <h2>¿Qué pasa si no se puede presentar uno o ambos padres?</h2>
                <i class="fas fa-clipboard-check qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Se tiene que hacer el llenado de la forma correspondiente para comprobar el consentimiento del padre o madre que no se puede presentar.</h2>
            </div>
        </div>

        <div class="band-a">
            <div class="question-and-icon">
                <h2>¿Cuanto tiempo dura el proceso?</h2>
                <i class="far fa-clock qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Generalmente de <u>1 a 3 meses.</u> Sin embargo, las medidas implementadas en atención al COVID y la carga laboral del consulado pueden cambiar esto.</h2>
            </div>
        </div>


        <div class="start-wrapper">
            <div class="start-process-container">
                <i class="fas fa-rocket start-icon"></i>
                <h1 class="start-h1 start-title">Quiero Iniciar Mi Trámite de Pasaporte Americano.</h1>
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
    <script src="../scripts/serv.js"></script>
    
</body>

</html>