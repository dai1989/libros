<form method="POST" action="{{ asset('detalle_factura') }}">

	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	
	Cantidad: <input type="text" name="txtCantidad"><br>
	Precio: <input type="text" name="txtPrecio"><br>
	
	
	Factura:
	<select name="cboFactura">
       <option value="">--Seleccionar--</option><br> 
	@foreach ($facturas_list as $factura)
	  <option value="{{ $factura->id }}">{{ $factura->numero }}</option>
	@endforeach
	</select><br>
	


	<input type="submit" value="Guardar Datos">

</form>
<br><br>

<a href="/sist_libros/public/detalle_factura">Listado</a>