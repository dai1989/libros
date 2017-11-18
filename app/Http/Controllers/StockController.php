<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Stock;


class StockController extends Controller
{
     private $modulo = 'STOCK';
    public function index()
    {
      $stock_list = Stock::all ();
       return view("stock.index", ["stock_list"=> $stock_list, "modulo"=> $this->modulo ]);
    }
     public function edit($id) 
    {
      $stock =Stock::find($id);
        
       return view ("stock.edit",["stock"=>$stock,"modulo"=>$this->modulo]);

    }
    public function update (Request $request, $id)
    {
      //obtener datos del formulario
      $cantidad_actual = $request->input ("txtCantidadActual");
      $cantidad_minima = $request->input ("txtCantidadMinima");
      //validacion
      if ($cantidad_actual < $cantidad_minima){
        $mensaje = "Cantidad actual debe ser mayor o igual a minima";
        return redirect ("stock/" . $id . "/edit")->with ("mensaje", $mensaje);
      }
      
      $stock = Stock::find($id);
      //$stock->libro_id = $libros;
      $stock->cantidad_actual =$cantidad_actual;
      $stock->cantidad_minima =$cantidad_minima;
      $stock-> save();

     
    


        $mensaje = "¡¡Stock actualizado correctamente!!";
      return redirect("stock/" . $id . "/edit")-> with ("mensaje", $mensaje);

    }
}
  
    