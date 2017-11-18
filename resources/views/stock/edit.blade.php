 @extends('menuPrincipal')
@section('content')
<center><h1>Modifique Stock</h1></center>
 {{session("mensaje")}}
<br>

<form method="POST" action="{{ asset('stock/' . $stock->id) }}">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	<div class="box-body col-xs-12">
<div class="form-group col-xs-6">
                      <label for="cantidad_actual">Cantidad Actual*</label>
                      <input type="text" class="form-control" id="cantidad_actual" name="txtCantidadActual" value="{{$stock->cantidad_actual}}" placeholder="cantidad actual" >
</div>
<div class="form-group col-xs-6">
                      <label for="cantidad_minima">Cantidad Minima*</label>
                      <input type="text" class="form-control" id="celular" name="txtCantidadMinima" value="{{$stock->cantidad_minima}}" placeholder="Cantidad minima..." >
</div>
	

	<h2>Libro:{{ $stock->libro->titulo }}</h2><br>
	
	
	<div class="box-footer col-xs-12 ">
                   <center> <button type="input" value="Modificar Datos" class="btn btn-primary">Modificar Datos</button></center>
                    

</div>


	


</form>
<br><br>

<a href="/sist_libros/public/stock">Listado</a> 
@endsection