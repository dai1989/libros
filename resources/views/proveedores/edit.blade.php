@extends ('menuPrincipal')
@section ('content')
<div class="box box-primary col-xs-12">
                
                <div class="box-header">
                  <center><h1 class="box-title">Modifique Proveedor</h1></center>
{{session("mensaje")}} 
                  <br><br>
                </div><!-- /.box-header -->

<div id="notificacion_resul_fanu"></div>



<form method="POST" action="{{ asset('proveedores/' . $proveedor->id) }}">
  <input type="hidden" name="_method" value="PUT">
  <input type="hidden" name="_token" value="{{ csrf_token()}}">              

<div class="box-body col-xs-12">
<div class="form-group col-xs-6">
                      <label for="razon_social">Razon Social*</label>
                      <input type="text" class="form-control" id="razon_social" name="txtRazonSocial" value="{{$proveedor->razon_social}}" placeholder="razon social.." >
</div>
<div class="form-group col-xs-6">
                      <label for="domicilio">Domicilio*</label>
                      <input type="text" class="form-control" id="domicilio" name="txtDomicilio" value="{{$proveedor->domicilio}}"  placeholder="domicilio" >
</div>
<div class="form-group col-xs-6">
                      <label for="email">Email*</label>
                      <input type="text" class="form-control" id="email" name="txtEmail" value="{{$proveedor->email}}"  placeholder="email" >
</div>
<div class="form-group col-xs-6">
                      <label for="celular">Celular*</label><br>
                      <input type="text" class="form-control" id="celular" name="txtCelular" value="{{$proveedor->celular}}" placeholder="celular" >
</div>
<div class="form-group col-xs-6">
                      <label for="telefono_fijo">Telefono Fijo</label><br>
                      <input type="text" class="form-control" id="telefono_fijo" name="txtTelefonoFijo" value="{{$proveedor->telefono_fijo}}" placeholder="telefono...." >
</div>

<div class="box-footer col-xs-12 ">
                   <center> <button type="input" value="Modificar Datos" class="btn btn-primary">Modificar Datos</button></center>
  <a href="/sist_libros/public/proveedores">Listado</a>                  

</div>


</form>

</div>

 
@endsection