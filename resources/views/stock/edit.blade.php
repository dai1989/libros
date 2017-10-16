 @extends('menuPrincipal')
@section('content')
<center><h1>Ingrese Stock</h1></center>
 {{session("mensaje")}}
<br>

<form method="POST" action="{{ asset('stock/' . $stock->id) }}">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	Cantidad Actual: <input type="text" name="txtCantidadActual" value="{{$stock->cantidad_actual}}"><br>

	Cantidad Minima <input type="text" name="txtCantidadMinima" value="{{$stock->cantidad_minima}}"><br>

	
	<input type="submit" value="Modificar Datos">

</form>
<br><br>

<a href="/sist_libros/public/stock">Listado</a> 
@endsection