 @extends('menuPrincipal')
@section('content')

{{session("mensaje")}}
<center>
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
		<a href="contactos/{{$contacto->id}}/edit"><i class='glyphicon glyphicon-edit'></i>Modificar</a></li> - 
		
		<a href="contactos/{{$contacto->id}}"><i class='glyphicon glyphicon-trash'></i>Eliminar</a></li>
		
</td>
	
	</tr>
	@endforeach
	
</table>
</center>
@endsection