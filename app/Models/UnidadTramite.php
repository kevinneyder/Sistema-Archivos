<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadTramite extends Model
{
    use HasFactory;
    protected $fillable = ['unidad', 'descripcion'];

    function registroTramitesSupTotal()
    {
        return $this->belongsToMany(RegistroTramite::class, 'superficie_totals')->withPivot('superficieTotal');
    }
    function registroTramitesSupAfectada()
    {
        return $this->belongsToMany(RegistroTramite::class, 'superficie_afectadas')->withPivot('superficieAfectada');
    }
    function registroTramitesSupAvance()
    {
        return $this->belongsToMany(RegistroTramite::class, 'superficie_avances')->withPivot('superficieAvance');
    }
    function registroTramitesSupAreaVerde()
    {
        return $this->belongsToMany(RegistroTramite::class, 'superficie_area_verdes')->withPivot('superficieAreaVerde');
    }
}
