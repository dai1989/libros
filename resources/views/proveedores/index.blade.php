@extends('menuPrincipal')
@section('content')  
<center><h1>Lista de proveedores</h1></center>
{{session("mensaje")}}

<center>
<a href="proveedores/create">Nuevo Proveedor</a>
<br><br>

<table class="display table table-hover" cellspacing="0" width="100%">
       
        <thead>
            <tr>
             
                <th>Razon Social</th>
                <th>Domicilio</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Telefono Fijo</th>
                <th>Acciones</th>
             
              
            </tr>
        </thead>

	@foreach ($proveedores_list as $proveedor)

    <tr>
	<th>{{ $proveedor->razon_social}}</th>
	<th>{{ $proveedor->domicilio}}</th>
	<th>{{ $proveedor->email}}</th>
	
	<th>{{ $proveedor->celular}}</th>
	<th>{{ $proveedor->telefono_fijo}}</th>
	<td>
		<a href="proveedores/{{$proveedor->id}}/edit"><i class='glyphicon glyphicon-edit'></i>Modificar</a></li> - 
		
		<a href="proveedores/{{$proveedor->id}}"><i class='glyphicon glyphicon-trash'></i>Eliminar</a></li>
	
</td>
	
	</tr>
	@endforeach
	
</table>
</center>
@endsection