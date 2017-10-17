<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\Cliente;

class FacturaController extends Controller
{
    public function index()
    {
      $facturas_list = Factura::all ();
       return view("factura.index", ["facturas_list"=> $facturas_list]);
    }
    public function create()
    {
      $clientes_list = Cliente::all();

      return view("factura.create", ["clientes_list"=>$clientes_list]);
    }
    public function store(Request $request)
    {
      $fecha = $request->input ("txtFecha");
      $tipo = $request->input ("txtTipo");
      $numero = $request->input("txtNumero");
      $cuit = $request->input ("txtCuit");
     
      $clientes = $request->input("cboClientes");

      $factura = new Factura ();
      $factura->cliente_id = $clientes;
      $factura->fecha =$fecha;
      $factura->tipo =$tipo;
      $factura->numero =$numero;
      $factura->cuit=$cuit;
      $factura-> save();

        $mensaje = "factura agregada ";
      return redirect("factura/create")-> with ("mensaje", $mensaje);


    }
    public function show($id)
    {
      $factura = Factura::find($id);

      return view ("factura.show",["factura"=>$factura]);
    }
    public function destroy ($id)
    {
        $factura = Factura::find($id);
        
        $factura->delete();
        

        $mensaje = "factura eliminado!";
        return redirect("factura")->with("mensaje", $mensaje);

    }
    public function edit($id) 
    {
      $factura =Factura::find($id);
      $clientes_list = Cliente::all();
       return view ("factura.edit",["factura"=>$factura,"clientes_list"=>$clientes_list]);

    }
    public function update (Request $request, $id)
    {
      //obtener datos del formulario
      $fecha = $request->input ("txtFecha");
      $tipo = $request->input ("txtTipo");
      $numero = $request->input("txtNumero");
      $cuit = $request->input ("txtCuit");
      $clientes = $request->input("cboClientes");
      

      //obtener el cliente a modificar
      $factura = Factura::find($id);
       $factura->cliente_id = $clientes;
      $factura->fecha =$fecha;
      $factura->tipo =$tipo;
      $factura->numero =$numero;
      $factura->cuit=$cuit;
      $factura-> save();
      
      //$cliente->save();

        $mensaje = "Factura modificado correctamente";
      return redirect("factura/" . $id . "/edit")-> with ("mensaje", $mensaje);

    }
}






