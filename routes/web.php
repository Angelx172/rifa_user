<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RifaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->middleware('auth');

//midleware auth para paginas que necesitan sesion iniciada
//midleware guest para paginas sin necesidad de inicio de sesion
Route::get('/register', [RegisterController::class, 'create'])
->middleware('guest')
->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [SessionController::class, 'create'])
->middleware('guest')
->name('login.index');

Route::post('/login', [SessionController::class, 'store'])->name('login.store');
Route::get('/logout', [SessionController::class, 'destroy'])
->middleware('auth')
->name('login.destroy');

//middleware auth.admin para paginas exclusivas del administrador
//ruta de index del crud del administrador
Route::get('/admin', [AdminController::class, 'index'])
->middleware('auth.admin')
->name('admin.index');

//tabla de usuarios
Route::get('admin_u/listar', [AdminController::class, 'ver_usuarios'])
->middleware('auth.admin')
->name('admin.usuarios');
//crear usuario
Route::get('admin_u/agregar', [AdminController::class, 'crear_usuarios'])
->middleware('auth.admin')
->name('admin.usuarios_create');
//formulario actualizar
Route::get('admin_u/edit/{id}', [AdminController::class, 'edit_u'])
->middleware('auth.admin')
->name('admin.usuarios_edit');
//actualizar
Route::put('admin_u/update/{id}', [AdminController::class, 'update_u'])
->middleware('auth.admin')
->name('user.update');
//eliminar
Route::delete('admin_u/delete/{id}', [AdminController::class, 'destroy_u'])
->middleware('auth.admin')
->name('user.destroy');

//ruta de insertar rifa
Route::post('admin_u/guardar', [AdminController::class, 'guardar_usuarios'])
->middleware('auth.admin')
->name('usuario.store');
//ruta de index de rifas
Route::get('rifa_a/listar', [RifaController::class, 'index_a'])
->middleware('auth.admin')
->name('admin.rifa_a');
//ruta de index de rifas activas
Route::get('rifa_ac/listar', [RifaController::class, 'index_ac'])
->middleware('auth.admin')
->name('admin.rifa_ac');
//ruta de index de rifas finalizadas
Route::get('rifa_af/listar', [RifaController::class, 'index_af'])
->middleware('auth.admin')
->name('admin.rifa_af');
//ruta de index de rifas inactivas
Route::get('rifa_ai/listar', [RifaController::class, 'index_ai'])
->middleware('auth.admin')
->name('admin.rifa_ai');
//ruta de formulario de rifas activas
Route::get('rifa_a/agregar', [RifaController::class, 'create_a'])
->middleware('auth.admin')
->name('admin.rifa_a_create');
//ruta de insertar rifa
Route::post('rifa_a/guardar', [RifaController::class, 'store_a'])
->middleware('auth.admin')
->name('rifa.store');
//formulario actualizar
Route::get('rifa_a/edit/{id}', [RifaController::class, 'edit_a'])
->middleware('auth.admin')
->name('admin.rifa_a_edit');
//actualizar
Route::put('rifa/update/{id}', [RifaController::class, 'update_a'])
->middleware('auth.admin')
->name('rifa.update_a');
//eliminar
Route::delete('rifa/delete/{id}', [RifaController::class, 'destroy_a'])
->middleware('auth.admin')
->name('rifa.destroy_a');




//vistas del usuario
//index del usuario
Route::get('/index', function(){
    return view('usuario.index');
});

Route::get('/sorteos', function(){
    return view('usuario.sorteos');
});

Route::get('/ganadores', function(){
    return view('usuario.ganadores');
});

Route::get('/contacto', function(){
    return view('usuario.contatos');
});

Route::get('/mango', function(){
    return view('usuario.regritar');
});

Route::get('/info', function(){
    return view('usuario.vis_sorteo');
});

Route::get('/tike', function(){
    return view('usuario.lista');
});



Route::get('/coca', function(){
    return view('usuario.tike');
});