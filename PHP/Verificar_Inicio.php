<?php session_start(); require "recursos/conexion.php"; 

$gmail = @$_POST["txtmail"];
$pass = @$_POST["txtpass"]; 

function verificacion($gmail, $pass){
    $obj = new BD_PDO();
    return $obj ->Ejecutar_Instruccion("SELECT gmail, pass, nombre from administradores where gmail = '{$gmail}' and pass = '$pass' ");
} $var = verificacion($gmail, $pass);

$mss = '';
if(empty($gmail) || empty($pass)){
    $mss = "campos vacios ";
    }else{
        if($gmail == @$var[0][0] && $pass == $var[0][1]){
            $_SESSION["user"] = $var[0][2];
            header("location: MVC/index.php");
        }else{
            session_destroy(); 
            echo "<br><h2> Error al encontrar su cuenta</h2>";
    }
} 
$btncuenta = '<a href="Registro.php" class = "crear">Crear cuenta</a><br>';
$btninvitado = '<a href="MVC/index.php" class = "invitado">Invitado</a><br>';
?> 