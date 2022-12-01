<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;

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
Route::get('/admin', [AdminController::class, 'index'])
->middleware('auth.admin')
->name('admin.index');

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