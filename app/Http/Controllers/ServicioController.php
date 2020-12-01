<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;

use App\Servicio;
use App\Barberia;

use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index(Request $request)
    {
       
            $data = Servicio::with('barberias')->get();
            

        $user_id = auth()->id();
        $barberias = Barberia::all()->where('user_id', '=' ,$user_id );
        $servicio = Servicio::all();
        return view('servicios.index')
        ->with('barberias',$barberias)
        ->with('servicio',$servicio);
    }

    /*************************** 
    public function mostrar(){
        if(Auth::check()){
            return view("aut.inicio");
        }else{
            return redirect('login');
        }

     }
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                                    
        $user = auth()->id();
        $nombreM = $request->input("nombreB");                                                                              
        $barberia = Barberia::all()->where("nombreB", '=', $nombreM);                                                                   
        $servicio = Servicio::updateOrCreate(['idS' => $request->servicio_id]);
        $servicio->nombreS = $request->input("nombreS");
        $servicio->precio = $request->input("precio");
        $servicio->asignarBarberia($barberia);
        $servicio->save();

      
   
        return response()->json(['success'=>'Item saved successfully.']);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
   
    public function edit($id)
    {
        $servicio = Servicio::find($id);
        return response()->json($servicio);
    }


    public function destroy($id)
    {
      Servicio::find($id)->delete();
     
       return response()->json(['success'=>'Servicio deleted successfully.']);
    }


}
