<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    
    public function index(){
        $productos= Productos::all();
        return view('Cruds.CrudProductos',compact('productos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products',
            'image' => 'required|image',
            'price' => 'required'
        ]);

        $productos = new Productos();
        $productos->name = $request->name;
        $productos->price = $request->price;

        // Guardar la imagen y asignar el nombre de la imagen al modelo
        if ($image = $request->file('image')) {
            $imagePath = 'images/';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imagePath, $imageName);
            $productos->image_path = $imagePath . $imageName;
        }

        $productos->save();

        return redirect()->route('productos.store')->with('success', 'Product created successfully.');
    }

}
