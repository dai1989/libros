@extends ('menuPrincipal')
@section ('content')
<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <center><h1 class="box-title">Detalle de factura</h1></center>
{{session("mensaje")}} 
                  <br><br>
                </div><!-- /.box-header -->

<div id="notificacion_resul_fanu"></div> 



<form  method="post"  action="{{ asset('detalle_factura') }}" class="form-horizontal form_entrada" >                
  
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">              


<div class="box-body col-xs-12">
<div class="form-group col-xs-6">
                      <label for="cantidad">Cantidad*</label>
                      <input type="text" class="form-control" id="cantidad" name="txtCantidad" placeholder="cantidad...." >
</div>
<div class="form-group col-xs-6">
                      <label for="precio">Precio*</label>
                      <input type="text" class="form-control" id="precio" name="txtPrecio" placeholder="precio...." >
</div>
<div class="form-group col-xs-6">
                      <label for="cboFactura">Factura</label>
                      <select  name="cboFactura" class="form-control">

    <option value="">--Seleccionar--</option><br>
  @foreach ($facturas_list as $factura)
    <option value="{{ $factura->id }}">{{ $factura->numero }}</option>
  @endforeach
  </select><br>
                      
                      </select>
                 
                    
</div>

<div class="form-group col-xs-6">
                      <label for="cboLibro">Libros</label>
                      <select  name="cboPersona" class="form-control">

    <option value="">--Seleccionar--</option><br>
  @foreach ($libros_list as $libro)
    <option value="{{ $libro->id }}">{{ $libro->titulo }}</option>
  @endforeach
  </select><br>
                      
                      </select>
                 
                    
</div>





<div class="box-footer col-xs-12 ">
                   <center> <button type="input" value="Guardar Detalle" class="btn btn-primary">Guardar Detalle</button></center>
  <a href="/sist_libros/public/detalle_factura">Listado</a>                  

</div>


</form>

</div>

 
@endsection