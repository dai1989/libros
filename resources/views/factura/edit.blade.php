 @extends('menuPrincipal')
@section('content')
<center><h1>Modifique los datos</h1></center>
 {{session("mensaje")}}
<br>

<form method="POST" action="{{ asset('factura/' . $factura->id) }}">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">

	Fecha: <input type="date" name="txtFecha" value="{{$factura->fecha}}"><br>

	Tipo:
	 <select name="txtTipo" value="{{$factura->tipo}}">
		<option value="">-- Selecciona Tipo de Factura --</option><br>
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>


	Numero: <input type="text" name="txtNumero" value="{{$factura->numero}}"><br>
	Cuit: <input type="text" name="txtCuit" value="{{$factura->cuit}}"><br> 
	Cliente:
	<select name="cboClientes">
       <option value="">--Seleccionar--</option><br> 
	@foreach ($clientes_list as $cliente)
	  <option value="{{ $cliente->id }}">{{ $cliente->persona->nombre }}</option>
	@endforeach
	</select><br>
	<input type="submit" value="Modificar Datos">
	

</form>
<br><br>

<a href="/sist_libros/public/factura">Listado</a> 
@endsection