<?php  //aqui se pueden recibir los parametros de la url
		session_start(); 
		$user = @$_SESSION["user"];
	    
		@$tipo = $_POST["equipo"];
		@$marca = $_POST["marca"];

		@$modelo = $_POST["modelo"];
		@$ES = $_POST["Especificacion"];
		@$serie = $_POST["serie"];
		@$parte = $_POST["parte"];
		@$estado = $_POST["estado"];
		@$costo = $_POST["costo"];
		@$ubi = $_POST["ubicacion"];
		@$usuario = $_POST["usuario"];
		@$dep = $_POST["departamento"];
		@$IN = $_POST["innsist"];
		@$sf = $_POST["software"];
		@$licencias = $_POST["licencias"];
		@$fcom = $_POST["fecha_compra"];
		@$fvid = $_POST["fecha_vida"];
		@$com = $_POST["compra"];
		@$notas = $_POST["notas"];
		@$empresas = $_POST["empresas"];
		@$mac = $_POST["MAC"];
		@$ip = $_POST["IP"];

		require 'modelo.php';   
		$obj = new Categorias();
		
		if (isset($_GET['Eliminar'])) {
			$id = @$_GET['Eliminar'];
			$obj-> Eliminar($id);			
		}
		if(isset($_GET['Modificar'])){
			$id = @$_GET['Modificar'];
			$result_modificar = $obj-> Modificar($id);
		}
		if(isset($_POST["cerrar"])){
			session_destroy();
			header("location: ../inicio_sesion.php");
		}

		if(isset($_POST["btnActualizar"])){
			$obj-> Actualizar($id, $tipo, $marca, $modelo, $ES, $serie, $parte, $estado, $costo, $ubi, $user, $dep, $IN, $sf, $licencias, $fcom, $fvid, $compra, $notas, $empresas, $mac, $ip);
			if(isset($_POST["btnActualizar"])){
				header("location: index.php");
			}
		}

		if(isset($_GET["Modificar"])){
			$button = '<input type="submit" id="btnActualizar" name="btnActualizar" value="Actualizar" style ="border: 2px solid black; font-size:20px">';
		} else{ 	
			$button = '<input type="submit" value="Agregar" name ="Insertar" id ="Agregar" onmouseover="ColorAgregar()" style ="border: 2px solid black; font-size:20px">';
		}
		
		if(isset($_POST["Insertar"])){
			if(empty($tipo) && empty($marca)){}
			else{
				$obj ->Insertar($tipo, $marca, $modelo, $ES, $serie, $parte, $estado, $costo, $ubi, $usuario, $dep, $IN, $sf, $licencias, $fcom, $fvid, $com, $notas, $empresas, $mac, $ip); 
			}
		}

		if (isset($_POST['btnbuscar'])) {
			$tabla = $obj->Buscar(@$_POST["txtbuscar"], $user);
		}else {
			$tabla = $obj->Buscar('', $user);
		}	

		require 'vista.php';
		
?>