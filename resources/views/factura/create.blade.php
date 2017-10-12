{{session("mensaje")}}
<br>
<form method="POST" action="{{ asset('factura') }}">

	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	
	Fecha: <input type="date" name="txtFecha"><br>

	Tipo:
	 <select name="txtTipo">
		<option value="">-- Selecciona Tipo de Factura --</option><br>
					<option value="A">A</option>
					<option value="B">B</option>
	Numero: <input type="text" name="txtNumero"><br>
	Cuit: <input type="text" name="txtCuit">
	
	Cliente:
	<select name="cboClientes">
       <option value="">--Seleccionar--</option><br> 
	@foreach ($clientes_list as $cliente)
	  <option value="{{ $cliente->id }}">{{ $cliente->persona->nombre }}</option>
	@endforeach
	</select><br>
	<input type="submit" value="Guardar Datos">

</form>
<br><br>

<a href="/sist_libros/public/factura">Listado</a>