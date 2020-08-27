<?php

namespace App\Http\Controllers;

use App\Accesorios;
use Illuminate\Http\Request;

class AccesoriosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accesorios = Accesorios::all();

         return view('accesorios.index', compact('accesorios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accesorios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $accesorio = new Accesorios();

        $accesorio->nombre = $request->nombre;
        $accesorio->presio = $request->presio;
        $accesorio->caracteristicas = $request->caracteristicas;
        $accesorio->fotos = $request->imagen_producto;
        $accesorio->save();
      */

        $entrada = $request->all();

        if($archivo= $request->file('imagen_producto')){

            $nombre = $archivo->getClientOriginalName();

            $archivo->move('images/upload', $nombre);

            $entrada['fotos']=$nombre;
        }

      Accesorios::create($entrada);


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
    public function edit($id)
    {
        $accesorio = Accesorios::find($id);

        return view('accesorios.edit', compact('accesorio'));
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
        $accesorio = Accesorios::find($id);

        $accesorio->update($request->all());

        return redirect("/accesorios");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accesorio = Accesorios::find($id);

        $accesorio->delete();

        return redirect('/accesorios');
    }
}
