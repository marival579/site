<?php  $user = @$_SESSION["user"];?>
<form method="POST">
</form>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario Marival Emotions</title>
    <link rel="stylesheet" href="../recursos/css/style.css">
    <script src="../recursos/js/index.js"></script>
</head>

<body>
    <header>
        <img src="../recursos/img//Marival-Emotions.png">
        <h1>CONTROL DE INVENTARIO</h1>
        <div class="toggle-container">
            <label for="dark-mode-toggle">Dark Mode</label>
            <label class="toggle">
                <input type="checkbox" id="dark-mode-toggle">
                <span class="slider"></span>
                </label>
                <?php if(isset($user)){?>
                        <label>bienvenido: <?php echo ($user);?></label>
                        <form method= "POST">
                            <input type="submit" value = "Cerrar Sesión" style ="border:  2px solid black; font-size:20px" name="cerrar">
                        </form>
                <?php } else{ ?>
                    <label>bienvenido: Invitado</label>
                    <a href="../inicio_sesion.php"><input type="button" value ="Inicia Sesión" style ="border: 2px solid black; font-size:20px"></a>
                <?php }?>
        </div>
    </header>

    <select name="opcion" id= "opcion">
        <option value="cpu">Computadoras</option>
        <option value="teclados">Teclados</option>
        <option value="escaners">Escaners</option>
        <option value="impresoras">Impresoras</option>
    </select> <input type="button" value="ver" id= btnopcion> <br><br>

    <?php
    if(isset($user)) { ?>
    <div class="form">
        <form action ="#ing_data" Method ="POST">
            <?php if(@$_GET["Modificar"]){ ?>
                <label for="">NUMERO</label>
                <input type="text" name="txtnumero" id="numero" placeholder= "Numero de Identificación" pattern="[0-9]*" title="Ingrese solo números" value= "<?php echo @$result_modificar[0][0]; ?>" readonly>
                <br><?php } ?>
            <label>TIPO DE EQUIPO</label>
            <input type="text" name="equipo" placeholder = "Tipo del equipo: PC/ Laptop" value = "<?php echo @$result_modificar[0][1]; ?>" require><br>
            <label>MARCA</label>
            <input type="text" name="marca" placeholder = "Marca del equipo" value = "<?php echo @$result_modificar[0][2]; ?>" requiere><br>
            <label>MODELO</label>
            <input type="text" name="modelo" placeholder ="Modelo del equipo" value = "<?php echo @$result_modificar[0][3]; ?>" requiere><br>   
            <label>ESPECIFICACIONES</label>
            <textarea name="Especificacion" id="Especificacion" rows="5" value = "<?php echo @$result_modificar[0][4]; ?>"></textarea><br>
            <label>N° DE SERIE</label>
            <input type="text" name="serie" value = "<?php echo @$result_modificar[0][5]; ?>" requiere><br>
            <!-- este -->
            <label>NUMERO DE PARTE</label>
            <input type="text" name="parte" value = "<?php echo @$result_modificar[0][6]; ?>"><br>
            <!-- este -->
            <label>ESTADO DEL EQUIPO</label>
            <input type="text" name="estado" value = "<?php echo @$result_modificar[0][7]; ?>"><br>
            <label>COSTO DE ADQUISICION</label>
            <input type="text" placeholder= "$00,000" name="costo" value = "<?php echo @$result_modificar[0][8]; ?>"><br>
            <label>UBICACION FISICA</label>
            <input type="text" placeholder= "" name="ubicacion" value = "<?php echo @$result_modificar[0][9]; ?>" requiere><br>
            <label>USUARIO ASIGNADO</label>
            <input type="text" placeholder= "Nombre del usuario asignado"name="usuario" value = "<?php echo @$result_modificar[0][10]; ?>"><br>         
            <label>AREA/ DEPARTAMENTO</label>
            <input type="text" placeholder= "Area o departamento " name="departamento" value = "<?php echo @$result_modificar[0][11]; ?>" requiere><br>
            <label>ACCESOS DE LA MAQUINA </label>
            <input type="text" placeholder= "APMS/ FRONT/ INNSIST" name="innsist" value = "<?php echo @$result_modificar[0][12]; ?>"><br>
            <label>SOFTWARE INSTALADO</label>
            <input type="text" placeholder ="Windows/ Windows x64" name="software" value = "<?php echo @$result_modificar[0][13]; ?>"><br>
            <label>LICENCIAS DE SOFTWARE</label>
            <input type="text" placeholder = "Version de software: v10.1" name="licencias" value = "<?php echo @$result_modificar[0][14]; ?>"><br>
            <label>FECHA DE ULTIMA COMPRA</label>
            <input type="date" name="fecha_compra" value = "<?php echo @$result_modificar[0][15]; ?>" requiere><br>
            <label>FECHA DE VIDA UTIL</label>
            <input type="date" name="fecha_vida" value = "<?php echo @$result_modificar[0][16]; ?>"><br>
            <label>ULTIMA COMPRA</label>
            <input type="date" name="compra" value = "<?php echo @$result_modificar[0][17]; ?>"><br>
            <label>NOTAS ADICIONALES DEL EQUIPO</label>
            <input type="text" placeholder = "Daños o detalles del equipo" name="notas" value = "<?php echo @$result_modificar[0][18]; ?>"><br>
            <label>EMPRESAS QUE FACTURAN</label>
            <input type="text" name="empresas" value = "<?php echo @$result_modificar[0][19]; ?>"><br>
            <label>MAC DEL EQUIPO</label>
            <input type="text" name="MAC" value = "<?php echo @$result_modificar[0][20]; ?>" requiere><br>
            <label>IP DEL EQUIPO</label>
            <input type="text" name="IP" placeholder ='Ejemplo: 225.255.255.255' value = "<?php echo @$result_modificar[0][21]; ?>" requiere><br>
            <?php echo $button; ?>
        </form>
    </div><?php } ?>

 <div class="table-container">
    <form action="#tbl_data" method = "POST" >
    <table>
<header>    
    <h1>CONTROL DE BUSQUEDA</h1>
    <br>
    <input type="text" placeholder = "Buscar por Tipo de Equipo/ N° Serie/ Usuario asignado" name = "txtbuscar">
    <input type="submit" value="Buscar" name= "btnbuscar" style ="border: 2px solid black; font-size:20px; margin-left:20px">
</header>
</table><br>
    </div></form>
    <br>

<form action="#tbl_data" method = "GET" >
<table id="tbl_data">
            <tr>
                <th>N°</th><th>TIPO DE EQUIPO</th><th>MARCA</th><th>MODELO</th><th>ESPECIFICACIONES</th>
                <th>N° SERIE</th><th>NUMERO PARTE</th><th>ESTADO DEL EQUIPO</th><th>COSTO ADQUISICION</th>
                <th>UBICACION FISICA</th><th>USUARIO ASIGNADO</th><th>AREA/DEPARTAMENTO</th><th>ACCESOS FRONT INNSIST</th>
                <th>SOFTWARE INSTALADOS</th><th>LICENCIA DE SOFTWARE</th><th>FECHA DE COMPRA</th><th>FECHA DE VIDA UTIL</th>
                <th>FECHA DE ULTIMA COMPRA</th><th>NOTA ADICIONAL</th><th>EMPRESA FACTURERA</th><th>MAC</th><th>IP</th>
                <?php if(isset($user)){ ?><th>ACCION</th><?php }?>
            </tr>
            <tr><?php echo $tabla?><!-- 22  numero de serie,  --></tr>
        </table>
</form>
    <script src="../recursos/js/script.js">
    </script>
</body>
</html>
