 @extends('menuPrincipal')
@section('content')

{{session("mensaje")}}
<center>
<h2>Clientes: {{$cliente->persona->nombre}},  {{$cliente->persona->apellido}}</h2>

<br><br>
<form method="POST" action="{{asset('clientes/' . $cliente->id)}}">
	{{method_field('DELETE')}}
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	<input type="submit" value="Eliminar">
</form>
</center>
@endsection
