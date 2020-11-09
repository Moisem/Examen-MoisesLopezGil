<?php

namespace App\Http\Controllers;

use App\Factura;
use Illuminate\Http\Request;
use Illuminate\Http\Request\facturaRequest;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factura = Factura::all();
        return response()->json($factura);
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
        $factura = new Factura;
        $factura->create($request->all());
        return response()->json($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_fact=Producto::find($id);
        return ($id_fact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        Factura::find($id)->update($request->all());
        return  $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $factura = Factura::find($id);
        $factura->delete();
        return "La factura se elimino con existo";
    }
}
