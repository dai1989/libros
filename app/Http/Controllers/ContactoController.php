<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Models\Persona;

class ContactoController extends Controller
{
    public function index()
    {
      $contactos_list = Contacto::all ();
       return view("contactos.index", ["contactos_list"=> $contactos_list]);
    }
    public function create()
    {
      $personas_list = Persona::all();

      return view("contactos.create", ["personas_list"=>$personas_list]);
    }
    public function store(Request $request)
    {
      $email = $request->input ("txtEmail");
      $celular = $request->input ("txtCelular");
      $telefono_fijo = $request->input("txtTelefonoFijo");
      $persona = $request->input("cboPersona");

      $contacto = new Contacto ();
      $contacto->email =$email;
      $contacto->celular =$celular;
      $contacto->telefono_fijo =$telefono_fijo;
     
      $contacto->persona_id = $persona;
      $contacto-> save();
        $mensaje = "Ingreso de contacto creado con exito";
      return redirect("contactos/create")-> with ("mensaje", $mensaje);


    }
    public function show ($id)
    {
      $contacto = Contacto::find($id);

      return view ("contactos.show",["contacto"=>$contacto]);
    }
    public function destroy ($id)
    {
        $contacto = Contacto::find($id);
        
        $contacto->delete();
        

        $mensaje = "Contacto eliminado correctamente!";
        return redirect("contactos")->with("mensaje", $mensaje);

    }
     public function edit($id) 
    {
      $contacto =Contacto::find($id);
       return view ("contactos.edit",["contacto"=>$contacto]);

    }
    public function update (Request $request, $id)
    {
      //obtener datos del formulario
      $email = $request->input ("txtEmail");
      $celular = $request->input ("txtCelular");
      $telefono_fijo = $request->input("txtTelefonoFijo");
      //$persona = $request->input("cboPersona");
     

      //obtener el cliente a modificar 
      $contacto = Contacto::find($id);

      //asignar datos al cliente
      $contacto->email =$email;
      $contacto->celular =$celular;
      $contacto->telefono_fijo =$telefono_fijo;
      //$contacto->persona_id = $persona;
      $contacto->save();
     
      //$cliente->save();

        $mensaje = "Contacto modificado correctamente";
      return redirect("contactos/" . $id . "/edit")-> with ("mensaje", $mensaje);

    }
}




