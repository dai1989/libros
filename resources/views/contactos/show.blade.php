 @extends('menuPrincipal')
@section('content')

{{session("mensaje")}}
<center>
<h2>Contacto: {{$contacto->persona->nombre}},  {{$contacto->persona->apellido}}</h2>
<br><br>
<form method="POST" action="{{asset('contactos/' . $contacto->id)}}">
	{{method_field('DELETE')}}
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	<input type="submit" value="Eliminar">
</form>
</center>
@endsection
