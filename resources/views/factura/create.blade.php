@extends ('menuPrincipal')
@section ('content') 
<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <center><h1 class="box-title">Nueva Factura</h1></center>
{{session("mensaje")}} 
                  <br><br>
                </div><!-- /.box-header -->

<div id="notificacion_resul_fanu"></div> 



<form  method="post"  action="{{ asset('factura') }}" class="form-horizontal form_entrada" >                
  
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">              


<div class="box-body col-xs-12">
<div class="form-group col-xs-6">
                      <label for="numero">Numero*</label>
                      <input type="text" class="form-control" id="numero" name="txtNumero" placeholder="numero.." >
</div>
<div class="form-group col-xs-6">
                      <label for="cuit">Cuit*</label>
                      <input type="text" class="form-control" id="cuit" name="txtCuit" placeholder="cuit..." >
</div>

<div class="form-group col-xs-6">
                      <label for="fecha">Fecha*</label>
                      <input type="date" class="form-control" id="fecha" name="txtFecha" placeholder="fecha..." >
</div>

<div class="form-group col-xs-6">
                      <label for="txtTipo">Tipo</label>
                      <select  name="txtTipo" class="form-control">

    <option value="">--Seleccionar--</option><br>
 <option value="">-- Selecciona Tipo de Factura --</option><br>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
                      
                      </select>
                 
                    
</div>
<div class="form-group col-xs-6">
                      <label for="cboClientes">Clientes</label>
                      <select  name="cboClientes" class="form-control">

    <option value="">--Seleccionar--</option><br>
  @foreach ($clientes_list as $cliente)
    <option value="{{ $cliente->id }}">{{$cliente->persona->nombre   }}</option>
  @endforeach
  </select><br>
                      
                      </select>
                 
                    
</div>





<div class="box-footer col-xs-12 ">
                   <center> <button type="input" value="Guardar Factura" class="btn btn-primary">Guardar Factura</button></center>
  <a href="/sist_libros/public/factura">Listado</a>                  

</div>


</form>

</div>

 
@endsection