<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Pruebas;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class PruebaCampoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
            'ubicacion' => ['required', 'string', 'max:555'],
            'sondeos' => ['string', 'max:555'],
            'revenimiento' => ['string', 'max:555'],
            'ultrasonico' => ['string', 'max:555'],
            'esclerometria' => ['string', 'max:555'],
            'analisis_petrograficos' => ['string', 'max:555'],
            'elaboracion' => ['string', 'max: 555'],
            'reactividad' => ['string', 'max:555'],
            'compresion' => ['string', 'max:555'],
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create( array $data)
    {
        return Pruebas::create([
            'nombre_empleado' => $data['nombre_empleado'],
            'fecha' => $data['fecha'],
            'numero_cilindro' => $data['numero_cilindro'], 
            'numero_prueba' => $data['numero_prueba'],
            'cliente' => $data['cliente'],
            'ubicacion' => $data['ubicacion'],
            'sondeos' => $data['sondeos'],
            'revenimiento' => $data['revenimiento'],
            'ultrasonico' => $data['ultrasonico'],
            'esclerometria' => $data['esclerometria'],
            'analisis_petrograficos' => $data['analisis_petrograficos'],
            'elaboracion' => $data['elaboracion'],
            'reactividad' => $data['reactividad'],
            'compresion' => $data['compresion'],
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
