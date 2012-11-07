<?php 
	require_once 'clases\config.inc.php';
	require_once 'clases\DbConexion.php';
	include_once 'clases\DbManager.php';
	session_start();
	$ordentrabajo = $_GET['orden'];
	$usuario = $_GET['usuario'];
	$ordenamiento= $_GET['ordenamiento'];
		
	$conexion = new DbConexion(SERVIDOR, USUARIO, CONTRASENIA, BASE_DATO);
	$consulta = new DbManager($conexion);
	$ordenTrabajo= $consulta->getOrdenTrabajoXNumero($ordentrabajo);
	

	?>
		<div class="contextofichatoner">
		<div class="imagenficha">
			<img alt="Imagen" src="./imagenes/hp1.jpg">
		</div>
		<div>
			<table class="tablaficha">
				<tr>
					<td>Numero Orden:
					</td>
					<td><input type="text" size="25" name="idtoner" value="<?php echo $ordenTrabajo->getNro_orden();?> " readonly="readonly" />
					</td>
				</tr>
				<tr>
					<td>Marca:
					</td>
					<td><input type="text" size="25" name="marca" value="<?php echo $ordenTrabajo->getProducto()->getMarca();?> " readonly="readonly"/>
					</td>
				</tr>
				<tr>
					<td>Modelo:
					</td>
					<td><input type="text" size="25" name="modelo" value="<?php echo $ordenTrabajo->getProducto()->getModelo();?> " readonly="readonly"/>
					</td>
				</tr>
				<tr>
					<td>Propietario:
					</td>
					<td><input type="text" size="25" name="propietario" value="<?php echo $ordenTrabajo->getCliente()->getApellidoNombre();?> " readonly="readonly" />
					</td>
				</tr>
				<tr>
					<td>Fecha Ingreso:
					</td>
					<td><input type="text" size="25" name="fingreso" value="<?php echo $ordenTrabajo->getFecha_ingreso();?> " readonly="readonly"/>
					</td>
				</tr>
				<tr>
					<td>Fecha Egreso:
					</td>
					<td><input type="text" size="25" name="fegreso" value="<?php echo $ordenTrabajo->getFecha_egreso();?> " readonly="readonly"/>
					</td>
				</tr>
				<tr>
					<td>Tarea:
					</td>
					<td><input type="text" size="25" name="tarea" value="<?php echo $ordenTrabajo->getNombreTarea();?> " readonly="readonly"/>
					</td>
				</tr>
				
			</table>
		</div>
		<br> <br> <br>
		<h3>
		
			<a href="http://localhost/DgM/principal.php?ordenamiento=0"><button id="boton">Volver</button></a>
		
		</h3>
	</div>

