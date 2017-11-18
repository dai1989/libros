@extends ('menuPrincipal')
@section ('content')
{{session("mensaje")}} 
  <center> <h1>Ingrese Nuevo Libro</h1> </center>              
<div id="notificacion_resul_fanu"></div>  
<form  method="post"  action="{{ asset('libros') }}" class="form-horizontal form_entrada" >                
  
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">              

<div class="box-body col-xs-12">
<div class="form-group col-xs-6">
                      <label for="titulo">Titulo*</label>
                      <input type="text" class="form-control" id="titulo" name="txtTitulo" placeholder="titulo..." >
</div>
<div class="form-group col-xs-6">
                      <label for="editorial">Editorial*</label>
                      <input type="text" class="form-control" id="editorial" name="txtEditorial" placeholder="editorial....." >
</div>
<div class="form-group col-xs-6">
                      <label for="autor">Autor*</label>
                      <input type="text" class="form-control" id="autor" name="txtAutor" placeholder="autor..." >
</div>
<div class="form-group col-xs-6">
                      <label for="fecha_edicion">Fecha de Edicion</label><br>
                      <input type="date" class="form-control" id="fecha_edicion" name="txtFechaEdicion" placeholder="Fecha de Edicion" >
</div>
<div class="form-group col-xs-6">
                      <label for="tipo_tapa">Tipo de tapa</label>
                      
                     
                       <select id="tipo_tapa" name="txtTipoTapa" class="form-control">
<option value="">--Seleccione tipo de tapa--</option><br>
<option value="Dura">Dura</option>
<option value="Blanda">Blanda</option>

                     
                      </select>
                 
                    
</div>
<div class="form-group col-xs-6">
                      <label for="genero">Genero</label>
                      
                     
                       <select id="genero" name="txtGenero" class="form-control">
<option value="">--Seleccione Genero--</option><br>
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


                     
                      </select>
                 
                    
</div>
<div class="form-group col-xs-6">
                      <label for="precio">Precio*</label>
                      <input type="text" class="form-control" id="precio" name="txtPrecio" placeholder="precio..." >
</div>
<div class="form-group col-xs-6">
                      <label for="isbn">ISBN*</label>
                      <input type="text" class="form-control" id="isbn" name="txtIsbn" placeholder="isbn..." >
</div>
<div class="form-group col-xs-6">
                      <label for="cboProveedor">Proveedores</label>
                      <select  name="cboProveedor" class="form-control">

    <option value="">--Seleccionar--</option><br>
  @foreach ($proveedores_list as $proveedor)
    <option value="{{ $proveedor->id }}">{{ $proveedor->razon_social }}</option>
  @endforeach
  </select><br>
                      
                      </select>
                 
  </div>
<div class="box-footer col-xs-12 ">
                   <center> <button type="input" value="Guardar Libro" class="btn btn-primary">Guardar Libro</button> <a href="/sist_libros/public/libros">Listado</a> </center>

                                   

</div>
</form>
 

 
@endsection