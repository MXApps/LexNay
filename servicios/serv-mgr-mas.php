<?php include "../nav.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexnay - Otros Servicios Migratorios</title>
    <script src="https://kit.fontawesome.com/f55b7cd972.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../static/styles.css">
    <link rel="stylesheet" href="../static/serv-styles.css">
    <?php echo $adSense ?>
    <?php echo $analytics ?>
</head>
<body>
    <div class="main-wrapper">
        
        <div class="lx-ad-container" style="background-image: url(    <?php echo $imageFolder ?>american-dream.jpg);">
            <h1>Necesito Ayuda con un Trámite Migratorio</h1>
            <div class="option-1">
                <h2>¡Te ayudamos a resolver tus problemas sobre migración!</h2>
                <div class="contact-methods">
                    <a href="https://wa.me/523222112044" target="_blank">
                        <img src="    <?php echo $imageFolder ?>wa.png" alt="wa">
                    </a> 
                    <a href="https://www.facebook.com/LexNay" target="_blank">
                        <img src="    <?php echo $imageFolder ?>fb.png" alt="fb">
                    </a>
                    <a href="tel:322-211-2044">
                        <img src="    <?php echo $imageFolder ?>phone.png" alt="">
                    </a>
                </div>
            </div>
            <div class="option-2">
                <h2>Quiero Saber Más</h2>
                <button id="btn-more-info">Más Información</button>
            </div>
            <div class="disponibilidad">
                <h2>La disponibilidad de los servicios dependen del proceso.</h2>
            </div>
        </div>

        <div class="band-a" id="band-1">
            <div class="question-and-icon">
                <h2>¿Qué otros servicios migratorios ofrecen?</h2>
                <i class="fas fa-briefcase qa-icon"></i>
            </div>
            <div class="answer">
                <h2>En general, ofrecemos cualquier servicio migratorio y legal que se pueda desprender o complementar a los mencionados en nuestra página de <a href="servicios.html" style="color: blue; text-decoration: underline;">servicios</a>.</h2>
                <br>
                <h2>Por ejemplo:</h2>
                <br>
                <h2>
                    <ul>
                        <li>Rectificación o Anulación de Actas del Registro Civil.</li>
                        <li>Traducción de Documentos.</li>
                        <li>Asistencia para Nacidos Extemporáneos.</li>
                        <li>Asistencia para tramitar el pasaporte americano cuando no se puede dar el consentimiento de uno o ambos padres.</li>
                        <li>Trámite de cualquier tipo de visa (estudiante, humanitaria, etc.)</li>
                        <li>Asistencia con documentación complementaria para la ETA.</li>
                        <li>Registro de viajes a Canadá.</li>
                        <li>Y muchos, muchos más.</li>

                    </ul>
                </h2>
            </div>
        </div>

        <div class="start-wrapper">
            <div class="start-process-container">
                <i class="fas fa-rocket start-icon"></i>
                <h1 class="start-h1 start-title">Necesito Ayuda con un Asunto Migratorio</h1>
                <div class="visitanos" id="visitanos-link">
                    <h1 class="start-h1">Visitanos</h1>
                    <h2 style="color: blue;"><u>Corregidora 25A, Col. San José</u></h2>
                    <h2 style="color: blue;"><u>Las Varas, Nayarit</u></h2>
                </div>
                <div class="mandanos-mensaje">
                    <h1 class="start-h1">Mandanos Mensaje</h1>
                    <a href="https://www.facebook.com/LexNay" target="_blank">
                        <img src="    <?php echo $imageFolder ?>fb.png" alt="fb" class="start-img">
                    </a>
                    <a href="https://wa.me/523222112044" target="_blank">
                        <img src="    <?php echo $imageFolder ?>wa.png" alt="wa" class="start-img">
                    </a>
                </div>
                <div class="llamanos">
                    <h1 class="start-h1">Llámanos</h1>
                    <a href="tel:322-211-2044">
                        <img src="    <?php echo $imageFolder ?>phone.png" alt="" class="start-img">
                    </a>
                </div>
            </div>
        </div>

    </div>

    
    <script type="text/javascript" src="../scripts/search.js"></script>
    <script src="../scripts/serv.js"></script>
    
</body>

</html>