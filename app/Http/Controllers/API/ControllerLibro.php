<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\libro;
use App\Http\Requests\GuardarLibroRequest;
use App\Http\Requests\ActualizarLibroRequest;

class ControllerLibro extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return libro::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarLibroRequest $request)
    {
        libro::create($request->all());
        return response()->json([
            'res'=> true,
            'msg'=> "Libro guardado correctamente"
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(libro $libro)
    {

        return response()->json([
            'res'=> true,
            'libro'=> $libro

        ],200);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarLibroRequest $request,libro $libro)
    {
        //
        $libro->update($request->all());

        return response()->json([
            'res'=> true,
            'msg'=> 'actualizacion satisfactoria'
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(libro $libro)
    {
        //
        $libro->delete();
        return response()->json([
            'res'=> true,
            'msg'=> 'Eliminacion hecha'
        ],200);
    }
}
