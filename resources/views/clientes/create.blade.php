@extends ('menuPrincipal')
@section ('content')

 <center><h1>Ingrese los datos</h1></center>
 {{session("mensaje")}}
<br>
<center>
<form method="POST" action="{{ asset('clientes') }}">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	Nombre: <input type="text" name="txtNombre"><br>

	Apellido: <input type="text" name="txtApellido"><br>
	DNI: <input type="text" name="txtDNI"><br>
	Fecha de Nacimiento: <input type="date" name="txtFechaNacimiento"><br>
	Domicilio <input type="text" name="txtDomicilio"><br>
	Sexo <input type="text" name="txtSexo"><br>
	<br><br>
	<button type="input" value="Guardar Cliente" class="btn btn-primary">Guardar Cliente</button>



</form>
<br><br>

<a href="/sist_libros/public/clientes">Listado</a>
</center>
@endsection