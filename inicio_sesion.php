<?php require 'PHP/Verificar_Inicio.php'; #error_reporting(0);?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de Sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/css/inicioSSs.css">
</head>
<body>
    <?php echo $btncuenta; echo $btninvitado?>
    <header>
        <img src="recursos/img/Marival-Emotions.png" alt="Marival Emotions">
    </header>
    <button id="toggleDarkMode">DARKMODE</button>
    <form method="POST">
        <div class="logincont">
            <span>EMAIL</span>
            <input type="email" id="txtmail" name="txtmail"><br>
            <span>PASSWORD</span>
            <input type="password" id="txtpass" name="txtpass"><br>
            <input type="submit" id="btnlog" name="btnlog" value="INICIAR">
            <div class="spinner"></div>
        </div>
    </form>
    <script src="recursos/js/darkmodeINS.js"></script>
    <script src="recursos/js/spinner.js"></script>
</body>
</html>
