<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script type="text/javascript" src="./JavaScripts/validar.js"></script>
<link href="./estilos/DgM.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>DgM
</title>
</head>
<body>
	<div class="ingresar">
		<form action="usrlogin.php" method="post" onSubmit="return validarIngreso(this);">
		<div>
		 
			<h1>Usuario:</h1>
			<input type="text" size="25" name="usuario" onchange="return validarUsuario(this)"/>
			<h1>Contraseņa:</h1>
			<input type="password" size="25" name="clave" onchange="return validarClave(this)"/>
				 <input type="hidden" name="ordenamiento" value=0/>
			<p><br><input id="boton" type="submit" name="ingresar" value="Ingresar"></p>
		</div>
		</form>
	</div>
	
</body>
</html>