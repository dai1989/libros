@extends('menuPrincipal')
@section('content')  
<h2>Libros: {{$libros->editorial}},  {{$libros->titulo}}</h2>
<br><br>
<center>
<form method="POST" action="{{asset('libros/' . $libros->id)}}">
	{{method_field('DELETE')}}
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
	<input type="submit" value="Eliminar">
</form> 
</center>
@endsection 