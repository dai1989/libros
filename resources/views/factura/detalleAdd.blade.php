@extends('menuPrincipal')

@section('content')
  {{ session("mensaje") }}

  

  <form method="POST" action="{{ asset('factura/' . $factura->id . '/detalle/store') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
     <a class="btn btn-info btn-lg btn-block" href="/sist_libros/public/factura/create">Nuevo comprobante</a>

    <table class="table table-bordered">

      <tr>
      <td>Numero Factura: {{ $factura->numero }}</td>
      <td>Fecha: {{ $factura->fecha }}</td>
      </tr>

      <tr>
        <td>Tipo: {{ $factura->tipo }}</td>
        <td>
            Cliente: {{ $factura->cliente->persona->apellido }}, {{ $factura->cliente->persona->nombre }}
        </td>
      </tr> 

      <tr>
        <td>
          Libro:
          <select name="cboLibro">
            @foreach ($libros_list as $libro)
              <option value="{{ $libro->id }}">
                {{ $libro->titulo }}
              </option>
            @endforeach
          </select>
        </td>
        <td colspan="2" align="left">
          Cantidad: <input type="number" name="txtCantidad" type="submit" name="Agregar Libro">
          
          <input type="submit" name="Agregar Libro">
        </td>
        </td>
         
      </tr>

     

    </table>
  </form>

     <table class="table table-bordered">
      <tr>
           <th style="width:100px;" class="info">Codigo</th>
           <th style="width:160px;" class="info">Libro</th>
           <th style="width:160px;" class="info">Precio Unitario</th>
            <th style="width:160px;" class="info">Cantidad</th>
            <th style="width:160px;" class="info">Subtotal</th>
           <th style="width:30px;" class="info">Accion</th>

      </tr>


      @foreach ($detalle_list as $detalle)

        <tr>
          <td class="text-right">{{ $detalle->libro_id }}</td>
          <td class="text-right">{{ $detalle->libro->titulo }}</td>
          <td class="text-right">${{ $detalle->precio }}</td>
          <td class="text-right">{{ $detalle->cantidad }}</td>
          <td class="text-right">${{ $detalle->subtotal }}</td>
         

          <td>

            <a href="/sist_libros/public/factura/detalle/delete/{{$detalle->id}}"><i class='glyphicon glyphicon-trash'></i>Eliminar</a></li>
              
            </a>
          </td>
        </tr>
      @endforeach
      
    </table>
    <br>
    <table class="table table-bordered">

      <tr>
      <td  align="center" class="active">Total de Factura: ${{ $factura->total }} </td>
      
      </tr>
    </table>
    <button type="button" class="btn btn-default"><a href="/sist_libros/public/factura">Listado</a></button>
     
    

@endsection