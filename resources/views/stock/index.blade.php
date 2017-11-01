@extends('menuPrincipal')
@section('content')
  <center><h1>Lista de Stock</h1></center>
{{session("mensaje")}}
<br>

<br><br>
<table class="display table table-hover" cellspacing="0" width="100%">
       
        <thead>
            <tr>
             
                <th>Libros</th>
                <th>Cantidad Actual</th>
                <th>Cantidad Minima</th>
               
                <th>Acciones</th>
             
              
            </tr>
        </thead>
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