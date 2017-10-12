  <html>
<!DOCTYPE html>
<!-- saved from url=(0050)http://getbootstrap.com/examples/navbar-fixed-top/ -->
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="icon" href="img/favicon.ico">
    <title>Sistema de libros</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/bootstrap-filestyle.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.numeric.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    
    
  </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8"><font color="#000"><center><strong><h1>Ingresar Datos de Libros</h1></strong></center></font></div>
                    <div class="col-md-2"></div>
                </div>
                <hr>
    <h3>    
        <p class="bg-danger" align="center">
        <b>
   {{session("mensaje")}}
<br>
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

<a href="/sist_libros/public/libros">Listado</a>