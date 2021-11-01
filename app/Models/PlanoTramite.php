<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanoTramite extends Model
{
    use HasFactory;
    protected $fillable = ['codigoPlano', 'nombrePlano', 'planoTramite'];

    function registroTramites()
    {
        return $this->belongsToMany(RegistroTramite::class, 'descripcion_planos');
    }
}
