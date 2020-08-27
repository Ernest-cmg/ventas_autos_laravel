<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Telefono;
use Illuminate\Support\Facades\App;

class TelefonoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telefonos = Telefono::all();

        return view('telefonos.index', compact('telefonos'));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('telefonos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $telefono = new Telefono;

      $telefono->marca =$request->marca;
      $telefono->modelo =$request->modelo;
      $telefono->procesador =$request->procesador;
      $telefono->almacenamiento =$request->almacenamiento;
      $telefono->memoria_ram =$request->memoria;
      $telefono->foto =$request->imagen_producto;
      $telefono->otros =$request->otros;
      $telefono->presio =$request->presio;

      $telefono->save();



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $telefonos = Telefono::find($id);

        return view('telefonos.edit', compact('telefonos'));
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
        $telefonos = Telefono::find($id);

        $telefonos->update($request->all());

        return redirect("/telefonos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $telefonos = Telefono::find($id);

        $telefonos->delete();

        return redirect('/telefonos');

    }
}
