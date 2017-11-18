<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Factura;
use App\Models\Libros;
use App\Models\DetalleFactura;
use App\Models\Stock;

 
class FacturaController extends Controller
{
    private $modulo = 'FACTURAS';
    public function index()
    {
        $facturas_list = Factura::all();

        foreach ($facturas_list as $factura) {
            $factura->total = $factura->obtenerTotal();
        }


        return view('factura.index', ['facturas_list'=>$facturas_list,'modulo'=>$this->modulo]);
    }

    public function create()
    {
      $clientes_list = Cliente::all();
      return view('factura.create', ['clientes_list'=>$clientes_list,'modulo'=>$this->modulo]);
    }

    public function store(Request $request)
    {
        // obtener datos enviados desde formulario
        $numeroFactura = $request->input("txtNumero");
        $cuit=$request->input("txtCuit");
        $fecha = $request->input("txtFecha");
        $tipo = $request->input("txtTipo");
        $cliente = $request->input("cboClientes");

        // crear nueva factura
        $factura = new Factura();
        $factura->numero = $numeroFactura;
        $factura->cuit = $cuit;
        $factura->tipo = $tipo;
        $factura->fecha = $fecha;
        $factura->cliente_id = $cliente;
        $factura->save();

        $mensaje = "FACTURA CREADA CORRECTAMENTE";
        //return redirect("facturas/create")->with("mensaje", $mensaje);
        return redirect("factura/" . $factura->id . "/detalle/add")->with("mensaje", $mensaje);
    }

    public function detalleadd($id)
    {
        $factura = Factura::find($id);
        $factura->total = $factura->obtenerTotal();

        $libros_list = Libros::all();
        $detalle_list = DetalleFactura::where('factura_id', $id)->get();

        foreach ($detalle_list as $detalle) {
            $detalle->subtotal = $detalle->obtenerSubTotal();
        }

        return view(
            'factura.detalleAdd',
            ['factura'=>$factura, 'libros_list'=>$libros_list, 'detalle_list'=>$detalle_list,'modulo'=>$this->modulo]
        );
    }

    public function detalleaddstore(Request $request, $factura_id)
    {
        $libro_id = $request->input("cboLibro");
        $cantidad = $request->input("txtCantidad");

        $stock = Stock::where('libro_id', $libro_id)->first();

        if ($cantidad > $stock->cantidad_actual) {
            $mensaje = "NO CUENTA CON LA CANTIDAD NECESARIA";
            return redirect("factura/" . $factura_id . "/detalle/add")->with("mensaje", $mensaje);
        }

        $stock->cantidad_actual = $stock->cantidad_actual - $cantidad;
        $stock->save();

        $libros = Libros::find($libro_id);

        $detalle = new DetalleFactura();
        $detalle->factura_id = $factura_id;
        $detalle->libro_id = $libro_id;
        $detalle->cantidad = $cantidad;
        $detalle->precio = $libros->precio;
        $detalle->save();

        $mensaje = "LIBRO AGREGADO CORRECTAMENTE.";
        return redirect("factura/" . $factura_id . "/detalle/add")->with("mensaje", $mensaje);
    }

    public function detalledelete($detalle_id)
    {
        $detalle = DetalleFactura::find($detalle_id);
        $factura_id = $detalle->factura_id;
        $detalle->delete();

        $mensaje = "ITEM BORRADO.";
        return redirect("factura/" . $factura_id . "/detalle/add")->with("mensaje", $mensaje);
    }
}








