<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return redirect()->route('administrador')->withSuccess('Has iniciado sesión exitosamente');
    }
}
