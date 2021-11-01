<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroTramite extends Model
{
    use HasFactory;
    protected $fillable = ['registroOrden'];

    function registroPersonas()
    {
        return $this->belongsToMany(PersonaTramite::class, 'descripcion_personas');
    }
    function registroZonas()
    {
        return $this->belongsToMany(ZonaTramite::class, 'descripcion_zonas');
    }
    function registroTipo()
    {
        return $this->belongsToMany(TipoTramite::class, 'descripcion_tipos');
    }
    function fechaResolucion()
    {
        return $this->belongsToMany(FechaResolucion::class, 'descripcion_fechas');
    }
    function planoTramite()
    {
        return $this->belongsToMany(PlanoTramite::class, 'descripcion_planos');
    }
    function registroSupTotal()
    {
        return $this->belongsToMany(UnidadTramite::class, 'superficie_totals')->withPivot('superficieTotal');
    }
    function registroSupAfectada()
    {
        return $this->belongsToMany(UnidadTramite::class, 'superficie_afectadas')->withPivot('superficieAfectada');
    }
    function registroSupAvance()
    {
        return $this->belongsToMany(UnidadTramite::class, 'superficie_avances')->withPivot('superficieAvance');
    }
    function registroSupAreaVerde()
    {
        return $this->belongsToMany(UnidadTramite::class, 'superficie_area_verdes')->withPivot('superficieAreaVerde');
    }
    function folderTramite()
    {
        return $this->hasMany(FolderTramite::class, 'id');
    }
    function numeroTramite()
    {
        return $this->hasMany(NumeroTramite::class, 'id');
    }
    function catastroTramite()
    {
        return $this->hasMany(CatastroTramite::class, 'id');
    }
    function registroResolucion()
    {
        return $this->hasMany(ResolucionTramite::class, 'id');
    }
    function responsableTramite()
    {
        return $this->hasMany(ResponsableTramite::class, 'id');
    }
    function observacionTramite()
    {
        return $this->hasMany(ObservacionesTramite::class, 'id');
    }
}
