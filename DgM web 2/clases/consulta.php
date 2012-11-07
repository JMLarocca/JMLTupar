<?php

class consulta {
	private $nro_consulta;
	private $nombre;
	private $email;
	private $telefono;
	private $motivo;
	private $comentario;

	public function consulta()
	{
	}
	//-----------------------------------------------------
	public function setNombre($nombre)
	{
		$this->nombre= $nombre;
	}
	public function getNombre()
	{
		return $this->nombre;
	}
	//----------------------------------
	public function setNro_consulta($nro_cliente)
	{
		$this->nro_consulta= $nro_consulta;
	}
	public function getNro_cliente()
	{
		return $this->nro_consulta;
	}

//-----------------------------------------------------
	public function setEmail($email)
	{
		$this->email= $email;
	}
	public function getEmail()
	{
		return $this->email;
	}
	//-----------------------------------------------------
	public function setTelefono($telefono)
	{
		$this->telefono= $telefono;
	}
	public function getTelefono()
	{
		return $this->telefono;
	}
	//-----------------------------------------------------
	public function setMotivo($motivo)
	{
		$this->motivo= $motivo;
	}
	public function getMotivo()
	{
		return $this->motivo;
	}
	//--------------------------
	public function getNombreMotivo()
	{
		if ($this->motivo == 1)
				return 'consulta';
		else if ($this->motivo == 2)
				return 'sugerencia';
			 else if ($this->motivo == 3)
				return 'reclamo';
			 	else 
				return 'otros';
		
	}
	//-----------------------------------------------------
	public function setComentario($comentario)
	{
		$this->comentario = $comentario;
	}
	public function getComentario()
	{
		return $this->comentario;
	}
}

?>