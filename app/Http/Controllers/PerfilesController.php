<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;

class PerfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfiles = Perfil::all();
        // dd($perfiles->nombre);
        return view('perfiles.index', compact('perfiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perfiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->nombre != '' && $request->apellido != '') {
            $perfil = new Perfil();
            $perfil->create(['nombre' => $request->nombre, 'apellido' => $request->apellido]);
            return redirect(route('perfiles.index'))->with('status', 'Perfil creado con éxito');
        } else {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perfil = Perfil::find($id);
        return view('perfiles.show', compact('perfil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        return view('perfiles.edit', compact('perfil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfil)
    {
        if ($request->nombre != '') {
            $perfil = Perfil::find($perfil->id);
            $perfil->update(['nombre' => $request->nombre, 'apellido' => $request->apellido]);
            return redirect(route('perfiles.index'))->with('status', 'Perfil actualizado con éxito');
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perfil = Perfil::find($id);
        $perfil->delete();
        return redirect(route('perfiles.index'))->with('status', 'Perfil eliminado con éxito');
    }
}
