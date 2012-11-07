<?php


class DbConexion {
		private $servidor;
		private $usuario;
		private $contrasenia;
		private $basededato;
		private $conexion;
		private $consulta;
		private $resultado;	
		private $enlace;
		
	function DbConexion($servidor,$usuario,$contrasenia,$basededato)
		{ 
			$this->servidor = $servidor;
		  	$this->usuario = $usuario;
		  	$this->contraseña = $contrasenia;
		  	$this->basededato = $basededato;
		  
		  	$this->conexion = mysql_connect($this->servidor,$this->usuario,$this->contrasenia,$this->basededato);
		  if (!$this->conexion)
		  {
		  	die("Imposible conectar!!!".mysql_error());
		  }
		  $this->enlace = mysql_select_db($this->basededato);

		}
	
		
		
	function ejecutarConsulta ($consulta)
	{
		$this->consulta = $consulta;
		$this->resultado = mysql_query($consulta);
		return $this->resultado;	
	}
	function desconectar()
	{
		mysql_close($this->conexion);
	}

	
}
?>