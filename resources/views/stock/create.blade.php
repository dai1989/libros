
   {{session("mensaje")}}
<br>
<form method="POST" action="{{ asset('stock') }}">

	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	
	Cantidad Actual: <input type="text" name="txtCantidadActual"><br>

	Cantidad Minima <input type="text" name="txtCantidadMinima"><br>
	
	Libros:
	<select name="cboLibros">
       <option value="">--Seleccionar--</option><br> 
	@foreach ($libros_list as $libros)
	  <option value="{{ $libros->id }}">{{ $libros->titulo }}</option>
	@endforeach
	</select><br>
	<input type="submit" value="Guardar Datos">

</form>
<br><br>

<a href="/sist_libros/public/stock">Listado</a>