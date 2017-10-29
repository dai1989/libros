@extends ('menuPrincipal')
@section ('content')
<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <center><h1 class="box-title">Modifique Cliente Del Sistema</h1></center>
{{session("mensaje")}} 
                  <br><br>
                </div><!-- /.box-header -->

<div id="notificacion_resul_fanu"></div>



<form  method="post"  action="{{ asset('clientes/' . $cliente->id) }}" class="form-horizontal form_entrada" >                
  <input type="hidden" name="_method" value="PUT">
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">              


<div class="box-body col-xs-12">
<div class="form-group col-xs-6">
                      <label for="nombre">Nombres*</label>
                      <input type="text" class="form-control" id="nombre" name="txtNombre" value="{{$cliente->persona->nombre}}" placeholder="Nombre" >
</div>
<div class="form-group col-xs-6">
                      <label for="apellido">Apellido*</label>
                      <input type="text" class="form-control" id="apellido" name="txtApellido" value="{{$cliente->persona->apellido}}" placeholder="Apellido" >
</div>
<div class="form-group col-xs-6">
                      <label for="dni">DNI*</label>
                      <input type="text" class="form-control" id="dni" name="txtDNI" value="{{$cliente->persona->dni}}" placeholder="Documento" >
</div>
<div class="form-group col-xs-6">
                      <label for="fecha_nacimiento">Fecha de Nacimiento</label><br>
                      <input type="date" class="form-control" id="fecha_nacimiento" name="txtFechaNacimiento" value="{{$cliente->persona->fecha_nacimiento}}" placeholder="Fecha de Nacimiento" >
</div>
<div class="form-group col-xs-6">
                      <label for="domicilio">Domicilio</label><br>
                      <input type="text" class="form-control" id="domicilio" name="txtDomicilio" value="{{$cliente->persona->domicilio}}" placeholder="Domicilio" >
</div>


<div class="form-group col-xs-6">
                      <label for="sexo">Sexo</label>
                      
                     
                       <select id="sexo" name="txtSexo" value="{{$cliente->persona->sexo}}" class="form-control">
<option value="">--Seleccionar--</option><br>
<option value="M ">M</option>
<option value="F ">F</option>

                     
                      </select>
                 
                    
</div>





<div class="box-footer col-xs-12 ">
                   <center> <button type="input" value="Modificar Datos" class="btn btn-primary">Modificar Datos</button></center>
  <a href="/sist_libros/public/clientes">Listado</a>                  

</div>


</form>

</div>

 
@endsection