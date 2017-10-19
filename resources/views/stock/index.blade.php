@extends('menuPrincipal')
@section('content')  
{{session("mensaje")}}
<br>

<br><br>
<center>
	
	<table border="1">
	    <tr>
	    <th>Libro</th>
		<th>Cantidad Actual</th>
	    <th>Cantidad Minima</th>
	   
	    <th>Accion<th>
	    </tr>

	@foreach ($stock_list as $stock)

    <tr>
    <th>{{$stock->libro->titulo}}</th>	
	<th>{{ $stock->cantidad_actual}}</th>
	<th>{{ $stock->cantidad_minima}}</th>
	


	
	<td>
		 <a href="stock/{{$stock->id}}/edit"><i class='glyphicon glyphicon-edit'></i>Actualizar</a></li> 
		
		
		
		
		
	</tr>
	@endforeach
	
</table>
</center>
@endsection