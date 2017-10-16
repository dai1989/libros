Factura: {{$factura->numero}},  {{$factura->cuit}}
<br><br>
<form method="POST" action="{{asset('factura/' . $factura->id)}}">
	{{method_field('DELETE')}}
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	<input type="submit" value="Eliminar">
</form>