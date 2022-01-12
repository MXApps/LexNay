<?php include "../nav.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexnay - Doble Nacionalidad</title>
    <link rel="stylesheet" href="../static/styles.css">
    <script src="https://kit.fontawesome.com/f55b7cd972.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../static/serv-styles.css">
    <?php echo $adSense ?>
    <?php echo $analytics ?>
</head>
<body>
    
    <div class="main-wrapper">
        
        <div class="lx-ad-container" style="background-image: url(<?php echo $imageFolder ?>mx-usa.jpg);">
            <h1>Quiero Iniciar el Tramite de Doble Nacionalidad</h1>
            <div class="option-1">
                <h2>¡Otorgale la ciudadanía mexicana a tu hijo o hija americano!</h2>
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
                <h2>¡Ofrecemos este servicio solo en Nayarit y Jalisco!</h2>
            </div>
        </div>

        <div class="band-a" id="band-1">
            <div class="question-and-icon">
                <h2>¿Qué es la Doble Nacionalidad?</h2>
                <i class="fas fa-certificate qa-icon"></i>
            </div>
            <div class="answer">
                <h2>La doble nacionalidad es el proceso mediante el cual se le brinda la nacionalidad mexicana a un ciudadano americano.</h2>
                <br>
                <h2>Terminado el proceso, el solicitante obtendrá su certificado de inscripción, el cuál acredita que tiene la nacionalidad mexicana además de la americana (se le puede comparar con el acta de nacimiento aunque no son lo mismo). Además, el proceso incluye la tramitación de la CURP.</h2>
            </div>
        </div>

        <div class="band-b">
            <div class="question-and-icon">
                <h2>¿Cuanto cuesta tramitarlo?</h2>
                <i class="fas fa-money-check-alt qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Costos:</h2>
                <br>
                <h2>
                    <ul>
                        <li><u>Único</u>: $3,000 MXN</li>
                    </ul>
                </h2>
                <br>
                <h2>El costo ya incluye la traducción del acta de nacimiento y honorarios. Si su asunto no presenta particularidades, este es el único pago que se debe realizar.</h2>
                <br>
                </h2>
            </div>
        </div>

        <div class="band-a">
            <div class="question-and-icon">
                <h2>¿Cuáles son los requisitos?</h2>
                <i class="far fa-list-alt qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Generalmente son:</h2>
                <br>
                <h2>
                    <ul>
                        <li>Acta de Nacimiento del Extranjero.</li>
                        <li>Apostille del Acta de Nacimiento del Extranjero.</li>
                        <li>Traducción Certificada del Acta de Nacimiento del Extranjero.</li>
                        <li>Acta de Nacimiento del Padre o Madre Mexicano.</li>
                    </ul>
                </h2>
            </div>
        </div>

        <div class="band-b">
            <div class="question-and-icon">
                <h2>¿Cuanto tarda el proceso?</h2>
                <i class="fas fa-clock qa-icon"></i>
            </div>
            <div class="answer">
                <h2>De 1 a 3 semanas.</h2>
            </div>
        </div>

        <div class="start-wrapper">
            <div class="start-process-container">
                <i class="fas fa-rocket start-icon"></i>
                <h1 class="start-h1 start-title">Quiero Iniciar el Trámite de Doble Nacionalidad</h1>
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