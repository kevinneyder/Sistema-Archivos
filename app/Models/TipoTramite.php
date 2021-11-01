<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoTramite extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion'];

    function registroTramites()
    {
        return $this->belongsToMany(RegistroTramite::class, 'descripcion_tipos');
    }
}
