<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleFactura;
use App\Models\Factura;
use App\Models\Libros;

class DetalleFacturaController extends Controller
{
    public function index()
    {
      $detalle_facturas_list = DetalleFactura::all ();
       return view("detalle_factura.index", ["detalle_facturas_list"=> $detalle_facturas_list]);
    }
    public function create()
    {
      $facturas_list = Factura::all();

      return view("detalle_factura.create", ["facturas_list"=>$facturas_list]);
    }
    public function store(Request $request)
    {
      $cantidad = $request->input ("txtCantidad");
      $precio = $request->input ("txtPrecio");
      $factura = $request->input("cboFactura");
      $libro= $request->input("cboLibro");

      $detalle_factura = new DetalleFactura ();
      $detalle_factura->cantidad =$cantidad;
      $detalle_factura->precio =$precio;
     
      $detalle_factura->factura_id = $factura;
      $detalle_factura->libro_id=$libro;
      $detalle_factura-> save();
        $mensaje = "Ingreso de libro creado con exito";
      return redirect("detalle_factura/create")-> with ("mensaje", $mensaje);


    }
    public function show($id)
    {
      $detalle_factura = DetalleFactura::find($id);

      return view ("detalle_factura.show",["detalle_factura"=>$detalle_factura]);
    }
    public function destroy ($id)
    {
        $detalle_factura = DetalleFactura::find($id);
        
        $detalle_factura->delete();
        

        $mensaje = "Libro eliminado correctamente!";
        return redirect("detalle_factura")->with("mensaje", $mensaje);

    }
}


