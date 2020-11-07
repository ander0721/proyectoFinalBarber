<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;

use App\Tipo;

use Illuminate\Http\Request;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

     public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tipo::all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip" 
                                    data-id="'.$row->idM.'" data-original-title="Edit" class="edit btn btn-editar btn-sm editItem"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="26" height="26"
                                    viewBox="0 0 226 226"
                                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,226v-226h226v226z" fill="none"></path><g fill="#1e8cd2"><path d="M194.925,9.04c-5.63234,0 -11.24703,2.20703 -15.5375,6.4975l-3.6725,3.6725l31.075,31.075c-0.01766,0.01766 3.6725,-3.6725 3.6725,-3.6725c8.59859,-8.59859 8.58094,-22.49406 0,-31.075c-4.30812,-4.29047 -9.90516,-6.4975 -15.5375,-6.4975zM168.79375,27.26125c-1.02406,0.14125 -1.9775,0.65328 -2.68375,1.4125l-146.6175,146.75875c-0.58266,0.52969 -1.02406,1.21828 -1.27125,1.9775l-9.04,33.9c-0.40609,1.55375 0.05297,3.19578 1.18297,4.32578c1.13,1.13 2.77203,1.58906 4.32578,1.18297l33.9,-9.04c0.75922,-0.24719 1.44781,-0.68859 1.9775,-1.27125l146.75875,-146.6175c1.80094,-1.74797 1.81859,-4.62594 0.07063,-6.42687c-1.74797,-1.80094 -4.62594,-1.81859 -6.42688,-0.07062l-145.91125,145.91125l-18.3625,-18.3625l145.91125,-145.91125c1.35953,-1.30656 1.76563,-3.33703 1.00641,-5.06734c-0.75922,-1.73031 -2.50719,-2.80734 -4.39641,-2.70141c-0.14125,0 -0.2825,0 -0.42375,0z"></path></g></g></svg></a>';




   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->idT.'" data-original-title="Delete" class="btn btn-eliminar btn-sm deleteItem"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                           width="26" height="26"
                           viewBox="0 0 172 172"
                           style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#e7321d"><path d="M72.24,0c-5.65719,0 -10.32,4.66281 -10.32,10.32v6.88h-26.875c-0.43,-0.08062 -0.86,-0.08062 -1.29,0h-6.235c-0.1075,0 -0.215,0 -0.3225,0c-1.89469,0.09406 -3.37281,1.70656 -3.27875,3.60125c0.09406,1.89469 1.70656,3.37281 3.60125,3.27875h3.7625l12.3625,139.32c0.43,4.81063 4.52844,8.6 9.3525,8.6h66.005c4.82406,0 8.9225,-3.78937 9.3525,-8.6l12.3625,-139.32h3.7625c1.23625,0.01344 2.39188,-0.63156 3.02344,-1.70656c0.61813,-1.075 0.61813,-2.39187 0,-3.46687c-0.63156,-1.075 -1.78719,-1.72 -3.02344,-1.70656h-34.4v-6.88c0,-5.65719 -4.66281,-10.32 -10.32,-10.32zM72.24,6.88h27.52c1.935,0 3.44,1.505 3.44,3.44v6.88h-34.4v-6.88c0,-1.935 1.505,-3.44 3.44,-3.44zM38.1625,24.08h95.675l-12.3625,138.7825c-0.1075,1.19594 -1.38406,2.2575 -2.4725,2.2575h-66.005c-1.08844,0 -2.365,-1.06156 -2.4725,-2.2575zM65.0375,34.2925c-0.14781,0.02688 -0.29562,0.06719 -0.43,0.1075c-1.59906,0.36281 -2.72781,1.80063 -2.6875,3.44v113.52c-0.01344,1.23625 0.63156,2.39188 1.70656,3.02344c1.075,0.61813 2.39187,0.61813 3.46687,0c1.075,-0.63156 1.72,-1.78719 1.70656,-3.02344v-113.52c0.04031,-0.99437 -0.36281,-1.94844 -1.075,-2.62031c-0.72562,-0.68531 -1.70656,-1.02125 -2.6875,-0.92719zM85.6775,34.2925c-0.14781,0.02688 -0.29562,0.06719 -0.43,0.1075c-1.59906,0.36281 -2.72781,1.80063 -2.6875,3.44v113.52c-0.01344,1.23625 0.63156,2.39188 1.70656,3.02344c1.075,0.61813 2.39187,0.61813 3.46687,0c1.075,-0.63156 1.72,-1.78719 1.70656,-3.02344v-113.52c0.04031,-0.99437 -0.36281,-1.94844 -1.075,-2.62031c-0.72562,-0.68531 -1.70656,-1.02125 -2.6875,-0.92719zM106.3175,34.2925c-0.14781,0.02688 -0.29562,0.06719 -0.43,0.1075c-1.59906,0.36281 -2.72781,1.80063 -2.6875,3.44v113.52c-0.01344,1.23625 0.63156,2.39188 1.70656,3.02344c1.075,0.61813 2.39187,0.61813 3.46687,0c1.075,-0.63156 1.72,-1.78719 1.70656,-3.02344v-113.52c0.04031,-0.99437 -0.36281,-1.94844 -1.075,-2.62031c-0.72562,-0.68531 -1.70656,-1.02125 -2.6875,-0.92719z"></path></g></g></svg></a><input type="hidden" class="form-control" id="editBtn"  value="'.$row->idM.'">';
                       
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('tipos.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                                    
                                                                                                            
          Tipo::updateOrCreate(['idT' => $request->tipo_id],
                ['nombreT' => $request->nombreT]);       
   
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
        $tipo = Tipo::find($id);
        return response()->json($tipo);
    }


    public function destroy($id)
    {
       Tipo::find($id)->delete();
     
       return response()->json(['success'=>'Tipo deleted successfully.']);
    }


}
