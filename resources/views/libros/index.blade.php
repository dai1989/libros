 @extends('menuPrincipal')
@section('content')

{{session("mensaje")}}
<center>
 <center><h1 class="box-title">Lista de Libros</h1></center>		
<a href="libros/create">Nuevo Libro</a>
<br><br>
<table class="display table table-hover" cellspacing="0" width="100%">
       
        <thead>
            <tr>
             
                <th>Titulo</th>
                <th>Editorial</th>
                <th>Autor</th>
                <th>Fecha de Edicion</th>
                <th>Tipo de Tapa</th>
                <th>Genero</th>
                <th>Precio</th>
                <th>ISBN</th>
                <th>Acciones</th>
            </tr>
        </thead>


	@foreach ($libros_list as $libros)

    <tr>
	<th>{{ $libros->titulo}}</th>
	<th>{{ $libros->editorial}}</th>
	<th>{{ $libros->autor}}</th>
	<th>{{ $libros->fecha_edicion}}</th>
	<th>{{ $libros->tipo_tapa}}</th>
	<th>{{ $libros->genero}}</th>
	<th>{{ $libros->precio}}</th>
	<th>{{ $libros->isbn}}</th>
	<td>
		<a href="libros/{{$libros->id}}/edit"><i class='glyphicon glyphicon-edit'></i>Modificar</a></li> - 
		
		<a href="libros/{{$libros->id}}"><i class='glyphicon glyphicon-trash'></i>Eliminar</a></li>
		
		
		
	</tr>
	@endforeach
	
</table>
</center>
@endsection