<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;
use App\Models\Proveedor;
use App\Models\Stock;


class LibrosController extends Controller
{
    private $modulo = 'LIBROS';
    public function index()
    {
      $libros_list = Libros::all ();
       return view("libros.index", ["libros_list"=> $libros_list, "modulo" => $this->modulo]);
    }
    public function create()
    {
      $proveedores_list = Proveedor::all();

      return view("libros.create", ["proveedores_list"=>$proveedores_list,"modulo" => $this->modulo]);
    }
    public function store(Request $request)
    {
      $titulo = $request->input ("txtTitulo");
      $editorial = $request->input ("txtEditorial");
      $autor = $request->input("txtAutor");
      $fecha_edicion = $request->input("txtFechaEdicion");
      $tipo_tapa = $request->input("txtTipoTapa");
      $genero = $request->input("txtGenero");
      $precio = $request->input("txtPrecio");
      $isbn = $request->input("txtIsbn");
      $proveedor = $request->input("cboProveedor");

      $libro = new Libros ();
      $libro->titulo =$titulo;
      $libro->editorial =$editorial;
      $libro->autor =$autor;
      $libro->fecha_edicion =$fecha_edicion;
      $libro->tipo_tapa =$tipo_tapa;
      $libro->genero =$genero;
      $libro->precio =$precio;
      $libro->isbn =$isbn;
      $libro->proveedor_id = $proveedor;
      $libro-> save();

      //crear stock del libro
      $stock = new Stock();
      $stock->libro_id = $libro->id;
      //$stock->cantidad_actual = 0;
      //$stock->cantidad_minima = 0;
      $stock->save();


        $mensaje = "Ingreso de libro creado con exito";
      return redirect("libros/create")-> with ("mensaje", $mensaje);


    }
    public function show($id)
    {
      $libros = Libros::find($id);

      return view ("libros.show",["libros"=>$libros,"modulo"=>$this->modulo]);
    }
    public function destroy ($id)
    {
        $libros = Libros::find($id);
        
        $libros->delete();
        

        $mensaje = "Libro eliminado correctamente!";
        return redirect("libros")->with("mensaje", $mensaje);

    }
     public function edit($id) 
    {
      $libros =Libros::find($id);
      $proveedores_list = Proveedor::all();
       return view ("libros.edit",["libros"=>$libros,"proveedores_list"=>$proveedores_list,"modulo"=>$this->modulo]);

    }
    public function update (Request $request, $id)
    {
      //obtener datos del formulario
      $titulo = $request->input ("txtTitulo");
      $editorial = $request->input ("txtEditorial");
      $autor = $request->input("txtAutor");
      $fecha_edicion = $request->input("txtFechaEdicion");
      $tipo_tapa = $request->input("txtTipoTapa");
      $genero = $request->input("txtGenero");
      $precio = $request->input("txtPrecio");
      $isbn = $request->input("txtIsbn");
      $proveedor = $request->input("cboProveedor");
      

      //obtener el cliente a modificar
      $libros = Libros::find($id);

      
      $libros->titulo =$titulo;
      $libros->editorial =$editorial;
      $libros->autor =$autor;
      $libros->fecha_edicion =$fecha_edicion;
      $libros->tipo_tapa =$tipo_tapa;
      $libros->genero =$genero;
      $libros->precio =$precio;
      $libros->isbn =$isbn;
      $libros->proveedor_id = $proveedor;
      $libros-> save();
     
      //$cliente->save();

        $mensaje = "Libro modificado correctamente";
      return redirect("libros/" . $id . "/edit")-> with ("mensaje", $mensaje);

    }
}





