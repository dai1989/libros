Contacto: {{$contacto->email}},  {{$contacto->celular}}
<br><br>
<form method="POST" action="{{asset('contactos/' . $contacto->id)}}">
	{{method_field('DELETE')}}
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	<input type="submit" value="Eliminar">
</form>

