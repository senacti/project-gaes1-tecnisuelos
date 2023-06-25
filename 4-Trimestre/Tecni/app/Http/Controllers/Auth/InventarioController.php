<?php

namespace App\Http\Controllers\Auth;
use App\Models\inventario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf;

class InventarioController extends Controller
{
    public function storeInventario(Request $request)
    {

        inventario::create([
            'categoria' => $request->categoria,
            'descripcion'=> $request->descripcion,
            'nombre' =>$request->nombre,
            'imagen'=>$request->imagen,
            'cantidad'=>$request->cantidad,
        ]);
        return redirect()->route('index');
    }

    public function formInventario(){
        return view('crudInventario.formInventario');
    }

    public function index(){
        return view('index');
    }

    public function pdfInventario(){
        $crudInventario=inventario::all();
        $pdf = Pdf::loadView('CrudInventario/pdfInventario', compact ('crudInventario'));
        //Horizontal
        return $pdf->setPaper('a4', 'landscape')->stream('pdfInventario');
        //Vertical
        //return $pdf->stream();s

    }
    public function crudInventario(){
        return view('CrudInventario.crudInventario',['listai'=>inventario::all()]);

    }
    public function ieliminarRegistro($id){
        $inventario = inventario::find($id);
        $inventario->delete();
        return redirect()->route('crudInventario');
    }

    public function ieditarRegistro($id){    
        $inventario = inventario::find($id);
        return view('CrudInventario.vistaEditarCrudi',['rectificar'=>$inventario]);

    }

    public function iupdate(Request $request){ 
        $id = $request->input('id');
        $inventario = inventario::find($id);
        $inventario->nombre=$request->input('nombre');
        $inventario->categoria=$request->input('categoria');
        $inventario->descripcion=$request->input('descripcion');
        $inventario->imagen=$request->input('imagen');
        $inventario->cantidad=$request->input('cantidad');
        $inventario -> save();
        return view('CrudInventario.vistaEditarCrudi',['rectificar'=>$inventario]);

    }
}
