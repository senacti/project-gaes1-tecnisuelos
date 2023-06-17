<?php

namespace App\Http\Controllers\Auth;
use App\Models\cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    public function storeCliente(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'direccion' => 'required|string|max:40',
            'fecha' => 'required|date',
            'apellido' => 'required|string',
            'numero' => 'required|int',
            
        ]);

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
    public function crudContador(){
        return view('crudContador',['lista'=>cliente::all()]);

    }
    public function eliminarRegistro($id){
        $cliente = cliente::find($id);
        $cliente->delete();
        return redirect()->route('crudContador');
    }

    public function editarRegistro($id){
        $cliente = cliente::find($id);
        return view('vistaEditarCrud',['rectificar'=>$cliente]);

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
        return view('vistaEditarCrud',['rectificar'=>$cliente]);

    }
}
