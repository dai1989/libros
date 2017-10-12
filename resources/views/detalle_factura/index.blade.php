<center><h1>detalle Factura</h1></center>
{{session("mensaje")}}

<a href="detalle_factura/create">Detalle Factura</a>
<br><br>
<center>
<table border="1">
	    <tr>
		<th>Cantidad</th>
	    <th>Precio</th>
	    
	    
	    <th>-<th>
	    
		</tr>

	@foreach ($detalle_facturas_list as $detalle_factura)

    <tr>
	<th>{{ $detalle_factura->cantidad}}</th>
	<th>{{ $detalle_factura->precio}}</th>
	
	
	<td>
	<a href="detalle_factura/{{$detalle_factura->id}}"> Eliminar</a>
</td>
	
	</tr>
	@endforeach
	
</table>
</center>