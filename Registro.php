<?php require "PHP/Verificar_Registro.php"; error_reporting(0);?>
<!DOCTYPE html>
<html lang="en">        
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <link rel="stylesheet" href="recursos/css/registro.css">
</head>
<body>
    <div id="particles-js"></div>
    <form method="POST">
        <header>
            <legend align="center">Registro del usuario</legend> <br>
        </header>
        <div class="container" align="center">
            <table>
                <fieldset>
                    <tr>
                        <td><label>USERNAME</label></td>
                        <td><div class="user"><input type="text" placeholder="Nombre del usuario" name="txtnombre"><p></p></div></td>
                    </tr>
                    <tr>
                        <td><label>GMAIL</label></td>
                        <td><div class="gmail"><input type="email" placeholder="Ejemplo@gmail.com" name="txtcorreo"><p></p></div></td>   
                    </tr>
                    <tr>
                        <td><label>PASSWORD</label></td>
                        <td><div class="pass"><input type="password" placeholder="***********" name="pwd"><p></p></div></td>
                    </tr>
                    <tr>
                        <td><label for="captcha">CAPTCHA:</label><img src="recursos/captcha.php"></td>
                        <td><div class="captcha"><input type="text" id="captcha" name="captcha" autocomplete="off" placeholder="captcha"><p></p></div></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="inss">
                                <a href="inicio_sesion.php">Iniciar con cuenta</a>
                            </div></td>
                        <td>
                            <input type="submit" value="Subir" name="Agregar">
                            <div class="spinner"></div>
                    </td>
                    </tr>               
                </fieldset>
            </table>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="recursos/js/particulas.js"></script>
    </html>
 </body>