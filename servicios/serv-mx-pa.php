<?php include "../nav.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexnay - Pensión Alimenticia</title>
    <link rel="stylesheet" href="../static/styles.css">
    <link rel="stylesheet" href="../static/serv-styles.css">
    <script src="https://kit.fontawesome.com/f55b7cd972.js" crossorigin="anonymous"></script>
    <?php echo $adSense ?>
    <?php echo $analytics ?>
</head>
<body>
    <div class="main-wrapper">
        
        <div class="lx-ad-container" style="background-image: url(<?php echo $imageFolder ?>pension-alimenticia.jpeg); background-size: cover;">
            <h1>Necesito Ayuda con mi Proceso de Pensión Alimenticia</h1>
            <div class="option-1">
                <h2>¡Te Ayudamos demandando la pensión o defendiendote contra demandas injustas!</h2>
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
                <h2>¿Cuánto me toca de pensión? ¿Cuánto debo pagar de pensión?</h2>
                <i class="fas fa-baby qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Primeramente recordemos que la pensión alimenticia se paga normalmente a favor de los hijos, no a la ex pareja que los tiene en su custodia.</h2>
                <br>
                <h2>En México tenemos la falsa creencia de que hay una cantidad fija que se tiene que pagar por concepto de pensión alimenticia. La realidad es que la cantidad a pagar depende de:</h2>
                <br>
                <h2>
                    <ol>
                        <li><u>La capacidad económica de quien debe pagar la pensión.</u></li>
                        <li><u>La capacidad económia de quien recibirá la pensión en representación de los hijos.</u></li>
                        <li><u>Las necesidades de los hijos u otros acreedores alimentarios.</u></li>
                    </ol>
                </h2>
                <br>
                <h2>Tomando esto en cuenta, la cantidad a pagar por concepto de pensión puede ser desde cientos de pesos, a miles o millones de pesos.</h2>
                <br>
                <h2>Sin embargo, es común que la pensión se fije del 20% al 50% del sueldo de quien debe pagar pensión, o del 50% al 100% del UMA diario ($44-89 pesos diarios).</h2>
            </div>
        </div>

        <div class="band-b">
            <div class="question-and-icon">
                <h2>¿Se puede ir a la carcel por no pagar pensión?</h2>
                <i class="fas fa-gavel qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Sí, el hecho de no cumplir con obligaciones alimentarias es también un delito.</h2>
                <br>
                <h2>Además, las cantidades que no se pagan por concepto de pensión se van acumulando.</h2>
            </div>
        </div>

        <div class="band-c">
            <div class="question-and-icon">
                <h2>¿Cuánto cuesta este servicio?</h2>
                <i class="fas fa-money-check-alt qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Los costos varían dependiendo de la complejidad del asunto. Los honorarios comienzan desde $2,500 pesos</h2>
            </div>
        </div>

        <div class="start-wrapper">
            <div class="start-process-container">
                <i class="fas fa-rocket start-icon"></i>
                <h1 class="start-h1 start-title">Necesito Ayuda con mi Proceso de Pensión Alimenticia</h1>
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