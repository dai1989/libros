

{{session("mensaje")}}

<a href="contactos/create">Nuevo Contacto</a>
<br><br>
<table border="1">
	    <tr>
		<th>Email</th>
	    <th>Celular</th>
	    <th>Telefono Fijo</th>
	    <th>-</th>
		</tr>

	@foreach ($contactos_list as $contacto)

    <tr>
	<th>{{ $contacto->email}}</th>
	<th>{{ $contacto->celular}}</th>
	<th>{{ $contacto->telefono_fijo}}</th>
	<td> 
		<a href="contactos/{{$contacto->id}}"> Eliminar</a>
</td>
	
	</tr>
	@endforeach
	
</table>