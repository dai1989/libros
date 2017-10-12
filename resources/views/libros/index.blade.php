<html>
<!DOCTYPE html>
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
                    <div class="col-md-8"><font color="#000"><center><strong><h1>Listado de Libros</h1></strong></center></font></div>
                    <div class="col-md-2"></div>
                </div>
                <hr>
    <h3>    
        <p class="bg-danger" align="center">
        <b>





{{session("mensaje")}}
<br>
<a href="libros/create">Nuevo Ingreso</a>
<br><br>
<center>
	<table border="1">
	    <tr>
		<th>Titulo</th>
	    <th>Editorial</th>
	    <th>Autor</th>
	    <th>Fecha de Edicion</th>
	    <th>Tipo de Tapa</th>
	    <th>Genero</th>
	    <th>Precio</th>
	    <th>ISBN</th>
	    <th>-<th>
	    </tr>

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
		
		<a href="libros/{{$libros->id}}"> Eliminar</a>
		
		
	</tr>
	@endforeach
	
</table>
</center>