<center><h1>Lista de proveedores</h1></center>
{{session("mensaje")}}


<a href="proveedores/create">Nuevo Proveedor</a>
<br><br>
<center>
<table border="1">
	    <tr>
		<th>Razon Social</th>
	    <th>Domicilio</th>
	    <th>Email</th>
	    <th>Celular</th>
	    <th>Tel Fijo</th>
	    <th>-<th>
	    
		</tr>

	@foreach ($proveedores_list as $proveedor)

    <tr>
	<th>{{ $proveedor->razon_social}}</th>
	<th>{{ $proveedor->domicilio}}</th>
	<th>{{ $proveedor->email}}</th>
	
	<th>{{ $proveedor->celular}}</th>
	<th>{{ $proveedor->telefono_fijo}}</th>
	<td>
	<a href="proveedores/{{$proveedor->id}}"> Eliminar</a>
</td>
	
	</tr>
	@endforeach
	
</table>
</center>