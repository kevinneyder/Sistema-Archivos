<?php

use App\Http\Controllers\TestController;
use App\Models\PersonaTramite;
use App\Models\RegistroTramite;
use App\Models\TipoTramite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('registroTramite', App\Http\Controllers\ArchivoController::class);
Route::resource('registroPersonaTramite', App\Http\Controllers\PersonaTramiteController::class);
Route::resource('registroFolderTramite', App\Http\Controllers\FolderTramiteController::class);
Route::resource('registroNumeroTramite', App\Http\Controllers\NumeroTramiteController::class);
Route::resource('registroZonaTramite', App\Http\Controllers\ZonaTramiteController::class);
Route::resource('registroTipoTramite', App\Http\Controllers\TipoTramiteController::class);
Route::resource('registroUnidadTramite', App\Http\Controllers\UnidadTramiteController::class);
Route::resource('registroCatastroTramite', App\Http\Controllers\CatastroTramiteController::class);
Route::resource('registroFechaResolucion', App\Http\Controllers\FechaResolucionController::class);
Route::resource('registroResolucionTramite', App\Http\Controllers\ResolucionTramiteController::class);
Route::resource('registroResponsableTramite', App\Http\Controllers\ResponsableTramiteController::class);
Route::resource('registroObservacionesTramite', App\Http\Controllers\ObservacionesTramiteController::class);
Route::resource('registroPlanoTramite', App\Http\Controllers\PlanoTramiteController::class);



Route::get('persona', function () {
    $persona = PersonaTramite::all();
    return $persona;
});

Route::get('persona/{codPersonaTramite}', function ($codPersonaTramite) {
    $persona = PersonaTramite::findOrFail($codPersonaTramite);
    return $persona;
});

Route::post('appNuevo', function (Request $request) {
    $registroTramite = RegistroTramite::create([
        $id = RegistroTramite::latest()->first()->id,
        'registroOrden' => $id + 1
    ]);

    $persona = PersonaTramite::create([
        'identificacion' => $request->input('identificacion'),
        'nombre' => $request->input('nombre')
    ]);
    $tipo = TipoTramite::create([
        'nombre' => $request->input('nombreT')
    ]);
    $tipo->registroTramites()->attach(RegistroTramite::all()->last());
    $persona->registroTramites()->attach(RegistroTramite::all()->last());
    return
        DB::table('registro_tramites')->latest('registroOrden')->first();
});
