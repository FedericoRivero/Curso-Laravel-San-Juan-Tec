<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use Illuminate\Http\Request;

class PagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagos = Pago::all();
        return view('pagos.index', compact('pagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pagos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->fecha != '') {
            $pago = new Pago();
            $pago->create(['fecha' => $request->fecha, 'monto' => $request->monto]);
            return redirect(route('pagos.index'))->with('status', 'Pago creado con éxito');
        } else {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function show(Pago $pago)
    {
        $pago = Pago::find($pago->id);
        return view('pagos.show', compact('pago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function edit(Pago $pago)
    {
        return view('pagos.edit', compact('pago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pago $pago)
    {
        if ($request->fecha != '') {
            $pago = Pago::find($pago->id);
            $pago->update(['fecha' => $request->fecha, 'monto' => $request->monto]);
            return redirect(route('pagos.index'))->with('status', 'Pago actualizado con éxito');
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pago $pago)
    {
        $pago->delete();
        return redirect(route('pagos.index'))->with('status', 'Pago eliminado con éxito');
    }
}
