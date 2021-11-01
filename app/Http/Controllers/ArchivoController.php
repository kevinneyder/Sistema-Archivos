<?php

namespace App\Http\Controllers;

use App\Models\NumeroTramite;
use App\Models\RegistroTramite;
use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RegistroTramite::with(
            'registroPersonas',
            'registroZonas',
            'registroTipo',
            'fechaResolucion',
            'folderTramite',
            'numeroTramite',
            'planoTramite',
            'registroSupTotal',
            'registroSupAfectada',
            'registroSupAvance',
            'registroSupAreaVerde',
            'catastroTramite',
            'registroResolucion',
            'responsableTramite',
            'observacionTramite',
        )->get();
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
        $registroTramite = RegistroTramite::create([
            $id = RegistroTramite::latest()->first()->id,
            'registroOrden' => $id + 1
        ]);
        return $registroTramite;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(RegistroTramite $data)
    {
        return response()->json($data);
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
    public function update(Request $request, RegistroTramite $data)
    {
        $data->fill($request->post())->save();
        return response()->json([
            'registroTramite' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistroTramite $data)
    {
        $data->delete();
        return response()->json([
            'mensaje' => 'Eliminado'
        ]);
    }
}
