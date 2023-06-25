<?php

namespace App\Http\Controllers\Auth;
use App\Models\cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf;

class ClienteController extends Controller
{
    public function storeCliente(Request $request)
    {

        cliente::create([
            'name' => $request->nombre,
            'direccion'=> $request->direccion,
            'date' =>$request->fecha,
            'number'=>$request->numero,
            'email' => $request->email,
            'last_name' =>$request->apellido,
        ]);
        return redirect()->route('index');
    }

    public function index(){
        return view('index');
    }

    public function pdfContador(){
        $crudContador=cliente::all();
        $pdf = Pdf::loadView('CrudContador/pdfContador', compact ('crudContador'));
        //Horizontal
        return $pdf->setPaper('a4', 'landscape')->stream('pdfContador');
        //Vertical
        //return $pdf->stream();
    }
    public function crudContador(){
        return view('/CrudContador/crudContador',['lista'=>cliente::all()]);

    }
    public function eliminarRegistro($id){
        $cliente = cliente::find($id);
        $cliente->delete();
        return redirect()->route('crudContador');
    }

    public function editarRegistro($id){
        $cliente = cliente::find($id);
        return view('CrudContador/vistaEditarCrud',['rectificar'=>$cliente]);

    }

    public function update(Request $request){ 
        $id = $request->input('id');
        $cliente = cliente::find($id);
        $cliente->name=$request->input('nombre');
        $cliente->email=$request->input('email');
        $cliente->date=$request->input('fecha');
        $cliente->direccion=$request->input('direccion');
        $cliente->last_name=$request->input('apellido');
        $cliente->number=$request->input('numero');
        $cliente -> save();
        return view('CrudContador/vistaEditarCrud',['rectificar'=>$cliente]);

    }
}
