<?php include "../nav.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexnay - Residencia</title>
    <link rel="stylesheet" href="../static/styles.css">
    <link rel="stylesheet" href="../static/serv-styles.css">
    <script src="https://kit.fontawesome.com/f55b7cd972.js" crossorigin="anonymous"></script>
    <?php echo $adSense ?>
    <?php echo $analytics ?>
</head>
<body>
    <div class="main-wrapper">
        
        <div class="lx-ad-container" style="background-image: url(<?php echo $imageFolder ?>res-banner.jpg);">
            <h1>Quiero Iniciar el Tramite de mi Residencia (Green Card)</h1>
            <div class="option-1">
                <h2>¡Emprende tu proceso para vivir y trabajar en Estados Unidos!</h2>
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
                <h2>¿Qué es la Residencia Americana?</h2>
                <i class="far fa-address-card qa-icon"></i>
            </div>
            <div class="answer">
                <h2>La Residencia Americana es una visa de migrante que otorga el gobierno de los Estados Unidos.</h2>
                <br>
                <h2>Tiene una vigencia de 10 años durante los cuales podrás vivir y trabajar en Estados Unidos. Terminando los 10 años, puedes renovarla sin problemas o puedes convertirte en un ciudadano americano antes de que expire para no tener que hacer este trámite nuevamente.</h2>
                <br>
                <h2>Se puede tramitar tanto desde México como desde Estados Unidos. Nosotros ofrecemos este servicio cualquiera que sea el caso.</h2>
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
                <h2> <u>USCIS Fees:</u>  Son un conjunto de tarifas que cobra el gobierno americano. Ascienden a un aproximado de $1,200USD.</h2>
                <br>
                <h2> <u>Honorarios:</u> $1,200USD</h2>
                <br>
                <h2>Dependiendo de cada caso, puede que haya costos adicionales como traducción de actas, tramitación de pasaportes, etc.</h2>
                <br>
                <h2>Los pagos no se hacen en una sola exhibición, se van requiriendo conforme avanza el proceso.</h2>
            </div>
        </div>

        <div class="band-a">
            <div class="question-and-icon">
                <h2>¿Quienes pueden solicitar una Green Card?</h2>
                <i class="fas fa-users qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Los <u>ciudadanos americanos</u> pueden solicitar la residencia para:</h2>
                <br>
                <h2>
                    <ol style="list-style-position: inside;">
                        <li>Esposo/a</li>
                        <li>Hijos</li>
                        <li>Hermanos</li>
                        <li>Padres</li>
                    </ol>
                </h2>
                <br>
                <h2>Los <u>residentes americanos</u> pueden solicitar la residencia para:</h2>
                <br>
                <h2>
                    <ol style="list-style-position: inside;">
                        <li>Esposo/a</li>
                        <li>Hijos</li>
                    </ol>
                </h2>
            </div>
        </div>

        <div class="band-b">
            <div class="question-and-icon">
                <h2>¿Cuanto tiempo dura el proceso?</h2>
                <i class="far fa-clock qa-icon"></i>
            </div>
            <div class="answer">
                <h2>No hay un tiempo exacto, la duración está sujeta a varios factores como nivel de prioridad de la solicitud, disponibilidad de visas, carga laboral de las oficinas de gobierno, etc.</h2>
                <br>
                <h2>Debido a esto, los tiempos pueden ser desde algunos meses a varios años.</h2>
                <br>
                <h2>Como regla general, las visas solicitadas para esposos, padres e hijos menores no casados <u>son las más rapidas.</u></h2>
            </div>
        </div>

        <div class="band-a">
            <div class="question-and-icon">
                <h2>¿Es seguro que me la den?</h2>
                <i class="fas fa-lock-open qa-icon"></i>
            </div>
            <div class="answer">
                <h2>Es un proceso muy seguro ya que esta solicitud es un derecho ejercido por un residente o ciudadano americano.</h2>
                <br>
                <h2>Sin embargo, algunos factores pueden impedir la aprobación, tales como:</h2>
                <br>
                <h2>
                    <ul style="list-style-position: inside;">
                        <li>Previas estancias en Estados Unidos.</li>
                        <li>Record criminal.</li>
                    </ul>
                </h2>
                <br>
                <h2>En su mayoría son situaciones que se pueden remendar con el simple paso del tiempo o con un perdon migratorio, pero es posible que sean motivo de rechazo permanente.</h2>
            </div>
        </div>

        <div class="start-wrapper">
            <div class="start-process-container">
                <i class="fas fa-rocket start-icon"></i>
                <h1 class="start-h1 start-title">Quiero Iniciar Mi Trámite de Residencia Americana</h1>
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