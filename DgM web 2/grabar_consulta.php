<?php
	include_once './clases/DbManager.php';
	include_once './clases/DbConexion.php';
	include_once './clases/consulta.php';
	include_once './clases/config.inc.php';
	$nombre=$_POST["nombre"];
	$e_mail=$_POST["e_mail"];
	$telefono=$_POST["telefono"];
	$motivo=$_POST["motivo"];
	$comentario=$_POST["comentario"];

	$cons = new consulta();
	$cons->setNombre($nombre);
	$cons->setEmail($e_mail);
	$cons->setTelefono($telefono);
	$cons->setMotivo($motivo);
	$cons->setComentario($comentario);
	
	$conexion = new DbConexion(SERVIDOR, USUARIO, CONTRASENIA, BASE_DATO);
	$manager = new DbManager($conexion);
	
	$manager->insertarConsulta($cons);
	echo " <script lenguaje='JavaScript'>
	alert('Formulario Enviado Correctamente');location.href= '/DgM/formulario.php';
	</script>";
?>	