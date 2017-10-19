   @extends('menuPrincipal')
@section('content')
 
   {{session("mensaje")}}
<br>
<center>
<form method="POST" action="{{ asset('libros') }}">

	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	
	Titulo: <input type="text" name="txtTitulo"><br>

	Editorial: <input type="text" name="txtEditorial"><br>
	Autor: <input type="text" name="txtAutor"><br>
	Fecha de Edicion: <input type="date" name="txtFechaEdicion"><br>
	Tipo de Tapa: 
	<select name="txtTipoTapa">
		<option value="">-- Selecciona Tipo de Tapa --</option><br>
					<option value="Blanda">Blanda</option>
					<option value="Dura">Dura</option>
	</select><br>

	Genero:
	 <select name="txtGenero">
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

	Precio: <input type="text" name="txtPrecio"><br>
	
	ISBN: <input type="text" name="txtIsbn"><br>
	Proveedores:
	<select name="cboProveedor">
       <option value="">--Seleccionar--</option><br> 
	@foreach ($proveedores_list as $proveedor)
	  <option value="{{ $proveedor->id }}">{{ $proveedor->razon_social }}</option>
	@endforeach
	</select><br>
	<input type="submit" value="Guardar Datos">

</form>
<br><br>
</center>

<a href="/sist_libros/public/libros">Listado</a>
@endsection