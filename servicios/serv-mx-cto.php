<?php include "../nav.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexnay - Contratos</title>
    <link rel="stylesheet" href="../static/styles.css">
    <link rel="stylesheet" href="../static/serv-styles.css">
    <script src="https://kit.fontawesome.com/f55b7cd972.js" crossorigin="anonymous"></script>
    <?php echo $adSense ?>
    <?php echo $analytics ?>
</head>
<body>
    <div class="main-wrapper">
        
        <div class="lx-ad-container" style="background-image: url(<?php echo $imageFolder ?>cto.jpg); background-size: cover;">
            <h1>Necesito Ayuda con un Contrato</h1>
            <div class="option-1">
                <h2>¡Dale certeza a tus actos jurídicos!</h2>
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
                <h2>¿En qué consiste este servicio?</h2>
                <i class="fas fa-user-tie qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Un contrato le da legalidad a los actos que realizamos. Algunos ejemplos son:</h2>
                <br>
                <h2>
                    <ul>
                        <li>Comprar carros, mercancía, servicios, etc.</li>
                        <li>Rentar tierras, casas, carros, etc.</li>
                        <li>Prestar casas, objetos, dinero, etc.</li>
                        <li>Etc.</li>
                    </ul>
                </h2>
                <br>
                <h2>Tener un documento que de legalidad a los actos que realizamos hace una gran diferencia al momento de algún problema legal.</h2>
            </div>
        </div>

        <div class="start-wrapper">
            <div class="start-process-container">
                <i class="fas fa-rocket start-icon"></i>
                <h1 class="start-h1 start-title">Necesito ayuda con un contrato</h1>
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