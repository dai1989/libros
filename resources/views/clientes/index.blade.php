@extends('menuPrincipal')
@section('content')  

{{session("mensaje")}}
<center>
<a href="clientes/create">Nuevo Cliente</a>
<br><br>
<table border="1">
	    <tr>
		<th>Nombre</th>
	    <th>Apellido</th>
	    <th>DNI</th>
	    
	    <th>Domicilio</th> 
	    <th>Sexo</th>
	    <th>Activo</th>
	    <th>Opciones</th>
		</tr>

	@foreach ($clientes_list as $cliente)

    <tr>
	<th>{{ $cliente->persona->nombre}}</th>
	<th>{{ $cliente->persona->apellido}}</th>
	<th>{{ $cliente->persona->dni}}</th>
	
	<th>{{ $cliente->persona->domicilio}}</th>
	<th>{{ $cliente->persona->sexo}}</th>
	<th>{{ $cliente->activo}}</th>
	<td> 
		<a href="clientes/{{$cliente->id}}/edit"><i class='glyphicon glyphicon-edit'></i>Modificar</a></li> - 
		
		<a href="clientes/{{$cliente->id}}"><i class='glyphicon glyphicon-trash'></i>Eliminar</a></li>
</td>
	
	</tr>
	@endforeach
	
</table>
</center>
@endsection