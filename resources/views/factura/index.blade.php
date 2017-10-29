@extends('menuPrincipal')
@section('content') 
<center><h1>Factura</h1></center>
{{session("mensaje")}}

<a href="factura/create">Nuevo Factura</a>
<br><br>
<table class="display table table-hover" cellspacing="0" width="100%">
       
        <thead>
            <tr>
             
                <th>Cliente</th>
                <th>Fecha</th>
                <th>Tipo</th>
                <th>Numero de Factura</th>
                <th>Cuit</th>
                <th>Acciones</th>
             
              
            </tr>
        </thead>


	@foreach ($facturas_list as $factura)

    <tr>
    <th>{{ $factura->cliente->persona->nombre}}</th>	
	<th>{{ $factura->fecha}}</th>
	<th>{{ $factura->tipo}}</th>
	<th>{{ $factura->numero}}</th>
	<th>{{ $factura->cuit}}</th> 
	
	<td>
		<a href="factura/{{$factura->id}}/edit"><i class='glyphicon glyphicon-edit'></i>Modificar</a></li> - 
		
		<a href="factura/{{$factura->id}}"><i class='glyphicon glyphicon-trash'></i>Eliminar</a></li>
	
</td>
	 
	</tr>
	@endforeach
	
</table>
</center>
@endsection