Stock: {{$stock->cantidad_actual}},  {{$stock->cantidad_minima}}
<br><br>
<form method="POST" action="{{asset('stock/' . $stock->id)}}">
	{{method_field('DELETE')}}
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	<input type="submit" value="Eliminar">
</form>