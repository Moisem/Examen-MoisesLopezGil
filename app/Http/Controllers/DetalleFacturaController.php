<?php

namespace App\Http\Controllers;

use App\Detalle_factura;
use Illuminate\Http\Request;
use Illuminate\Http\Request\detalle_facturaRequest;

class DetalleFacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalle_factura= Detalle_factura::all();
        return response()->json($detalle_factura);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detalle_factura = new Detalle_factura;
        $detalle_factura->create($request->all());
        return response()->json($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detalle_factura  $detalle_factura
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_deta=Detalle_factura::find($id);
        return ($id_deta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detalle_factura  $detalle_factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Detalle_factura $detalle_factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detalle_factura  $detalle_factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Detalle_factura::find($id)->update($request->all());
        return  $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detalle_factura  $detalle_factura
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalle_factura = Detalle_factura::find($id);
        $detalle_factura->delete();
        return "El detalle de la factura se elimino con existo";
    }
}
