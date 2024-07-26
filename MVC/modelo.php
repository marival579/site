<?php require '../recursos/conexion.php'; 

class Categorias{
	public function Insertar($tipo, $marca, $modelo, $ES, $serie, $parte, $estado, $costo, $ubi, $usuario, $dep, $IN, $sf, $licencias, $fcom, $fvid, $compra, $notas, $empresas, $mac, $ip) {
		$obj = new BD_PDO();
        $obj -> Ejecutar_Instruccion("INSERT into TBL_datos(Tipo, Marca, Modelo, Especificaciones, N_Serie, Numero_parte, Estado, Costo_Adquisicion, Ubicacion_Fisica, Usuario_Asignado, Area_Departamento, Acceso_INNSIST, Software_Instalado, Licencia_Software, Fecha_Compra, Fecha_Vida, Ultima_Compra, Nota_Adicional, Facturera, MAC, IP)
		 values ('{$tipo}','{$marca}','{$modelo}','{$ES}','{$serie}','{$parte}','{$estado}','{$costo}','{$ubi}','{$usuario}','{$dep}','{$IN}','{$sf}','{$licencias}','{$fcom}','{$fvid}','{$compra}','{$notas}','{$empresas}','{$mac}','{$ip}')"); 
	}
	public function Eliminar($id){
		$obj = new BD_PDO();
        $obj ->Ejecutar_Instruccion("DELETE from TBL_datos where Numero = '{$id}' ");
	}
    public function Modificar($id){
		$obj = new BD_PDO();
		return $obj-> Ejecutar_Instruccion("SELECT * from TBL_datos where Numero = '{$id}' ");	
	} 
	public function Actualizar($id, $tipo, $marca, $modelo, $ES, $serie, $parte, $estado, $costo, $ubi, $usuario, $dep, $IN, $sf, $licencias, $fcom, $fvid, $compras, $notas, $empresas, $mac, $ip){
		$obj = new BD_PDO();
		return $obj->Ejecutar_Instruccion("UPDATE TBL_datos set Tipo = '{$tipo}', 
		Marca = '{$marca}', 
		Modelo = '{$modelo}',
		Especificaciones = '{$ES}', 
		N_Serie = '{$serie}', 
		Numero_parte = '{$parte}', 
		Estado = '{$estado}', 
		Costo_Adquisicion = '{$costo}', 
		Ubicacion_Fisica = '{$ubi}', 
		Usuario_Asignado = '{$usuario}', 
		Area_Departamento = '{$dep}',
		Acceso_INNSIST = '{$IN}', 
		Software_Instalado = '{$sf}', 
		Licencia_Software = '{$licencias}', 
		Fecha_Compra = '{$fcom}',
		Fecha_Vida = '{$fvid}', 
		Ultima_Compra = '{$compras}', 
		Nota_Adicional = '{$notas}', 
		Facturera = '{$empresas}', 
		MAC = '{$mac}', 
		IP = '{$ip}' where Numero = '{$id}' ");			
	}

    public function Buscar($dato, $user) {
		$obj = new BD_PDO();
		if($dato <> ''){
			$result = $obj->Ejecutar_Instruccion("SELECT * from TBL_datos where Tipo or N_Serie or Usuario_Asignado like '%$dato%'");
		}else {
			$result = $obj->Ejecutar_Instruccion("SELECT * from TBL_datos");
		}
		
$tabla = "";
foreach ($result as $renglon)	
{
	$tabla.='<tr>';
	$tabla.='<td>'.$renglon[0].'</td>';
	$tabla.='<td>'.$renglon[1].'</td>';
	$tabla.='<td>'.$renglon[2].'</td>';
	$tabla.='<td>'.$renglon[3].'</td>';
	$tabla.='<td>'.$renglon[4].'</td>';
	$tabla.='<td>'.$renglon[5].'</td>';
	$tabla.='<td>'.$renglon[6].'</td>';
	$tabla.='<td>'.$renglon[7].'</td>';
	$tabla.='<td>'.$renglon[8].'</td>';
	$tabla.='<td>'.$renglon[9].'</td>';
	$tabla.='<td>'.$renglon[10].'</td>';
	$tabla.='<td>'.$renglon[11].'</td>';
	$tabla.='<td>'.$renglon[12].'</td>';
	$tabla.='<td>'.$renglon[13].'</td>';
	$tabla.='<td>'.$renglon[14].'</td>';
	$tabla.='<td>'.$renglon[15].'</td>';
	$tabla.='<td>'.$renglon[16].'</td>';
	$tabla.='<td>'.$renglon[17].'</td>';
	$tabla.='<td>'.$renglon[18].'</td>';
	$tabla.='<td>'.$renglon[19].'</td>';
	$tabla.='<td>'.$renglon[20].'</td>';
	$tabla.='<td>'.$renglon[21].'</td>';
	if(isset($user)){
		$tabla.='<td>
		<input type="button" id="btneliminar" name="btneliminar" value="Eliminar" onclick="Eliminar('.$renglon[0].')"style ="border: 2px solid black; font-size:20px">
		<input type="button" id="btnmodificar" name="btnmodificar" value="Modificar" onclick="Modificar('.$renglon[0].')" style ="border: 2px solid black; font-size:20px">
		</td>';
			}
		}	return $tabla;
	}
}

?>