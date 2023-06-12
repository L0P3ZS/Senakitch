<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recetas;

class HomeController extends Controller
{

    public function index(){
        return view('home.index');
    }

    public function menu(){
        return view('home.menu');
    }

    public function opiniones(){
        return view('home.opiniones');
    }

   public function gost(){
    return view('home.product');

   }

   //Recestas
    public function recetas(){
        $recetas = Recetas::all();
        return view('home.recetas',compact('recetas'));
    }
    public function ver(Recetas $recetas)
    {
        // $recetas = Recetas::findOrfail($id);
        
       return view('home.verRecetas',compact('recetas'));
    }


    // Nosotros
    public function nosotros(){
        return view('home.nosotros');
    }
    
    //Formulario para susbir recetas
    public function formulario()
    {
        return view('home.subirRecetas');
    }

    //Perfil de usuario
    public function prueba(){
        return view('home.prueba');
    }

    public function crud(){
        return view('home.crud');
    }











}






