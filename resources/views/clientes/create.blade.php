@extends ('menuPrincipal')
@section ('content')
<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <center><h1 class="box-title">Agregue Nuevo Cliente al Sistema</h1></center>
{{session("mensaje")}} z
                  <br><br>
                </div><!-- /.box-header --> 

<div id="notificacion_resul_fanu"></div>  



<form  method="post"  action="{{ asset('clientes') }}" class="form-horizontal form_entrada" >                
  
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">              


<div class="box-body col-xs-12">
<div class="form-group col-xs-6">
                      <label for="nombre">Nombres*</label>
                      <input type="text" class="form-control" id="nombre" name="txtNombre" placeholder="Nombre" >
</div> 
<div class="form-group col-xs-6">
                      <label for="apellido">Apellido*</label>
                      <input type="text" class="form-control" id="apellido" name="txtApellido" placeholder="Apellido" >
</div>
<div class="form-group col-xs-6">
                      <label for="dni">DNI*</label>
                      <input type="text" class="form-control" id="dni" name="txtDNI" placeholder="Documento" >
</div>
<div class="form-group col-xs-6">
                      <label for="fecha_nacimiento">Fecha de Nacimiento</label><br>
                      <input type="date" class="form-control" id="fecha_nacimiento" name="txtFechaNacimiento" placeholder="Fecha de Nacimiento" >
</div>
<div class="form-group col-xs-6">
                      <label for="domicilio">Domicilio</label><br>
                      <input type="text" class="form-control" id="domicilio" name="txtDomicilio" placeholder="Domicilio" >
</div>


<div class="form-group col-xs-6">
                      <label for="sexo">Sexo</label>
                      
                     
                       <select id="sexo" name="txtSexo" class="form-control">
<option value="">--Seleccionar--</option><br>
<option value="M ">M</option>
<option value="F ">F</option>

                     
                      </select>
                 
                    
</div>





<div class="box-footer col-xs-12 ">
                   <center> <button type="input" value="Guardar Cliente" class="btn btn-primary">Guardar Clientes</button></center>
  <a href="/sist_libros/public/clientes">Listado</a>                  

</div>


</form>

</div>

 
@endsection