<?php include "../nav.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexnay - Visa Americana</title>
    <link rel="stylesheet" href="../static/styles.css">
    <link rel="stylesheet" href="../static/serv-styles.css">
    <script src="https://kit.fontawesome.com/f55b7cd972.js" crossorigin="anonymous"></script>
    <?php echo $adSense ?>
    <?php echo $analytics ?>
</head>
<body>
    <div class="main-wrapper">
        
        <div class="lx-ad-container">
            <h1>Quiero Iniciar el Tramite de mi Visa Americana</h1>
            <div class="option-1">
                <h2>¡Emprende tu proceso para viajar a Estados Unidos!</h2>
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
                <h2>¿Qué es la Visa Americana?</h2>
                <i class="far fa-address-card qa-icon"></i>
            </div>
            <div class="answer">
                <h2>La Visa Americana es un permiso que otorga el gobierno de los Estados Unidos de America para visitar su país con fines de turismo y algunas actividades de negocio.</h2>
                <br>
                <h2>Tiene una vigencia de 10 años durante los cuales podrás ingresar y salir del país libremente.</h2>
                <br>
                <h2>Se debe tramitar ante un consulado americano fuera de los Estados Unidos. No es posible tramitar la visa estando dentro de Los Estados Unidos.</h2>
            </div>
        </div>

        <div class="band-b">
            <div class="question-and-icon">
                <h2>¿Cuanto cuesta tramitarla?</h2>
                <i class="fas fa-money-check-alt qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Tiene 2 costos básicos:</h2>
                <br>
                <h2> <u>Derecho a Visa (DS-160):</u>  $160USD ($3,280MXN aproximadamente)</h2>
                <br>
                <h2> <u>Honorarios:</u> $1,500MXN</h2>
                <br>
                <h2>Dependiendo de cada caso, puede que haya costos adicionales. Por ejemplo,  tramitar el pasaporte mexicano. Para información sobre estre trámite, da click <a href="serv-pmx.php">aquí.</a></h2>
            </div>
        </div>

        <div class="band-a">
            <div class="question-and-icon">
                <h2>¿Cuáles son los Requisitos?</h2>
                <i class="fas fa-tasks qa-icon"></i>
            </div>
            <div class="answer">
                <h2>El único requisito indispensable es:</h2>
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
                <h2>La aprobación de una visa está sujeta al perfil de cada solicitante, pero en general, la mayoría de las personas pueden ser beneficiadas con una visa.</h2>
                <br>
                <h2>Entre nuestros beneficiados hemos tenido:</h2>
                <br>
                <h2> 
                    <ul>
                        <li>Empleados</li>
                        <li>Empresarios</li>
                        <li>Comerciantes</li>
                        <li>Personas que han estado ilegalmente en Estados Unidos</li>
                        <li>Profesionistas</li>
                        <li>Amas de Casa</li>
                        <li>Agricultores</li>
                        <li>Y muchos más...</li>
                    </ul>
                </h2>
                <br>
                <h2>Para conocer las probabilidades exactas de cada persona, recomendamos que nos <a href="../contactanos.php">contacte</a>  para programar una cita de asesoría.</h2>
            </div>
        </div>

        <div class="start-wrapper">
            <div class="start-process-container">
                <i class="fas fa-rocket start-icon"></i>
                <h1 class="start-h1 start-title">Quiero Iniciar Mi Trámite de Visa Americana</h1>
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