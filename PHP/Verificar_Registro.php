<?php session_start(); error_reporting(0);
    require "recursos/conexion.php"; 
    $obj= new BD_PDO();     
    $ver_captcha = $_SESSION["captcha"];


$nom = @$_POST['txtnombre'];
$gmail = @$_POST['txtcorreo'];

$pwd = @$_POST['pwd'];
$captcha = @$_POST['captcha'];

function Vmail($gmail){
    $obj= new BD_PDO();     
    $vmail = $obj ->Ejecutar_Instruccion("SELECT COUNT(*) FROM administradores WHERE gmail ='{$gmail}'");

    $mail = ''; 
    foreach($vmail as $data){
    $mail.= $data[0];
    } return $mail; 
}
$Vmail = Vmail($gmail); 

$mss = '';

if(isset($_POST["Agregar"])){
    if($captcha == $ver_captcha){
        if($Vmail == 0){     
            if(empty($nom) || empty($pwd) || empty($gmail)){
                $mss = "Rellena los demas campos";
            }else{$mss= "Se inserto correctamente";
                $obj ->Ejecutar_Instruccion("INSERT into administradores(nombre, pass, gmail) values('{$nom}','{$pwd}','{$gmail}')");
            }
                } else {$mss= 'Este correo ya esta registrado';}
            }  else{$mss= "Error al completa el captcha";}
} 

if(isset($_POST["Agregar"])){
    echo("<h2><table><center>".$mss."</center><table></h2><br>");
} else {
    echo("<h2><table><center><br></center><table></h2><br>");
}
    

?>