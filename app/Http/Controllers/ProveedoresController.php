<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
use App\Models\Stock;
use App\Models\DetalleFactura;

class ProveedoresController extends Controller
{
    private $modulo = 'PROVEEDORES';

    public function index()
    {
    	$proveedores_list = Proveedor::all ();
       return view("proveedores.index", ["proveedores_list"=> $proveedores_list, "modulo" => $this->modulo]);
    }
    public function create()
    {
    	return view("proveedores.create", ["modulo" => $this->modulo]);
    }
    public function store(Request $request)
    {
      $razon_social = $request->input ("txtRazonSocial");
      $domicilio = $request->input ("txtDomicilio");
      $email = $request->input("txtEmail");
      $celular = $request->input("txtCelular");
      $telefono_fijo = $request->input("txtTelefonoFijo");
      if ($razon_social ==""){
        $mensaje = "ERROR";
        return redirect("proveedores/create")->with("mensaje", $mensaje);
      }
     

      $proveedor = new Proveedor ();
      $proveedor->razon_social =$razon_social;
      $proveedor->domicilio =$domicilio;
      $proveedor->email =$email;
      $proveedor->celular =$celular;
      $proveedor->telefono_fijo =$telefono_fijo;
      $proveedor-> save();

      $mensaje = "Proveedor creado correctamente";
      return redirect("proveedores/create")-> with ("mensaje", $mensaje);


    }
    public function show($id)
    {
      $proveedor = Proveedor::find($id);

      return view ("proveedores.show",["proveedor"=>$proveedor,"modulo"=>$this->modulo]);
    }
    public function destroy ($id)
    {

        $proveedor = Proveedor::find($id);

        
        $libros_list = $proveedor->libros;
        
        foreach ($libros_list as $libro) {
          $stock = Stock::where("libro_id", $libro->id)->first();
          $detalleFactura = DetalleFactura::where("libro_id", $libro->id)->get();
          foreach ($detalleFactura as $detalle) {
            $detalle->delete();
          }
          if ($stock) {
              $stock->delete();
          }
          $libro->delete();
        }
        

        /*try {
            $proveedor->delete();
            $mensaje = "Proveedor eliminado correctamente!";
        } catch (Exception $e) {
           $mensaje = "No se pudo eliminar " . $e->getMessage();
        }*/

        

        
        return redirect("proveedores")->with("mensaje", $mensaje);
      

    }
    public function edit($id) 
    {
      $proveedor =Proveedor::find($id);
       return view ("proveedores.edit",["proveedor"=>$proveedor,"modulo"=>$this->modulo]);

    }
    public function update (Request $request, $id)
    {
      //obtener datos del formulario
      $razon_social = $request->input ("txtRazonSocial");
      $domicilio = $request->input ("txtDomicilio");
      $email = $request->input("txtEmail");
      $celular = $request->input("txtCelular");
      $telefono_fijo = $request->input("txtTelefonoFijo");
     
      //$persona = $request->input("cboPersona");
     

      //obtener el cliente a modificar 
      $proveedor = Proveedor::find($id);

      //asignar datos al cliente
     $proveedor->razon_social =$razon_social;
      $proveedor->domicilio =$domicilio;
      $proveedor->email =$email;
      $proveedor->celular =$celular;
      $proveedor->telefono_fijo =$telefono_fijo;
      $proveedor-> save();
     
     

        $mensaje = "Proveedor modificado correctamente";
      return redirect("proveedores/" . $id . "/edit")-> with ("mensaje", $mensaje);

    }
}








