<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FechaResolucion extends Model
{
    use HasFactory;
    protected $fillable = ['fecha'];

    function registroTramites()
    {
        return $this->belongsToMany(RegistroTramite::class, 'descripcion_fechas');
    }
}
