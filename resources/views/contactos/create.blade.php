@extends ('menuPrincipal')
@section ('content') 
<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <center><h1 class="box-title">Agregue Contacto al Sistema</h1></center>
{{session("mensaje")}} 
                  <br><br>
                </div><!-- /.box-header -->

<div id="notificacion_resul_fanu"></div> 



<form  method="post"  action="{{ asset('contactos') }}" class="form-horizontal form_entrada" >                
  
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">              


<div class="box-body col-xs-12">
<div class="form-group col-xs-6">
                      <label for="email">Email*</label>
                      <input type="text" class="form-control" id="email" name="txtEmail" placeholder="email" >
</div>
<div class="form-group col-xs-6">
                      <label for="celular">Celular*</label>
                      <input type="text" class="form-control" id="celular" name="txtCelular" placeholder="celular" >
</div>
<div class="form-group col-xs-6">
                      <label for="telefono_fijo">Telefono Fijo*</label>
                      <input type="text" class="form-control" id="telefono_fijo" name="txtTelefonoFijo" placeholder="Documento" >
</div>



<div class="form-group col-xs-6">
                      <label for="cboPersona">Personas</label>
                      <select  name="cboPersona" class="form-control">

    <option value="">--Seleccionar--</option><br>
  @foreach ($personas_list as $persona)
    <option value="{{ $persona->id }}">{{ $persona->nombre }}</option>
  @endforeach
  </select><br>
                      
                      </select>
                 
                    
</div>





<div class="box-footer col-xs-12 ">
                   <center> <button type="input" value="Guardar Contacto" class="btn btn-primary">Guardar Contacto</button></center>
  <a href="/sist_libros/public/contactos">Listado</a>                  

</div>


</form>

</div>

 
@endsection