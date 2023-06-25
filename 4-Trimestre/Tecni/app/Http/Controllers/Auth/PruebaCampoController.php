<?php

namespace App\Http\Controllers\Auth;
use App\Models\prueba;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf;




//class PruebaCampoController extends Controller
//{

    //public function index(Request $request){

      
        
        //$datos=DB::select("select * from tecni.pruebas_de_campo;");
    //return view("crudIngeniero")->with("datos", $datos);

  
class PruebaCampoController extends Controller
{
    public function SIngeniero(Request $request)
    {

        prueba::create([
            'nombre_empleado' => $request->nombre_empleado,
            'fecha'=> $request->fecha,
            'numero_cilindro' =>$request->numero_cilindro,
            'numero_prueba'=>$request->numero_prueba,
            'cliente' => $request->cliente,
            'ubicacion' =>$request->ubicacion,
            'sondeos' =>$request->sondeos,
            'revenimiento' =>$request->revenimiento,
            'ultrasonico' =>$request->ultrasonico,
            'esclerometria' =>$request->esclerometria,
            'analisis_petrograficos' =>$request->analisis_petrograficos,
            'elaboracion' =>$request->elaboracion,
            'reactividad' =>$request->reactividad,
            'compresion' =>$request->compresion,
        ]);
        return redirect()->route('index');
    }

    public function index(){
        return view('index');

    }

    public function pdfIngeniero(){
        $crudIngeniero=prueba::all();
        $pdf = Pdf::loadView('CrudIngeniero/pdfIngeniero', compact ('crudIngeniero'));
        //Horizontal
        return $pdf->setPaper('a4', 'landscape')->stream('pdfIngeniero');
        //Vertical
        //return $pdf->stream();s

    }

    public function crudIngeniero(){
        return view('CrudIngeniero/crudIngeniero',['dato'=>prueba::all()]);

    }
    public function PeliminarRegistro($id){
        $prueba = prueba::find($id);
        $prueba->delete();
        return redirect()->route('crudIngeniero');
    }
    public function PeditarRegistro($id){
        $prueba = prueba::find($id);
        return view('CrudIngeniero/vistaEditarCrud',['rectificar'=>$prueba]);

    }
    public function Pupdate(Request $request){ 
        $id = $request->input('id');
        $prueba = prueba::find($id);
        $prueba->nombre_empleado=$request->input('nombre_empleado');
        $prueba->fecha=$request->input('fecha');
        $prueba->numero_cilindro=$request->input('numero_cilindro');
        $prueba->numero_prueba=$request->input('numero_prueba');
        $prueba->cliente=$request->input('cliente');
        $prueba->ubicacion=$request->input('ubicacion');
        $prueba->sondeos=$request->input('sondeos');
        $prueba->revenimiento=$request->input('revenimiento');
        $prueba->ultrasonico=$request->input('ultrasonico');
        $prueba->esclerometria=$request->input('esclerometria');
        $prueba->analisis_petrograficos=$request->input('analisis_petrograficos');
        $prueba->elaboracion=$request->input('elaboracion');
        $prueba->reactividad=$request->input('reactividad');
        $prueba->compresion=$request->input('compresion');
        $prueba -> save();
        return view('CrudIngeniero/vistaEditarCrud',['rectificar'=>$prueba]);

    }

}

