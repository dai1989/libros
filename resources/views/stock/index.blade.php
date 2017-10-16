@extends('menuPrincipal')
@section('content')  
{{session("mensaje")}}
<br>
<a href="stock/create">Nuevo Ingreso de Stock</a>
<br><br>
<center>
	
	<table border="1">
	    <tr>
		<th>Cantidad Actual</th>
	    <th>Cantidad Minima</th>
	    <th>-<th>
	    </tr>

	@foreach ($stock_list as $stock)

    <tr>
	<th>{{ $stock->cantidad_actual}}</th>
	<th>{{ $stock->cantidad_minima}}</th>
	
	<td>
		 <a href="stock/{{$stock->id}}/edit"><i class='glyphicon glyphicon-edit'></i>Modificar</a></li> - 
		
		<a href="stock/{{$stock->id}}"><i class='glyphicon glyphicon-trash'></i>Eliminar</a></li>
		
		
		
	</tr>
	@endforeach
	
</table>
</center>
@endsection