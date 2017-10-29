@extends('menuPrincipal')
@section('content') 
<center><h1>Detalle Factura</h1></center>

{{session("mensaje")}}
<center>
<a href="detalle_factura/create"> Agregar Detalle de Factura</a>
<br><br>
<table class="display table table-hover" cellspacing="0" width="100%">
       
        <thead>
            <tr>
                <th>Factura</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Libros</th>
                <th>Acciones</th>
            </tr>
        </thead>



	@foreach ($detalle_facturas_list as $detalle_factura)

    <tr>
    <th>{{$detalle_factura->factura->numero}}</th>
    <th>{{ $detalle_factura->cantidad}}</th>
	<th>{{ $detalle_factura->precio}}</th>
	<th>{{$detalle_factura->libro->titulo}}</th>
	
	
	
	<td>
		<a href="detalle_factura/{{$detalle_factura->id}}/edit"><i class='glyphicon glyphicon-edit'></i>Modificar</a></li> - 
		
		<a href="detalle_factura/{{$detalle_factura->id}}"><i class='glyphicon glyphicon-trash'></i>Eliminar</a></li>
	
</td>
	
	</tr>
	@endforeach
	
</table>
</center>
@endsection