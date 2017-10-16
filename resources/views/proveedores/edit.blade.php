 @extends('menuPrincipal')
@section('content')
<center><h1>Modifique los datos</h1></center>
 {{session("mensaje")}}
<br>

<form method="POST" action="{{ asset('proveedores/' . $proveedor->id) }}">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">

	Razon Social: <input type="text" name="txtRazonSocial" value="{{$proveedor->razon_social}}"><br>
	Domicilio: <input type="text" name="txtDomicilio" value="{{$proveedor->domicilio}}"><br>
	Email: <input type="text" name="txtEmail" value="{{$proveedor->email}}"><br>
	Celular: <input type="text" name="txtCelular" value="{{$proveedor->celular}}"><br>
	Telefono Fijo: <input type="text" name="txtTelefonoFijo" value="{{$proveedor->telefono_fijo}}"><br>
	<br><br>
	<button type="input" value="Modificar Datos" class="btn btn-primary">Modificar Datos</button>
	

</form>
<br><br>

<a href="/sist_libros/public/proveedores">Listado</a> 
@endsection