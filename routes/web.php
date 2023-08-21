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
use App\Http\Controllers\LoginGoogleController;
use App\Http\Controllers\ProductosController;
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
Route::get('/', [HomeController::class,'init']);
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);


// use Laravel\Socialite\Facades\Socialite;
 
// Route::get('/login-google', function () {
//     return Socialite::driver('google')->redirect();
// });
 
// Route::get('/google-callback', function () {
//     $user = Socialite::driver('google')->user();
//     
 
//     // $user->token
// });


// login con google

Route::get('/login-google',[LoginGoogleController::class,'google'])->name('google');
Route::get('/google-callback',[LoginGoogleController::class,'usergoogle']);

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
Route::put('crudComentarios/{comentarios}/actualizar',[CrudComentariosController::class,'update'])->name('crudComentarios.update');
Route::delete('crudComentarios/{comentarios}', [CrudComentariosController::class,'destroy'])->name('Comentarios.destroy');



//Inicio
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Opiniones
Route::get('/opiniones',[ComentariosController::class,'comentarios'])->name('opiniones');
Route::post('/opiniones',[ComentariosController::class,'store'])->name('comentarios.store');

//Productos
Route::get('/productos',[HomeController::class,'productos'])->name('productos');
Route::get('/crudProductos', [ProductosController::class,'index']);
Route::post('/crudProductos', [ProductosController::class,'store'])->name('productos.store');
Route::get('/crudProductos/{productos}/editar',[ProductosController::class,'edit'])->name('productos.editar');
Route::put('/crudProductos/{productos}/actualizar',[ProductosController::class,'update'])->name('productos.update');
Route::delete('crudProductos/{productos}', [ProductosController::class,'destroy'])->name('productos.destroy');

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
Route::post('/crudRecetas', [RecetasController::class,'store'])->name('crudRecetas.store');
Route::put('/crudRecetas/{rescetas}',[RecetasController::class,'update'])->name('crudRecetas.update');
Route::delete('crudRecetas/{recetas}', [RecetasController::class,'destroy'])->name('crudRecetas.destroy');


//Menu
Route::get('/menu',[CartController::class,'shop'])->name('menu');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');


//Perfil
Route::get('/perfil',[HomeController::class,'prueba'])->name('perfil');


