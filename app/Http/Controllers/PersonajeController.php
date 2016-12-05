<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Personaje;

class PersonajeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personaje = Personaje::all();
        return view('personajes.index', ['personaje' => $personaje]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personajes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personaje = new Personaje; // Creamos nueva instancia de capa
        $personaje->nombre = $request->input('nombre');
        $personaje->raza = $request->input('raza');
        $personaje->clase = $request->input('clase');
        $personaje->genero = $request->input('genero');

        if ($request->hasFile('imagen')) {
            // Guardamos en una variable el nombre de la imagen
            $nombreImg = $request->file('imagen')->getClientOriginalName();
            // Movemos la imagen a la carpeta img
            $imagen = $request->imagen->storeAs('/public/img', $nombreImg);          
            $personaje->imagen = $imagen;
        }

        $personaje->save();
        // Redireccionamos al Index del catálogo
        return redirect()->action('PersonajeController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personaje = Personaje::find($id);
        return view('personajes.show', ['personaje' => $personaje]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personaje = Personaje::find($id);
        return view('personajes.edit', ['personaje' => $personaje]);
    }

    public function putEdit(Request $request, $id) {
        $personaje = Personaje::findOrFail($id);

        if ($request->hasFile('imagen')) {
            // Guardamos en una variable el nombre de la imagen
            $nombreImg = $request->file('imagen')->getClientOriginalName();
            // Movemos la imagen a la carpeta img
            $imagen = $request->imagen->storeAs('img', $nombreImg);
            $personaje->imagen = $imagen;
        }
        $personaje->nombre = $request->input('nombre');      
        $personaje->raza = $request->input('raza');
        $personaje->clase = $request->input('clase');
        $personaje->genero = $request->input('genero');
        $personaje->save();
        return redirect()->action('PersonajeController@show',['id'=>$personaje]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personaje = Personaje::find($id);
        $personaje->delete();
        return redirect()->action('PersonajeController@index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        self::destroy($id);
        return redirect()->action('PersonajeController@index');
    }
}
