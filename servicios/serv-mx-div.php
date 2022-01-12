<?php include "../nav.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexnay - Divorcio</title>
    <link rel="stylesheet" href="../static/styles.css">
    <link rel="stylesheet" href="../static/serv-styles.css">
    <script src="https://kit.fontawesome.com/f55b7cd972.js" crossorigin="anonymous"></script>
    <?php echo $adSense ?>
    <?php echo $analytics ?>
</head>
<body>
    <div class="main-wrapper">
        
        <div class="lx-ad-container" style="background-image: url(<?php echo $imageFolder ?>div.png); background-size: cover;">
            <h1>Necesito Divorciarme</h1>
            <div class="option-1">
                <h2>¡Comienza tu proceso de divorcio!</h2>
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
                <h2>¿Qué tipos de divorcio existen?</h2>
                <i class="fas fa-people-arrows qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Existen 3 tipos de divorcio:</h2>
                <br>
                <h2>
                    <ol>
                        <li><u>Divorcio Administrativo</u>: Procede cuando las partes están de acuerdo en divorciarse, no tienen hijos menores de edad y se casaron bajo el régimen de bienes separados.</li>
                        <li><u>Divorcio Por Mutuo Consentimiento</u>: procede cuando las partes están de acuerdo en divorciarse.</li>
                        <li><u>Divorcio Express o Incausado</u>: Procede cuando una parte no quiere o no puede aceptar el divorcio.</li>
                    </ol>
                </h2>
            </div>
        </div>

        <div class="band-b">
            <div class="question-and-icon">
                <h2>¿Cuanto cuesta este servicio?</h2>
                <i class="fas fa-money-check-alt qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Los costos varían dependiendo de la complejidad del asunto, en especial en los divorcios express o incausados. Los siguientes costos pueden tomarse como bases, pero no son definitivos:</h2>
                <br>
                <h2>
                    <ul>
                        <li><u>Divorcio Administrativo</u>: $1,500 pesos</li>
                        <li><u>Divorcio Por Mutuo Consentimiento</u>: $6,000 pesos</li>
                        <li><u>Divorcio Express o Incausado</u>: $8,000 pesos</li>
                    </ul>
                </h2>
                <br>
                <h2>Además de estos costos, se debe registrar el divorcio ante el Registro Civil, lo cuál genera un pago de derechos aproximado de $2,500 pesos.</h2>
            </div>
        </div>

        <div class="band-c">
            <div class="question-and-icon">
                <h2>¿Cuanto tarda el divorcio?</h2>
                <i class="fas fa-clock qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Los tiempos pueden variar dependiendo de la complejidad del asunto y la carga laboral de los juzgados. Se pueden tomar como base los siguientes tiempos:</h2>
                <br>
                <h2>
                    <ul>
                        <li><u>Divorcio Administrativo</u>: 15 días</li>
                        <li><u>Divorcio Por Mutuo Consentimiento</u>: 1-3 meses</li>
                        <li><u>Divorcio Express o Incausado</u>: 3 meses a años</li>
                    </ul>
                </h2>
                <br>
                <h2>Por regla general, los divorcios más rápidos son aquellos en los que las partes ya están de acuerdo.</h2>
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