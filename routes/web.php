<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RecetasController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use Symfony\Component\Routing\Route as ComponentRoutingRoute;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\CrudComentariosController;
use App\Http\Controllers\CrudController;
use Illuminate\Routing\Router;
use Whoops\Run;

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

//Login
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);

//Registro
Route::get('/Register', [RegisterController::class, 'show']);
Route::post('/Register', [RegisterController::class, 'register']);
Route::get('/Register', [RegisterController::class, 'show'])->name('register');
Route::post('/Register', [RegisterController::class, 'showRegister'])->name('registerPost');

//Cerrar sesion
Route::post('/logout', [LoginController::class, 'logout']);


// Crud
Route::get('/crud',[CrudController::class,'index']);
Route::get('crud/{crud}/editar',[CrudController::class,'edit'])->name('crud.editar');
Route::put('crud/{crud}',[CrudController::class,'update'])->name('crud.update');
Route::delete('crud/{crud}', [CrudController::class,'destroy'])->name('crud.destroy');

//Crud Comentarios
Route::get('/crudComentarios',[CrudComentariosController::class,'index']);
Route::get('crudComentarios/{comentarios}/editar',[CrudComentariosController::class,'edit'])->name('crudComentarios.editar');
Route::put('crudComentarios/{comentarios}/actualizar',[CrudComentariosController::class,'update'])->name('crudComentarios.update');
Route::delete('crudComentarios/{comentarios}', [CrudComentariosController::class,'destroy'])->name('Comentarios.destroy');



//Inicio
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Opiniones
Route::get('/opiniones',[ComentariosController::class,'comentarios'])->name('opiniones');
Route::post('/opiniones',[ComentariosController::class,'store'])->name('comentarios.store');

//Productos
Route::get('/productos',[HomeController::class,'gost'])->name('productos');

//Recetas
Route::get('/recetas',[HomeController::class,'recetas'])->name('recetas');
Route::get('/recetas/{recetas}/recetas',[HomeController::class,'ver'])->name('verRecetas');

//Nostros
Route::get('/nosotros',[HomeController::class,'nosotros'])->name('nosotros');

//Contactanos
Route::get('/contactanos',[ContactanosController::class,'contactos'])->name('contactos');
Route::post('contactanos',[ContactanosController::class,'stor'])->name('contactanos.stor');




// Subir recetas
Route::get('/crudRecetas',[RecetasController::class,'index']);
Route::get('/subirRecetas',[HomeController::class,'formulario'])->name('subirRecetas');
Route::post('/crudRecetas', [RecetasController::class,'store'])->name('crudRecetas.store');
Route::get('/crudRecatas/{recetas}/editar',[RecetasController::class,'edit'])->name('formulario.editar');
Route::put('/crudRecetas/{rescetas}/actualizar',[RecetasController::class,'update'])->name('formulario.update');
Route::delete('crudRecetas/{formulario}', [RecetasController::class,'destroy'])->name('formulario.destroy');


//Menu
Route::get('/menu',[CartController::class,'shop'])->name('menu');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');



Route::get('/prueba',[HomeController::class,'prueba']);


