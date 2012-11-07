<?php

require_once 'cliente.php';
require_once 'productos.php';
require_once 'ordenestrabajo.php';
require_once 'login.php';


class DbManager {
		private $conexion;
		
		
	function DbManager($conexion)
		{ $this->conexion = $conexion;
		
		}	
		
	function getTodosClientes()
	{
		$sql = 'SELECT * FROM cliente;';
		$resultado = $this->conexion->ejecutarConsulta($sql);	
		$arr_clientes = array();
		while ( $fila = mysql_fetch_array($resultado))
		{
			$clie = new cliente();
			$clie->setId_cliente($fila['id_cliente']);
			$clie->setNombre($fila['nombre']);
			$arr_clientes[]=$clie;
		}
	 	return $arr_clientes;
	}
	//------------------------------------------------------------------
	function getTodasOrdenesTrabajo()
	{
		$sql = 'SELECT * FROM v_ordenestrabajo;';
		$resultado = $this->conexion->ejecutarConsulta($sql);
		$arr_ordentrabajo = array();
		
		while ( $fila = mysql_fetch_array($resultado))
		{
			$ordent = new ordenestrabajo();
			$clie = new cliente();
			$prod = new productos();
			
			$clie->setApellido($fila['apellido']);
			$clie->setNombre($fila['nombrecliente']);
			$clie->setDireccion($fila['direccion']);
			$clie->setId_cliente($fila['id_cliente']);
			$clie->setDni($fila['dni']);
			$clie->setMail($fila['mail']);
			$clie->setTelefono($fila['telefono']);
			
			$prod->setId_producto($fila['id_producto']);
			$prod->setMarca($fila['marca']);
			$prod->setModelo($fila['modelo']);
			$prod->setNombre($fila['nombreproducto']);
			$prod->setTipo($fila['tipo']);
			
			$ordent->setNro_orden($fila['nro_orden']);
			$ordent->setDescripcion_tarea($fila['descripcion_tarea']);
			$ordent->setFecha_egreso($fila['fecha_egreso']);
			$ordent->setFecha_ingreso($fila['fecha_ingreso']);
			$ordent->setPrecio($fila['precio']);
			$ordent->setTarea($fila['tarea']);
			$ordent->setCliente($clie);
			$ordent->setProducto($prod);
			
			$arr_ordentrabajo[]=$ordent;
		}
		return $arr_ordentrabajo;
	}
	//------------------------------------------------
	function getOrdenTrabajoXNumero($nroOrden)
	{
		$sql = 'SELECT * FROM v_ordenestrabajo
					WHERE nro_orden ='.$nroOrden.';';
		$resultado = $this->conexion->ejecutarConsulta($sql);
		$ordentrabajo = NULL;

		if ( $fila = mysql_fetch_array($resultado))
		{
			$ordent = new ordenestrabajo();
			$clie = new cliente();
			$prod = new productos();
	
			$clie->setApellido($fila['apellido']);
			$clie->setNombre($fila['nombrecliente']);
			$clie->setDireccion($fila['direccion']);
			$clie->setId_cliente($fila['id_cliente']);
			$clie->setDni($fila['dni']);
			$clie->setMail($fila['mail']);
			$clie->setTelefono($fila['telefono']);
	
			$prod->setId_producto($fila['id_producto']);
			$prod->setMarca($fila['marca']);
			$prod->setModelo($fila['modelo']);
			$prod->setNombre($fila['nombreproducto']);
			$prod->setTipo($fila['tipo']);
	
			$ordent->setNro_orden($fila['nro_orden']);
			$ordent->setDescripcion_tarea($fila['descripcion_tarea']);
			$ordent->setFecha_egreso($fila['fecha_egreso']);
			$ordent->setFecha_ingreso($fila['fecha_ingreso']);
			$ordent->setPrecio($fila['precio']);
			$ordent->setTarea($fila['tarea']);
			$ordent->setCliente($clie);
			$ordent->setProducto($prod);
	
			$ordentrabajo=$ordent;
		}
		return $ordentrabajo;
	}
//--------------------------------------------------
    function getLogin($mail)
    {
    	$sql = 'SELECT * FROM login
    				WHERE mail="'.$mail.'";';
    	$resultado = $this->conexion->ejecutarConsulta($sql);
    	$usuario = new login();
    	$usuario->setMail($mail);

    	$cliente = $this->getClienteXMail($mail);
    	$usuario->setCliente($cliente);
    	
    	if ( $fila = mysql_fetch_array($resultado))
    	{
    		$usuario->setClave($fila['clave']);
    	}
    	return $usuario;
    	}
    	//--------------------------------------------------
    	function getClienteXMail($mail)
    	{
    		$sql = 'SELECT * FROM  cliente
    		WHERE mail="'.$mail.'";';
    		$resultado = $this->conexion->ejecutarConsulta($sql);
    		$clie = new cliente();
    	
    		if ( $fila = mysql_fetch_array($resultado))
    		{
    			$clie->setApellido($fila['apellido']);
				$clie->setNombre($fila['nombre']);
				$clie->setDireccion($fila['direccion']);
				$clie->setId_cliente($fila['id_cliente']);
				$clie->setDni($fila['dni']);
				$clie->setMail($fila['mail']);
				$clie->setTelefono($fila['telefono']);
    		}
    		return $clie;
    	}
    
