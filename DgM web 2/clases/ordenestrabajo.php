<?php
class ordenestrabajo {
	private $nro_orden;
	//private $id_cliente;
	private $cliente;
	private $fecha_ingreso;
	private $fecha_egreso;
	//private $id_producto;
	private $producto;
	private $tarea;
	private $descripcion_tarea;
	private $precio;

	
	 
	public function ordenestrabajo()
	{
	}
	//-----------------------------------------------------
	public function getOrdenesTrabajoPorCliente($cliente){
		//return todas las oredenes de trabajo del cliente $cliente
	}
	//-----------------------------------------------------
	public function setNro_orden($nro_orden)
	{
		$this->nro_orden = $nro_orden;
	}
	public function getNro_orden()
	{
		return $this->nro_orden;
	}
	//-----------------------------------------------------
	public function setCliente($cliente)
	{
		$this->cliente = $cliente;
	}
	public function getCliente()
	{
		return $this->cliente;
	}
	//-----------------------------------------------------
	public function setFecha_ingreso($fecha_ingreso)
	{
		$this->fecha_ingreso = $fecha_ingreso;
	}
	public function getFecha_ingreso()
	{
		return $this->fecha_ingreso;
	}
	//-----------------------------------------------------
	public function setFecha_egreso($fecha_egreso)
	{
		$this->fecha_egreso =$fecha_egreso;
	}
	public function getFecha_egreso()
	{
		return $this->fecha_egreso;
	}
	//-----------------------------------------------------
	public function setProducto($producto)
	{
		$this->producto = $producto;
	}
	public function getProducto()
	{
		return $this->producto;
	}
	//-----------------------------------------------------
	public function setTarea($tarea)
	{
		$this->tarea = $tarea;
	}
	public function getTarea()
	{
		return $this->tarea;
	}
	//-----------------------------------------------------
	public function setDescripcion_tarea($descripcion_tarea)
	{
		$this->descripcion_tarea = $descripcion_tarea;
	}
	public function getDestripcion_tarea()
	{
		return $this->descripcion_tarea;
	}
	//-----------------------------------------------------
	public function setPrecio($precio)
	{
		$this->precio = $precio;
	}
	public function getPrecio()
	{
		return $this->precio;
	}
	//-------------------------------
	public function getNombreTarea()
	{
		if ($this->tarea = 1)
			$t= "RECARGA";
		else if ($this->tarea = 2)
			 $t ="RECAMBIO";
			 else if ($this->tarea = 3)
			 $t ="REACONDICIONAR";
			 else if ($this->tarea = 4)
			 $t ="REMANOFACTURA";
			 else 
			 	$t ="NO ASIGNADA";
		
		return $t;
	}
	
	
}
?>