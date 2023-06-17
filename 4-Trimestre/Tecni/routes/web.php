<?php

use App\Http\Controllers\Auth\ClienteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;



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
});

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


Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
    
});

Route::controller(ClienteController::class)->group(function() {
    
    Route::get('/crudContador', 'crudContador')->name('crudContador');
    Route::post('/storeCliente', 'storeCliente')->name('storeCliente');
    Route::get('/eliminar/{id}', 'eliminarRegistro')->name('eliminar');
    Route::get('/editar/{id}', 'editarRegistro')->name('editar');
    Route::post('/update', 'update')->name('update');
    Route::post('/index', 'index')->name('index');

});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
