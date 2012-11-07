<?php
class cliente {
		private $id_cliente;
		private $nombre;
		private $apellido;
		private $dni;
		private $direccion;
		private $telefono;
		private $mail;
		
		public function cliente()
		{			
		}
//-----------------------------------------------------
		public function setId_cliente($id_cliente)
		{
			$this->id_cliente = $id_cliente;
		}
		public function getId_cliente()
		{
			return $this->id_cliente;
		}
//--------------------------------		
		public function setNombre($nombre)
		{
			$this->nombre = $nombre;
		}
		public function getNombre()
		{
			return $this->nombre;
		}
//--------------------------------
		public function setApellido($apellido)
		{
			$this->apellido = $apellido;
		}
		public function getApellido()
		{
			return $this->apellido;
		}
		//--------------------------------
		public function setDni($dni)
		{
			$this->dni = $dni;
		}
		public function getDni()
		{
			return $this->dni;
		}
//--------------------------------		
		public function setDireccion($direccion)
		{
			$this->direccion = $direccion;
		}
		public function getDireccion()
		{
			return $this->direccion;
		}
//--------------------------------		
		public function setTelefono($telefono)
		{
			$this->telefono = $telefono;
		}
		public function getTelefono()
		{
			return $this->telefono;	
		}
//--------------------------------
		public function setMail($mail)
		{
			$this->mail = $mail;
		}
		public function getMail()
		{
			return $this->mail;
		}
//-------------------------
		public function getApellidoNombre()
		{
			return $this->apellido.','.$this->nombre;
		}
}

?>