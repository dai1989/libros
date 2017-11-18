@extends('menuPrincipal')

@section('content')
  {{ session("mensaje") }}

  

  <form method="POST" action="{{ asset('factura/' . $factura->id . '/detalle/store') }}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    

    <table class="display table table-hover" cellspacing="0" width="100%">
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
        <td>
          Cantidad: <input type="number" name="txtCantidad">
        </td>
      </tr>

      <tr>
        <td colspan="2" align="right">
          <input type="submit" name="Agregar Libro">
        </td>
      </tr>

    </table>
  </form>

    <table class="display table table-hover" cellspacing="0" width="100%">
      <tr>
           <th style="width:100px;" class="text-right">Codigo</th>
           <th style="width:160px;" class="text-right">Libro</th>
           <th style="width:160px;" class="text-right">Precio Unitario</th>
            <th style="width:160px;" class="text-right">Cantidad</th>
            <th style="width:160px;" class="text-right">Subtotal</th>
            <th style="width:30px;" class="text-right">Accion</th>

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

    Total a pagar: ${{ $factura->total }}

@endsection