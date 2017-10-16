@extends('menuPrincipal')
@section('content')  
<center><h1>Agregar Proveedor</h1></center>
<center>
 {{session("mensaje")}}
<form method="POST" action="{{ asset('proveedores') }}">

	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	Razon Social: <input type="text" name="txtRazonSocial"><br>
	Domicilio: <input type="text" name="txtDomicilio"><br>
	Email: <input type="text" name="txtEmail"><br>
	Celular: <input type="text" name="txtCelular"><br>
	Telefono Fijo: <input type="text" name="txtTelefonoFijo"><br>
	
	
	
	<input type="submit" value="Guardar Datos">

</form>

<br><br>
<a href="/sist_libros/public/proveedores">Listado</a>
</center>
@endsection