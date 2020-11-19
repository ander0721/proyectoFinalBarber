<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;

use App\Producto;
use App\Marca;
use App\Tipo;
use App\Barberia;

use Illuminate\Http\Request;

class ProductoController extends Controller
{

     public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Producto::all();

        }
        
        $data = Producto::all();
        $user_id = auth()->id();
        $barberias = Barberia::all()->where('user_id', '=' ,$user_id );

        return view('productos.index')
        ->with('data',$data)
        ->with('barberias',$barberias);
    }

   
    public function store(Request $request)
    {                                     
                               
        $user = auth()->id();
        $nombreB = $request->input("nombreB");                                                                              
        $barberia = Barberia::all()->where("nombreB", '=', $nombreB);  

        Marca::updateOrCreate(['idM' => $request->marca_id],
                              ['nombreM' => $request->nombreM]);   

        Tipo::updateOrCreate(['idT' => $request->tipo_id],
                              ['nombreT' => $request->nombreT]);   
        
        $producto = Producto::updateOrCreate(['idP' => $request->producto_id]);
        $producto->nombreP = $request->input("nombreP");
        $producto->precioP = $request->input("precioP");
        $producto->tipo_id = Tipo::latest('idT')->first()->idT;
        $producto->marca_id = Marca::latest('idM')->first()->idM;
        $producto->asignarBarberia($barberia);

        $producto->save();

     
        return response()->json(['success'=>'Item saved successfully.']);

        
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
  /*  public function show(Marca $marca)
    {
        return view('marcas.show',compact('marca'));
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
   
    public function edit($id)
    {
        $producto = Producto::find($id);
        return response()->json($producto);
    }


    public function destroy($id)
    {
       Producto::find($id)->delete();
     
       return response()->json(['success'=>'Producto deleted successfully.']);
    }
}