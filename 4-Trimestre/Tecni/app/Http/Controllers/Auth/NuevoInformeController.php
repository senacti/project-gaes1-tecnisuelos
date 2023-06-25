<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Informe;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class NuevoInformeController extends Controller
{
    public function Slaboratorista(Request $request)
    {

        Informe::create([
            'nombre_empleado' => $request->nombre_empleado,
            'fecha' => $request->fecha,
            'numero_cilindro' => $request->numero_cilindro, 
            'numero_prueba' => $request->numero_prueba,
            'cliente' => $request->cliente,
            'granulometria' => $request->granulometria,
            'aire' => $request->aire,
            'flexion' => $request->flexion,
            'compresion' => $request->compresion,
            'estudio' => $request->estudio,
            'eslasticidad' => $request->elasticidad,
            'contraccion' => $request->contraccion,
            'pruebas_permeabilidad' => $request->pruebas_permeabilidad
        ]);
        return redirect()->route('crudLaboratorista');
    }

    public function index(){
        return view('index');
    }

    public function pdfLaboratorista(){
        $crudLaboratorista=Informe::all();
        $pdf = Pdf::loadView('CrudLaboratorista/pdfLaboratorista', compact ('crudLaboratorista'));
        //Horizontal
        return $pdf->setPaper('a4', 'landscape')->stream('pdfLaboratorista');
        //Vertical
        //return $pdf->stream();s

    }

    public function crudLaboratorista(){
        return view('CrudLaboratorista/crudLaboratorista',['data'=>Informe::all()]);

    }
    public function LeliminarRegistro($id){
        $Informe = Informe::find($id);
        $Informe->delete();
        return redirect()->route('crudLaboratorista');
    }
    public function LeditarRegistro($id){
        $Informe = Informe::find($id);
        return view('CrudLaboratorista/vistaEditarCrud',['rectificar'=>$Informe]);

    }
    public function Lupdate(Request $request){ 
        $id = $request->input('id');
        $Informe = Informe::find($id);
        $Informe->nombre_empleado=$request->input('nombre_empleado');
        $Informe->fecha=$request->input('fecha');
        $Informe->numero_cilindro=$request->input('numero_cilindro');
        $Informe->numero_prueba=$request->input('numero_prueba');
        $Informe->cliente=$request->input('cliente');
        $Informe->granulometria=$request->input('granulometria');
        $Informe->aire=$request->input('aire');
        $Informe->flexion=$request->input('flexion');
        $Informe->compresion=$request->input('compresion');
        $Informe->estudio=$request->input('estudio');
        $Informe->contraccion=$request->input('contraccion');
        $Informe->pruebas_permeabilidad=$request->input('pruebas_permeabilidad');
        $Informe -> save();
        return redirect()->route('crudLaboratorista');

    }

    /**public function Slaboratorista(Request $request)
    {
        $this->create($request->all());

        return redirect()->route('laboratorista')->withSuccess('Registered successfully.');
    }

    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre_empleado' => ['required', 'string', 'max:255'],
            'fecha' => ['required', 'date', 'max:255'],
            'numero_cilindro' => ['required', 'integer', 'max:255'],
            'numero_prueba' => ['required', 'integer', 'max:255'],
            'cliente' => ['required', 'string', 'max:555'],
            'granulometria' => ['required', 'string', 'max:555'],
            'aire' => ['required', 'string', 'max:555'],
            'flexion' => ['required', 'string', 'max:555'],
            'compresion' => ['required', 'string', 'max:555'],
            'estudio' => ['required', 'string', 'max:555'],
            'eslasticidad' => ['required', 'string', 'max:555'],
            'contraccion' => ['required', 'string', 'max:555'],
            'pruebas_permeabilidad' => ['required', 'string', 'max:555'],
            
        ]);
    }

    public function create( array $data)
    {
        return Informe::create([
            'nombre_empleado' => $data['nombre_empleado'],
            'fecha' => $data['fecha'],
            'numero_cilindro' => $data['numero_cilindro'], 
            'numero_prueba' => $data['numero_prueba'],
            'cliente' => $data['cliente'],
            'granulometria' => $data['granulometria'],
            'aire' => $data['aire'],
            'flexion' => $data['flexion'],
            'compresion' => $data['compresion'],
            'estudio' => $data['estudio'],
            'eslasticidad' => $data['elasticidad'],
            'contraccion' => $data['contraccion'],
            'pruebas_permeabilidad' => $data['pruebas_permeabilidad']
        ]);
    }*/
}
