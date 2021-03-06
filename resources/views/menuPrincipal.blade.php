
<!DOCTYPE html>
<html lang="en">
  <head>
	    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Facturas | Libros</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/custom.css">
	<link rel=icon href='libro.png' sizes="32x32" type="libro.png">
  </head>
  <body>
		<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Facturacion de Ventas de Libros</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        @if ($modulo == "CLIENTES")
            <li class="active"><a href="/sist_libros/public/clientes"><i class='glyphicon glyphicon-user'></i> Clientes <span class="sr-only">(current)</span></a></li>
        @else
            <li class=""><a href="/sist_libros/public/clientes"><i class='glyphicon glyphicon-user'></i> Clientes <span class="sr-only">(current)</span></a></li>
        @endif
        @if ($modulo == "CONTACTOS")
        <li class="active"><a href="/sist_libros/public/contactos"><i class='glyphicon glyphicon-phone-alt'></i> Contactos</a></li>
        @else
         <li class=""><a href="/sist_libros/public/contactos"><i class='glyphicon glyphicon-phone-alt'></i> Contactos</a></li>
         @endif

        @if ($modulo == "PROVEEDORES")
		    <li class="active"><a href="/sist_libros/public/proveedores"><i class='glyphicon glyphicon-user'></i> Proveedores</a></li>
        @else
       <li class=""><a href="/sist_libros/public/proveedores"><i class='glyphicon glyphicon-user'></i> Proveedores</a></li>
        @endif
        @if ($modulo == "LIBROS")
		<li class="active"><a href="/sist_libros/public/libros"><i  class='glyphicon glyphicon-book'></i> Libros</a></li>
        @else
        <li class=""><a href="/sist_libros/public/libros"><i  class='glyphicon glyphicon-book'></i> Libros</a></li>
        @endif
         @if ($modulo == "FACTURAS")
        <li class="active"><a href="/sist_libros/public/factura"><i  class='glyphicon glyphicon-list-alt'></i> Facturas</a></li>
        @else
		    <li class=""><a href="/sist_libros/public/factura"><i  class='glyphicon glyphicon-list-alt'></i> Facturas</a></li>
        @endif
        @if ($modulo == "STOCK")
         <li class="active"><a href="/sist_libros/public/stock"><i  class='glyphicon glyphicon-eye-open'></i> Stock</a></li>
        @else
        <li class=""><a href="/sist_libros/public/stock"><i  class='glyphicon glyphicon-eye-open'></i> Stock</a></li>
        @endif


       </ul>
      <ul class="nav navbar-nav navbar-right">
        @if ($modulo == "REPORTES")
        <li class="active"> <a href="#" target='_blank'><i class='glyphicon glyphicon-envelope'></i> Reporte</a></li>
        @else
        <li class=""> <a href="#" target='_blank'><i class='glyphicon glyphicon-envelope'></i> Reporte</a></li>
        @endif
        @if ($modulo =="SALIR")
		<li class="active"><a href="#"><i class='glyphicon glyphicon-off'></i> Salir</a></li>
    @else
    <li class=""><a href="#"><i class='glyphicon glyphicon-off'></i> Salir</a></li>
    @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	  
   					
		</form>
				
		
	</div>
	<hr>
	<div class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container">
      <p class="navbar-text pull-left"> 2017 - Queiroz Daiana.
           <a href="#" target="_blank" style="color: #ecf0f1">Instituto Macedo Martinez</a>
      </p>
   </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
	<script type="text/javascript" src="js/facturas.js"></script>

	<br><br>

	<div>
		@yield ('content')
	</div>
</div>
 
  </body>
</html>

