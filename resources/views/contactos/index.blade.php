 @extends('menuPrincipal')
@section('content')

{{session("mensaje")}}
<center>
 <center><h1 class="box-title">Lista de Contactos</h1></center>		
<a href="contactos/create">Nuevo Contacto</a>
<br><br>
<table class="display table table-hover" cellspacing="0" width="100%">
       
        <thead>
            <tr>
             
                <th>Cliente</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Telefono Fijo</th>
                <th>Acciones</th>
            </tr>
        </thead>


	@foreach ($contactos_list as $contacto)

    <tr>
    <th>{{$contacto->persona->nombre}}</th>	
	<th>{{ $contacto->email}}</th>
	<th>{{ $contacto->celular}}</th>
	<th>{{ $contacto->telefono_fijo}}</th>
	<td> 
		<a href="contactos/{{$contacto->id}}/edit"><i class='glyphicon glyphicon-edit'></i>Modificar</a></li> - 
		
		<a href="contactos/{{$contacto->id}}"><i class='glyphicon glyphicon-trash'></i>Eliminar</a></li>
		
</td>
	
	</tr>
	@endforeach
	
</table>
</center>
@endsection