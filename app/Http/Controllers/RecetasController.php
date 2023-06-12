<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recetas;
use Illuminate\Http\Request;

class RecetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recetas = Recetas::all();
        return view('Cruds.crudRecetas',compact('recetas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $recetas= new Recetas;

        // $recetas->name = $request->input('name');
        
        // $recetas->ingredients = $request->input('ingredients');
        // $recetas->description = $request->input('description');

        // $recetas->save();
        // return redirect()->route('crudRecetas.store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name'=> 'required',
            'images'=> 'required|image|mimes:png,jpg|max:5000',
            'ingredients'=> 'required',
            'description'=> 'required',

        ]);

        $files = $request->file('images');
        $name = $files->getClientOriginalName();
        $estencion = $files->getClientOriginalExtension();

        // $files->store('images', ['disk' => 'public']);
        $rutaImagen = $files->storeAs('images',$name, ['disk' => 'public']);
        $data = $request->only('name','ingredients','description');
        $data['images']=$rutaImagen;
        Recetas::create($data);

        

        return redirect()->route('crudRecetas.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Recetas $recetas)
    {
        return view('home.formulario',compact('recetas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recetas $recetas)
    {
        $recetas->name = $request->name;
        // $recetas->images = $request->images;
        $recetas->ingredients = $request->ingredients;
        $recetas->description = $request->description;

        $recetas->save();

        return redirect('formulario');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recetas $recetas)
    {
        $recetas->delete();

        return redirect('formulario');
    }
}
