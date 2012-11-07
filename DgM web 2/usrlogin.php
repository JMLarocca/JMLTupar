<?php 
require_once 'clases\config.inc.php';
require_once 'clases\DbConexion.php';
include_once 'clases\DbManager.php';
$conexion = new DbConexion(SERVIDOR, USUARIO, CONTRASENIA, BASE_DATO);
$consulta = new DbManager($conexion);


if ( (isset($_POST['usuario']) ) && (isset($_POST['clave'])))
{
	$usrLogin = $consulta->getLogin($_POST['usuario']);
	if($usrLogin != Null) {
		if ($usrLogin->validarClave($_POST['clave'])){
			session_start();
		
			$_SESSION['usuariovalido']= true;
			$_SESSION['usuario']= $_POST['usuario'];
			$_SESSION['clave']= $_POST['clave'];
		echo " <script lenguaseje='JavaScript'>
			location.href= '/DgM/principal.php';
			</script>";
	}
	else
		echo " <script lenguaseje='JavaScript'>
			location.href= '/DgM/index.php?msg=usuario_invalido';
			</script>";
}
if ( (isset($_POST['usuario']) ) && (isset($_POST['clave'])))
{

	$usuario= $_POST['usuario'];
	$clave= $_POST['clave'];
	$_SESSION['$usuario']=$usuario;
	$_SESSION['$clave']=$clave;
}




echo " <script lenguaje='JavaScript'>
location.href= '/DgM/index.php';
</script>";
?>