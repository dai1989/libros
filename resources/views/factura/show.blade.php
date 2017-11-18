 @extends('menuPrincipal')
@section('content')

{{session("mensaje")}}
<center>
<h2>Factura: {{$factura->numero}},  {{$factura->cuit}}</h2>
<br><br>
<form method="POST" action="{{asset('factura/' . $factura->id)}}">
	{{method_field('DELETE')}}
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	<input type="submit" value="Eliminar">
</form>
</center>
@endsection