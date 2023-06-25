<?php

use App\Http\Controllers\Auth\ClienteController;
use App\Http\Controllers\Auth\InventarioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Auth\PruebaCampoController;
use App\Http\Controllers\Auth\NuevoInformeController;






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

Route::get('/servicios', function () {
    return view('servicios');
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
    return view('CrudLaboratorista.nuevoInforme');
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


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/administrador', function () {return view('administrador');
    })->name('administrador');
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
    
    Route::get('/CrudContador/crudContador/pdfCliente', [ClienteController::class, 'pdfContador'])->name('crudContador.pdf');
    Route::get('/CrudContador/crudContador', 'crudContador')->name('crudContador');
    Route::post('/storeCliente', 'storeCliente')->name('storeCliente');
    Route::get('/eliminar/{id}', 'eliminarRegistro')->name('eliminar');
    Route::get('/editar/{id}', 'editarRegistro')->name('editar');
    Route::post('/update', 'update')->name('update');
    Route::post('/index', 'index')->name('index');

});
Route::controller(InventarioController::class)->group(function() {
    Route::get('/CrudInventario/crudInventario/pdfInventario', [InventarioController::class, 'pdfInventario'])->name('crudInventario.pdf');
    Route::get('/CrudInventario/crudInventario', 'crudInventario')->name('crudInventario');
    Route::get('/crudInventario', 'crudInventario')->name('crudInventario');
    Route::post('/storeInventario', 'storeInventario')->name('storeInventario');
    Route::get('/ieliminar/{id}', 'ieliminarRegistro')->name('ieliminar');
    Route::get('/ieditar/{id}', 'ieditarRegistro')->name('ieditar');
    Route::post('/iupdate', 'iupdate')->name('iupdate');
    Route::post('/index', 'index')->name('index');
    Route::get('/formInventario', 'formInventario')->name('formInventario');
    });

Route::controller(PruebaCampoController::class)->group(function() {
    Route::get('/CrudIngeniero/crudIngeniero/pdf', [PruebaCampoController::class, 'pdfIngeniero'])->name('crudIngeniero.pdf');
    Route::get('/CrudIngeniero/crudIngeniero', 'crudIngeniero')->name('crudIngeniero');
    Route::post('/SIgeniero', 'SIngeniero')->name('SIgeniero');
    Route::get('/Peliminar/{id}', 'PeliminarRegistro')->name('Peliminar');
    Route::get('/Peditar/{id}', 'PeditarRegistro')->name('Peditar');
    Route::post('/Pupdate', 'Pupdate')->name('Pupdate');
    Route::post('/index', 'index')->name('index');
   
});
    Route::controller(NuevoInformeController::class)->group(function() {
    Route::get('/CrudLaboratorista/crudLaboratorista/pdfLaboratorista', [NuevoInformeController::class, 'pdfLaboratorista'])->name('crudLaboratorista.pdf');
    Route::get('/CrudLaboratorista/crudLaboratorista', 'crudLaboratorista')->name('crudLaboratorista');
    Route::post('/Slaboratorista', 'Slaboratorista')->name('Slaboratorista');
    Route::get('/Leliminar/{id}', 'LeliminarRegistro')->name('Leliminar');
    Route::get('/Leditar/{id}', 'LeditarRegistro')->name('Leditar');
    Route::post('/Lupdate', 'Lupdate')->name('Lupdate');
    Route::post('/index', 'index')->name('index');
   
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/nuevoInforme', [PruebaCampoController::class, 'index'])->name('crear_prueba_campo');
/*Route::post('/crearInforme', [NuevoInformeController::class, 'index'])->name('nuevo_informe');*/



  