<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Cliente;
class ClienteController extends Controller
{
    private $modulo = 'CLIENTES';
    public function index()
    {
    	$clientes_list = Cliente::all ();
       return view("clientes.index", ["clientes_list"=> $clientes_list, "modulo" => $this->modulo]);
    }
    public function create()
    {
    	return view("clientes.create", ["modulo" => $this->modulo]);
    }
    public function store(Request $request)
    {
      $nombre = $request->input ("txtNombre");
      $apellido = $request->input ("txtApellido");
      $dni = $request->input("txtDNI");
      $fechaNacimiento = $request->input("txtFechaNacimiento");
      $domicilio = $request->input("txtDomicilio");
      $sexo = $request->input("txtSexo");

      $persona = new Persona ();
      $persona->nombre =$nombre;
      $persona->apellido =$apellido;
      $persona->dni =$dni;
      $persona->fecha_nacimiento =$fechaNacimiento;
      $persona->domicilio =$domicilio;
      $persona->sexo = $sexo;
      $persona-> save();

      $cliente = new Cliente ();
      $cliente->persona_id= $persona->id;
      $cliente->save();

      $mensaje = "Cliente creado correctamente";
      return redirect("clientes/create")-> with ("mensaje", $mensaje);
     


    }
    public function show($id)
    {
      $cliente = Cliente::find($id);

      return view ("clientes.show",["cliente"=>$cliente,"modulo"=>$this->modulo]);
    }
    public function destroy ($id)
    {
        $cliente = Cliente::find($id);
        $persona = $cliente->persona;
        $cliente->delete();
        $persona->delete();

        $mensaje = "Cliente eliminado correctamente!";
        return redirect("clientes")->with("mensaje", $mensaje);
        
    }
    public function edit($id) 
    {
      $cliente =Cliente::find($id);
       return view ("clientes.edit",["cliente"=>$cliente,"modulo"=>$this->modulo]);

    }
    public function update (Request $request, $id)
    {
      //obtener datos del formulario
      $nombre = $request->input ("txtNombre");
      $apellido = $request->input ("txtApellido");
      $dni = $request->input("txtDNI");
      $fechaNacimiento = $request->input("txtFechaNacimiento");
      $domicilio = $request->input("txtDomicilio");
      $sexo = $request->input("txtSexo");

      //obtener el cliente a modificar
      $cliente = Cliente::find($id);

      //asignar datos al cliente
      $cliente->persona->nombre=$nombre;
      $cliente->persona->apellido=$apellido;
      $cliente->persona->dni=$dni;
      $cliente->persona->fecha_nacimiento=$fechaNacimiento;
      $cliente->persona->domicilio=$domicilio;
      $cliente->persona->sexo=$sexo;
      $cliente->persona->save();
      //$cliente->save();

        $mensaje = "Cliente modificado correctamente";
      return redirect("clientes/" . $id . "/edit")-> with ("mensaje", $mensaje);

    }
}

