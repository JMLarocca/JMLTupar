

<form class="contextoformulario" method="post"
	action="grabar_consulta.php">
	<div>
		<table class="tablaformulario">
			<tr>
				<td>Nombre Usuario:</td>
				<td><input type="text" size="70" name="nombre" />
				</td>
			</tr>
			<tr>
				<td>E-Mail:</td>
				<td><input type="text" size="70" name="e_mail" />
				</td>
			</tr>
			<tr>
				<td>Telefono:</td>
				<td><input type="text" size="70" name="telefono" />
				</td>
			</tr>
			<tr>
				<td>Motivo:</td>
				<td><select name="motivo">  
					<option	value="0"> Consulta</option>
					<option	value="1"> Sugerencia</option>
					<option	value="2"> Reclamo</option>
					<option	value="3"> Otro</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Comentario:</td>
				<td><textarea rows="10" cols="70" name="comentario"></textarea>
				</td>
			</tr>
		</table>
	</div>
	
	<br> <br> <br>
		<input id="boton" type="submit" name="enviar" value="Enviar" />
	<br>
	<h3>
		<a  href="http://localhost/DgM/principal.php?&ordenamiento=0"><button id="boton">Cancelar</button></a>
	</h3>
</form>
