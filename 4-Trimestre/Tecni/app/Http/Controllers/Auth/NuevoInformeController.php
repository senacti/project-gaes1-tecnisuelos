<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Informe;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class NuevoInformeController extends Controller
{
    public function index(Request $request)
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
    }
}
