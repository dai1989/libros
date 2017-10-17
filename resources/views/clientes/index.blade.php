@extends('menuPrincipal')
@section('content')  

{{session("mensaje")}}
<center>
<a href="clientes/create">Nuevo Cliente</a>
<br><br>
<table border="1">
	    <tr>
		<td>Nombre</td>
	    <td>Apellido</td>
	    <td>DNI</td>
	    
	    <td>Domicilio</td> 
	    <td>Sexo</td>
	    <td>Activo</td>
	    <td>Opciones</td>
		</tr>

	@foreach ($clientes_list as $cliente)

    <tr>
	<td>{{ $cliente->persona->nombre}}</td>
	<td>{{ $cliente->persona->apellido}}</td>
	<td>{{ $cliente->persona->dni}}</td>
	
	<td>{{ $cliente->persona->domicilio}}</td>
	<td>{{ $cliente->persona->sexo}}</td>
	<td>{{ $cliente->activo}}</td>
	<td> 
		<a href="clientes/{{$cliente->id}}/edit"><i class='glyphicon glyphicon-edit'></i>Modificar</a></li> - 
		
		<a href="clientes/{{$cliente->id}}"><i class='glyphicon glyphicon-trash'></i>Eliminar</a></li>
</td>
	
	</tr>
	@endforeach
	
</table>
</center>
@endsection