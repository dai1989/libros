 @extends('menuPrincipal')
@section('content')
<center><h1>Ingrese los datos</h1></center>
 {{session("mensaje")}}
<br>

<form method="POST" action="{{ asset('clientes/' . $cliente->id) }}">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	Nombre: <input type="text" name="txtNombre" value="{{$cliente->persona->nombre}}"><br>
	Apellido: <input type="text" name="txtApellido" value="{{$cliente->persona->apellido}}"><br>
	DNI: <input type="text" name="txtDNI" value="{{$cliente->persona->dni}}"><br>
	Fecha de Nacimiento: <input type="date" name="txtFechaNacimiento" value="{{$cliente->persona->fecha_nacimiento}}"><br>
	Domicilio <input type="text" name="txtDomicilio" value="{{$cliente->persona->domicilio}}"><br>
	Sexo <input type="text" name="txtSexo" value="{{$cliente->persona->sexo}}"><br>
	<input type="submit" value="Modificar Datos">

</form>
<br><br>

<a href="/sist_libros/public/clientes">Listado</a> 
@endsection