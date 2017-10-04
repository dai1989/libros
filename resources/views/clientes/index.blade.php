<table border="1">
	    <tr>
		<th>Nombre</th>
	    <th>Apellido</th>
	    <th>DNI</th>
	    
	    <th>Domicilio</th>
	    <th>Sexo</th>
	    <th>Activo</th>
		</tr>

	@foreach ($clientes_list as $cliente)

    <tr>
	<th>{{ $cliente->persona->nombre}}</th>
	<th>{{ $cliente->persona->apellido}}</th>
	<th>{{ $cliente->persona->dni}}</th>
	
	<th>{{ $cliente->persona->domicilio}}</th>
	<th>{{ $cliente->persona->sexo}}</th>
	<th>{{ $cliente->activo}}</th>
	<th>m</th>
	</tr>
	@endforeach
	
</table>