    	//------------------------------------------------------------------
    	function getOrdenesXorden($cliente,$ordenamiento)
    	{	
    		if ($ordenamiento == 0)
    		{
    			$sql = 'SELECT * FROM v_ordenestrabajo
    			WHERE id_cliente ='.$cliente.';';
    		}
    		if ($ordenamiento == 1)
    		{	$sql = 'SELECT * FROM v_ordenestrabajo v
    			WHERE id_cliente ='.$cliente.'
    			ORDER BY v.marca;';
    		}
    		if ($ordenamiento == 2)
    		{
    			$sql = 'SELECT * FROM v_ordenestrabajo v
    			WHERE id_cliente ='.$cliente.'
    			ORDER BY v.modelo;';
    		}
    		if ($ordenamiento == 3)
    		{
    			$sql = 'SELECT * FROM v_ordenestrabajo v
    			WHERE id_cliente ='.$cliente.'
    			ORDER BY v.fecha_ingreso;';
    		}
    		if ($ordenamiento == 4)
    		{
    			$sql = 'SELECT * FROM v_ordenestrabajo v
    			WHERE id_cliente ='.$cliente.'
    			ORDER BY v.fecha_egreso;';
    		}
    		if ($ordenamiento == 5)
    		{
    			$sql = 'SELECT * FROM v_ordenestrabajo v
    			WHERE id_cliente ='.$cliente.'
    			ORDER BY v.tarea;';
    		}
    		
    		$resultado = $this->conexion->ejecutarConsulta($sql);
    		$arr_ordentrabajo = array();
    	
    		while ( $fila = mysql_fetch_array($resultado))
    		{
    			$ordent = new ordenestrabajo();
    			$clie = new cliente();
    			$prod = new productos();
    	
    			$clie->setApellido($fila['apellido']);
    			$clie->setNombre($fila['nombrecliente']);
    			$clie->setDireccion($fila['direccion']);
    			$clie->setId_cliente($fila['id_cliente']);
    			$clie->setDni($fila['dni']);
    			$clie->setMail($fila['mail']);
    			$clie->setTelefono($fila['telefono']);
    	
    			$prod->setId_producto($fila['id_producto']);
    			$prod->setMarca($fila['marca']);
    			$prod->setModelo($fila['modelo']);
    			$prod->setNombre($fila['nombreproducto']);
    			$prod->setTipo($fila['tipo']);
    	
    			$ordent->setNro_orden($fila['nro_orden']);
    			$ordent->setDescripcion_tarea($fila['descripcion_tarea']);
    			$ordent->setFecha_egreso($fila['fecha_egreso']);
    			$ordent->setFecha_ingreso($fila['fecha_ingreso']);
    			$ordent->setPrecio($fila['precio']);
    			$ordent->setTarea($fila['tarea']);
    			$ordent->setCliente($clie);
    			$ordent->setProducto($prod);
    	
    			$arr_ordentrabajo[]=$ordent;
    		}
    		return $arr_ordentrabajo;
    	}
    	
   //------------------------------------------------------------------------ 	
    	function insertarConsulta($consultacli)
    	{
    		$cons="INSERT INTO clieconsulta (nombreusu,email,telefono,motivo,comentario)
    				VALUES ('".$consultacli->getNombre()."','".$consultacli->getEmail()."'
    				,".$consultacli->getTelefono().",'".$consultacli->getNombreMotivo()."','".$consultacli->getComentario()."');";
    		$resultado = $this->conexion->ejecutarConsulta($cons);
    	}
    	
}
?>