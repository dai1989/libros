 @extends('menuPrincipal')
@section('content')
<center><h1>Modifique los datos</h1></center>
 {{session("mensaje")}}
<br>

<form method="POST" action="{{ asset('detalle_factura/' . $detalle_factura->id) }}">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	Cantidad: <input type="text" name="txtCantidad" value="{{$detalle_factura->cantidad}}"><br>
	Precio: <input type="text" name="txtPrecio" value="{{$detalle_factura->precio}}"><br>
	
	
	<input type="submit" value="Modificar Datos">

</form>
<br><br>

<a href="/sist_libros/public/detalle_factura">Listado</a> 
@endsection