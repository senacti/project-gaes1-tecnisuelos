<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PruebaCampoController;
use App\Http\Controllers\NuevoInformeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});


Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/crearCuenta', function () {
    return view('crearCuenta');
});

Route::get('/recupContra', function () {
    return view('recupContra');
});


Route::get('/agendar', function () {
    return view('agendar');
});

Route::get('/Pjuridica', function () {
    return view('juridica');
});
Route::get('/Pnatural', function () {
    return view('natural');
});
Route::get('/Administrador', function () {
    return view('administrador');
});

Route::get('/laboratorista', function () {
    return view('laboratorista');
})->name('laboratorista');

Route::get('/cronograma', function () {
    return view('cronograma');
});
Route::get('/NuevoInforme', function () {
    return view('nuevoInforme');
});

Route::get('/HistoInformes', function () {
    return view('histoInformes');
});

Route::get('/PruebasdeCampo', function () {
    return view('pruebasdeCampo');
});


Route::get('/404act', function () {
    return view('404act');
});

Route::get('/500act', function () {
    return view('500act');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/register', function () {
    return view('register');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/administrador', function () {
        return view('administrador');
    })->name('administrador');
});


Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    //Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
})->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/nuevoInforme', [PruebaCampoController::class, 'index'])->name('crear_prueba_campo');
Route::post('/crearInforme', [NuevoInformeController::class, 'index'])->name('nuevo_informe');