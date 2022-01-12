<?php include "../nav.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexnay - Herencia</title>
    <link rel="stylesheet" href="static/styles.css">
    <link rel="stylesheet" href="../static/styles.css">
    <link rel="stylesheet" href="../static/serv-styles.css">
    <script src="https://kit.fontawesome.com/f55b7cd972.js" crossorigin="anonymous"></script>
    <?php echo $adSense ?>
    <?php echo $analytics ?>
</head>
<body>
    <div class="main-wrapper">
        
        <div class="lx-ad-container" style="background-image: url(<?php echo $imageFolder ?>her.jpg); background-size: cover;">
            <h1>Necesito Ayuda con un Juicio Sucesorio</h1>
            <div class="option-1">
                <h2>¡Comienza tu Proceso Sucesorio con Nosotros!</h2>
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
                <h2>¡Ofrecemos este servicio en Nayarit!</h2>
            </div>
        </div>

        <div class="band-c" id="band-1">
            <div class="question-and-icon">
                <h2>¿Qué es un Juicio Sucesorio?</h2>
                <i class="fas fa-people-arrows qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Cuando una persona muere, recae en uno de dos supuestos:</h2>
                <br>
                <h2>
                    <ul>
                        <li><u>Dejó testamento.</u></li>
                        <li><u>No dejó testamento.</u></li>
                    </ul>
                </h2>
                <br>
                <h2>El juicio sucesorio sirve para heredar los bienes y dinero que haya dejado la persona fallecida.</h2>
                <br>
                <h2>Si los posibles herederos están de acuerdo, realmente no hay mucha diferencia entre si hubo testamento o no. Cuando no hay acuerdo el proceso puede ser más largo y complejo.</h2>
            </div>
        </div>

        <div class="band-b">
            <div class="question-and-icon">
                <h2>¿Quienes tienen el derecho a heredar?</h2>
                <i class="fas fa-users qa-icon"></i>
            </div>
            <div class="answer">
                <h2><u>Cuando hay testamento</u> solo las personas que figuren en él. No importa si las personas del testamento son familia o no.</h2>
                <br>
                <h2><u>Cuando no hay testamento</u> puede llegar a ser muy complejo el hilo para determinar los herederos. Por regla general siempre son familia, comenzando con esposos e hijos, a falta de estos pueden llegar a heredar padres, nietos, hermanos, etc.</h2>
            </div>
        </div>

        <div class="start-wrapper">
            <div class="start-process-container">
                <i class="fas fa-rocket start-icon"></i>
                <h1 class="start-h1 start-title">Quiero Iniciar mi Proceso de Divorcio</h1>
                <div class="visitanos" id="visitanos-link">
                    <h1 class="start-h1">Visítanos</h1>
                    <h2 style="color: blue;"><u>Corregidora 25A, Col. San José</u></h2>
                    <h2 style="color: blue;"><u>Las Varas, Nayarit</u></h2>
                </div>
                <div class="mandanos-mensaje">
                    <h1 class="start-h1">Mándanos Mensaje</h1>
                    <a href="https://www.facebook.com/LexNay" target="_blank">
                        <img src="<?php echo $imageFolder ?>fb.png" alt="fb" class="start-img">
                    </a>
                    <a href="https://wa.me/523222112044" target="_blank">
                        <img src="<?php echo $imageFolder ?>wa.png" alt="wa" class="start-img">
                    </a>
                </div>
                <div class="llamanos">
                    <h1 class="start-h1">Llámanos</h1>
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