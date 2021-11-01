<?php

namespace App\Http\Controllers;

use App\Models\PersonaTramite;
use App\Models\RegistroTramite;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function controllerMethod()
    {
        return response()->json([
            'msg' => 'Msg del json'
        ]);
    }
    public function store(Request $request)
    {
        $registroTramite = RegistroTramite::create([
            'registroOrden' => $request->input('registroOrden')
        ]);
        // $persona = PersonaTramite::create([
        //     'identificacion' => $request->input('identificacion'),
        //     'nombre' => $request->input('nombre')
        // ]);
        return $registroTramite;
    }
}
