 @extends('menuPrincipal')
@section('content')
<center><h1>Modifique los datos</h1></center>
 {{session("mensaje")}}
<br>

<form method="POST" action="{{ asset('libros/' . $libros->id) }}">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">

	Titulo: <input type="text" name="txtTitulo" value="{{$libros->titulo}}"><br>

	Editorial: <input type="text" name="txtEditorial" value="{{$libros->editorial}}"><br>
	Autor: <input type="text" name="txtAutor" value="{{$libros->autor}}"><br>
	Fecha de Edicion: <input type="date" name="txtFechaEdicion" value="{{$libros->fecha_edicion}}"><br>
	Tipo de Tapa: 
	<select name="txtTipoTapa" value="{{$libros->tipo_tapa}}">
		<option value="">-- Selecciona Tipo de Tapa --</option><br>
					<option value="Blanda">Blanda</option>
					<option value="Dura">Dura</option>
	</select><br>

	Genero:
	 <select value="{{$libros->genero}}" name="txtGenero">
		<option value="">-- Selecciona Tipo de Genero --</option><br>
					<option value="Romantica">Romantica</option>
					<option value="Aventura">Aventura</option>
					<option value="Ciencia Ficcion">Ciencia Ficcion</option>
					<option value="Enciclopedia/Manual" >Enciclopedia/Manual</option>
					<option value="Política">Política</option>
					<option value ="Economía/Marketing">Economía/Marketing</option>
					<option value="Viajes/Cultura">Viajes/Cultura</option>
					<option value="Infantil">Infantil</option>
                    <option value="Novela">Novela</option>
					<option value="Otros temas/Varios">Otros temas/Varios</option>
	</select><br>

	Precio: <input type="text" name="txtPrecio" value="{{$libros->precio}}"><br>
	
	ISBN: <input type="text" name="txtIsbn" value="{{$libros->isbn}}"><br>
	

</form>
<br><br>

<a href="/sist_libros/public/libros">Listado</a> 
@endsection