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
                    <div class="col-md-8"><font color="#000"><center><strong><h1>Ingresar Contacto</h1></strong></center></font></div>
                    <div class="col-md-2"></div>
                </div>
                <hr>
    <h3>    
        <p class="bg-danger" align="center">
        <b>


 {{session("mensaje")}}
<br>

<form method="POST" action="{{ asset('contactos') }}">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
<div class="form-group">
	    <label for="email">Email</label>
	    <input type="text" name="txtEmail" class="form-control" id="email">
	</div>

	<div class="form-group">
	    <label for="celular">Celular</label>
	    <input type="text" name="txtCelular" class="form-control" id="celular">
	</div>

	<div class="form-group">
        <label for="telefono_fijo">Telefono Fijo</label>
	    <input name="txtTelefonoFijo" type="text" id="telefono_fijo"  class="form-control">
	</div>

	Personas:
	<select name="cboPersona">
		<option value="">--Seleccionar--</option><br>
	@foreach ($personas_list as $persona)
	  <option value="{{ $persona->id }}">{{ $persona->nombre }}</option>
	@endforeach
	</select><br>
	
	<input type="submit" value="Guardar Datos"> 

</form>
<br><br>

<a href="/sist_libros/public/contactos">Listado</a>