<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;

use App\Barberia;

use Illuminate\Http\Request;

class BarberiaController extends Controller
{

     public function index(Request $request)
    {
        if ($request->ajax()) {
            

            $user_id = auth()->id();
            $data = Barberia::all()->where('user_id', '=' ,$user_id );

        }
        $barberia = Barberia::all();

        return view('barberias.index')->with('barberia',$barberia);
    }

   
    public function store(Request $request)
    {                                    
                               
        $user = auth()->id();

        $barberia = Barberia::updateOrCreate(['idB' => $request->barberia_id]);
        $barberia->nombreB = $request->input("nombreB");
        $barberia->latitud = $request->input("latitud");
        $barberia->longitud = $request->input("longitud");
        $barberia->direccion = $request->input("direccion");
        $barberia->propietario = $request->input("propietario");
        $barberia->telefono = $request->input("telefono");
        $barberia->horario = $request->input("horario");
       // $barberia->user_id = $user;
        $barberia->save();
        return response()->json(['success'=>'Item saved successfully.'])->
        redirect()->route('barberias.index');

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
        $barberia = Barberia::find($id);
        return response()->json($barberia);
    }


    public function destroy($id)
    {
       Barberia::find($id)->delete();
     
       return response()->json(['success'=>'barberia deleted successfully.']);
    }
}
