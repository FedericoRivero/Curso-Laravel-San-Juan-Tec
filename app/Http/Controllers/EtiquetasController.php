<?php

namespace App\Http\Controllers;

use App\Models\Etiqueta;
use Illuminate\Http\Request;

class EtiquetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etiquetas = Etiqueta::all();
        return view('etiquetas.index', compact('etiquetas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etiquetas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->nombre != '') {
            $etiqueta = new Etiqueta();
            $etiqueta->create(['nombre' => $request->nombre]);
            return redirect(route('etiquetas.index'))->with('status', 'Etiqueta creada con éxito');
        } else {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etiqueta  $etiqueta
     * @return \Illuminate\Http\Response
     */
    public function show(Etiqueta $etiqueta)
    {
        $etiqueta = Etiqueta::find($etiqueta->id);
        return view('etiquetas.show', compact('etiqueta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etiqueta  $etiqueta
     * @return \Illuminate\Http\Response
     */
    public function edit(Etiqueta $etiqueta)
    {
        return view('etiquetas.edit', compact('etiqueta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etiqueta  $etiqueta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etiqueta $etiqueta)
    {
        if ($request->nombre != '') {
            $etiqueta->update($request->all());
            return redirect(route('etiquetas.index'))->with('status', 'Etiqueta actualizada con éxito');
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etiqueta  $etiqueta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etiqueta $etiqueta)
    {
        $etiqueta->delete();
        return redirect(route('etiquetas.index'))->with('status', 'Etiqueta eliminada con éxito');
    }
}
