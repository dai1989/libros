 <center><h1>Ingrese los datos</h1></center>
 {{session("mensaje")}}
<br>

<form method="POST" action="{{ asset('clientes') }}">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	Nombre: <input type="text" name="txtNombre"><br>

	Apellido: <input type="text" name="txtApellido"><br>
	DNI: <input type="text" name="txtDNI"><br>
	Fecha de Nacimiento: <input type="date" name="txtFechaNacimiento"><br>
	Domicilio <input type="text" name="txtDomicilio"><br>
	Sexo <input type="text" name="txtSexo"><br>
	<input type="submit" value="Guardar Datos">

</form>
<br><br>

<a href="/sist_libros/public/clientes">Listado</a>