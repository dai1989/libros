 @extends('menuPrincipal')
@section('content')
<center><h1>Ingrese los datos</h1></center>
 {{session("mensaje")}}
<br>

<form method="POST" action="{{ asset('contactos/' . $contacto->id) }}">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	Email: <input type="text" name="txtEmail" value="{{$contacto->email}}"><br>
	Celular: <input type="text" name="txtCelular" value="{{$contacto->celular}}"><br>
	Telefono Fijo: <input type="text" name="txtTelefonoFijo" value="{{$contacto->telefono_fijo}}"><br>
	
	<input type="submit" value="Modificar Datos">

</form>
<br><br>

<a href="/sist_libros/public/contactos">Listado</a> 
@endsection