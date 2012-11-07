<?php
class productos {
	private $id_producto;
	private $marca;
	private $modelo;
	private $tipo;
	private $nombre;

	public function productos()
	{
	}

	//-----------------------------------------------------
	public function setId_producto($id_producto)
	{
		$this->id_producto = $id_producto;
	}
	public function getId_producto()
	{
		return $this->id_producto;
	}
	//-----------------------------------------------------
	public function setMarca($marca)
	{
		$this->marca = $marca;
	}
	public function getMarca()
	{
		return $this->marca;
	}
	//-----------------------------------------------------
	public function setModelo($modelo)
	{
		$this->modelo = $modelo;
	}
	public function getModelo()
	{
		return $this->modelo;
	}
	//-----------------------------------------------------
	public function setTipo($tipo)
	{
		$this->tipo = $tipo;
	}
	public function getTipo()
	{
		return $this->tipo;
	}
	//-----------------------------------------------------
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}
	public function getNombre()
	{
		return $this->nombre;
	}

}
?>