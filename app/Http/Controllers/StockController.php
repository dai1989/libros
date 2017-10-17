<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;
use App\Models\Stock;


class StockController extends Controller
{
    public function index()
    {
      $stock_list = Stock::all ();
       return view("stock.index", ["stock_list"=> $stock_list]);
    }
    public function create()
    {
      $libros_list = Libros::all();

      return view("stock.create", ["libros_list"=>$libros_list]);
    }
    public function store(Request $request)
    {
      $cantidad_actual = $request->input ("txtCantidadActual");
      $cantidad_minima = $request->input ("txtCantidadMinima");
     
      $libros = $request->input("cboLibros");

      $stock = new Stock ();
      $stock->libro_id = $libros;
      $stock->cantidad_actual =$cantidad_actual;
      $stock->cantidad_minima =$cantidad_minima;
     
      
      $stock-> save();
        $mensaje = "Stock actualizado ";
      return redirect("stock/create")-> with ("mensaje", $mensaje);


    }
    public function show($id)
    {
      $stock = Stock::find($id);

      return view ("stock.show",["stock"=>$stock]);
    }
    public function destroy ($id)
    {
        $stock = Stock::find($id);
        
        $stock->delete();
        

        $mensaje = "stock eliminado!";
        return redirect("stock")->with("mensaje", $mensaje);

    }
     public function edit($id) 
    {
      $stock =Stock::find($id);
       $libros_list = Libros::all();  
       return view ("stock.edit",["stock"=>$stock,"libros_list" => $libros_list]);

    }
    public function update (Request $request, $id)
    {
      //obtener datos del formulario
      $cantidad_actual = $request->input ("txtCantidadActual");
      $cantidad_minima = $request->input ("txtCantidadMinima");
      $libros = $request->input("cboLibros");
     
      
     

      $stock = Stock::find($id);
       $stock->libro_id = $libros;
      $stock->cantidad_actual =$cantidad_actual;
      $stock->cantidad_minima =$cantidad_minima;
      $stock-> save();

     
    
     

        $mensaje = "Stock modificado correctamente";
      return redirect("stock/" . $id . "/edit")-> with ("mensaje", $mensaje);

    }
}





