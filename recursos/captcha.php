<?php session_start();

function generarTextoRandom($longitud) {
    return substr(str_shuffle("0123456789abcdefghjkmnopqrstwxyz"), 0, $longitud);
}

$codigoImagen = generarTextoRandom(3);
                    #  w, h
$imagen = imagecreate(35, 20);
# R,   G,   B
$fondo  = imagecolorallocate($imagen, 255, 255, 255);
$color  = imagecolorallocate($imagen, 0,     0,   0);

imagestring($imagen, 16, 5, 5, $codigoImagen, $color);
imagejpeg($imagen, null, 80);

$_SESSION["captcha"] = $codigoImagen;

?>