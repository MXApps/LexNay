<?php include "../nav.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexnay - Embargos</title>
    <link rel="stylesheet" href="../static/styles.css">
    <link rel="stylesheet" href="../static/serv-styles.css">
    <script src="https://kit.fontawesome.com/f55b7cd972.js" crossorigin="anonymous"></script>
    <?php echo $adSense ?>
    <?php echo $analytics ?>

</head>
<body>
    <div class="main-wrapper">
        
        <div class="lx-ad-container" style="background-image: url(<?php echo $imageFolder ?>embargo-banner.png); background-size: cover;">
            <h1>Necesito Ayuda con un Embargo</h1>
            <div class="option-1">
                <h2>¡Te ayudamos recuperando tu patrimonio o llegando a un arreglo para evitar un embargo!</h2>
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
                <h2>¿Puedo embargar si me deben dinero?</h2>
                <br>
                <h2>¿Me pueden embargar si me debo dinero?</h2>
                <i class="fas fa-gavel qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Sí. Cuando una persona tiene en su poder un título de crédito (como un pagaré, por ejemplo), puede iniciar un juicio para recuperar su dinero por la vía legal a través del embargo.</h2>
            </div>
        </div>

        <div class="band-b">
            <div class="question-and-icon">
                <h2>¿Qué cosas se pueden embargar?</h2>
                <i class="fas fa-home qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Se puede embargar todo lo que sea propiedad del deudor, desde carros, casas, cuentas de banco, etc.</h2>
                <br>
                <h2>Hay un orden de preferencia que establece el Código de Comercio para realizar el embargo: Iniciando con las mercancias, los créditos de fácil y pronto cobro, pasando por los demás muebles (carros, motocicletas, pantallas, etc.), los inmuebles (casa, terrenos, etc.) y terminando con las demás acciones y derechos que tenga el demandado. </h2>
            </div>
        </div>

        <div class="band-c">
            <div class="question-and-icon">
                <h2>¿Puedo embargar si no tengo un papel que pruebe el adeudo?</h2>
                <i class="fas fa-file qa-icon"></i>
            </div>
            <div class="answer">
                <h2>No se puede iniciar directamente el proceso de embargo, pero se puede iniciar un procedimiento judicial para probar que existe ese adeudo y posteriormente llegar a un embargo.</h2>
            </div>
        </div>

        <div class="band-b">
            <div class="question-and-icon">
                <h2>¿Cuánto cuesta este proceso?</h2>
                <i class="fas fa-money-check-alt qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Los costos son altamente variables de proceso en proceso, pero en general hay dos costos:</h2>
                <br>
                <h2>
                    <ol>
                        <li><u>Honorarios</u>: Los cuales son un porcentaje de la cantidad recuperada. Este porcentaje se determina una vez analizando el asunto.</li>
                        <li><u>Gastos Procesales</u>: Los cuales se determinan una vez analizado el asunto.</li>
                    </ol>
                </h2>
            </div>
        </div>

        <div class="start-wrapper">
            <div class="start-process-container">
                <i class="fas fa-rocket start-icon"></i>
                <h1 class="start-h1 start-title">Necesito ayuda con mi proceso de embargo.</h1>
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