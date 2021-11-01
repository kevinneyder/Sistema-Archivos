<?php

namespace App\Http\Controllers;

use App\Models\RegistroTramite;
use App\Models\UnidadTramite;
use Illuminate\Http\Request;

class UnidadTramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = UnidadTramite::all();
        return response()->json($data);
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
        $data = UnidadTramite::create([
            'unidad' => $request->input('unidad'),
            'descripcion' => $request->input('descripcion')
        ]);
        $data->registroTramitesSupTotal()->attach(RegistroTramite::all()->last(), ['superficieTotal' => $request->input('superficieTotal')]);
        $data->registroTramitesSupAfectada()->attach(RegistroTramite::all()->last(), ['superficieAfectada' => $request->input('superficieAfectada')]);
        $data->registroTramitesSupAvance()->attach(RegistroTramite::all()->last(), ['superficieAvance' => $request->input('superficieAvance')]);
        $data->registroTramitesSupAreaVerde()->attach(RegistroTramite::all()->last(), ['superficieAreaVerde' => $request->input('superficieAreaVerde')]);

        return
            response()->json($data);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
