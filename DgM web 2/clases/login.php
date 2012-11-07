<?php
class login {
	private $mail;
	private $clave;
	private $cliente;
	
	public function login()
	{
	}
	
	//-----------------------------------------------------
	public function setMail($mail)
	{
		$this->mail = $mail;
	}
	public function getMail()
	{
		return $this->mail;
	}
	//-----------------------------------------------------
	public function setClave($clave)
	{
		$this->clave = $clave;
	}
	public function getClave()
	{
		return $this->$clave;
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
	public function validarClave($clave)
	{
		if ($this->clave == $clave)
			return true;
		else return false;
	}
}
?>