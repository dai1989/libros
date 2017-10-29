@extends('menuPrincipal')
@section('content')  

{{session("mensaje")}}
<center>
 <center><h1 class="box-title">Lista de Clientes</h1></center>	
<a href="clientes/create">Nuevo Cliente</a>
<br><br>
<table class="display table table-hover" cellspacing="0" width="100%">
       
        <thead>
            <tr>
             
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Domicilio</th>
                <th>Sexo</th>
                <th>Activo</th>
             
              <th>Acciones</th>
            </tr>
        </thead>


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