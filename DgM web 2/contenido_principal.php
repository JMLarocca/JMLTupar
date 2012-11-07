<?php 
	
	require_once 'clases\config.inc.php';
	require_once 'clases\DbConexion.php';
	include_once 'clases\DbManager.php';
	$conexion = new DbConexion(SERVIDOR, USUARIO, CONTRASENIA, BASE_DATO);
	$consulta = new DbManager($conexion);
	
	session_start();
	if(!isset($_SESSION['usuariovalido']))
		echo " <script lenguaje='JavaScript'>
		location.href= '/DgM/index.php';
		</script>";
		
	if (isset($_GET['ordenamiento']))
			$ordenamiento= $_GET['ordenamiento'];
	if (isset($_POST['ordenamiento']))
		$ordenamiento= $_POST['ordenamiento'];
	
/*	if ( (isset($_POST['usuario']) ) && (isset($_POST['clave'])))
	{
		
		$usuario= $_POST['usuario'];
		$clave= $_POST['clave'];
		$_SESSION['$usuario']=$usuario;
		$_SESSION['$clave']=$clave;
	}
	
	
	$usrLogin = $consulta->getLogin($_SESSION['$usuario']);
    if(!isset($_SESSION['$clave'])) {
    	if (!$usrLogin->validarClave($_SESSION['$clave'])){
			echo " <script lenguaje='JavaScript'>
			location.href= '/DgM/index.php';
			</script>";
		}
    }
  */  
   /* echo $_SESSION['$usuario'];
    echo $_SESSION['$clave'];
    echo $ordenamiento;*/
   
		$arr_ordenTrabajo = $consulta->getOrdenesXorden($usrLogin->getCliente()->getId_cliente(),$ordenamiento);
	echo '<div class="contextoprincipa">
	
	<div>
		<h5>-->USUARIO<--</h5><h4>-->'.$usrLogin->getCliente()->getApellidoNombre().'<--</h4>	
	<table class="tabla">
	<tr>
	<td><h2>Toner</h2></td>
	<td><h2>Marca</h2></td>
	<td><h2>Modelo</h2></td>
	<td><h2>fecha ing</h2></td>
	<td><h2>fecha egr</h2></td>
	<td><h2>Tarea</h2></td>
	</tr>';
	
	foreach ($arr_ordenTrabajo as $ordent)
	{
	   echo '	<tr>
				<td><a href="http://localhost/DgM/fichatoner.php?ordenamiento=0&usuario='.$_SESSION['$usuario'].'&orden='.$ordent->getNro_orden().'">'.$ordent->getNro_orden().'</a></td>
				<td><a href="http://localhost/DgM/fichatoner.php?ordenamiento=0&usuario='.$_SESSION['$usuario'].'&orden='.$ordent->getNro_orden().'">'.$ordent->getProducto()->getMarca().'</a></td>
				<td>'.$ordent->getProducto()->getModelo().'</td>
				<td>'.$ordent->getFecha_ingreso().'</td>
				<td>'.$ordent->getFecha_egreso().'</td>
				<td>'.$ordent->getTarea().'</td>
				</tr>';
			}
		echo'		</table>
					</div>
					</div>';
?>

	

