<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonaTramite extends Model
{
    use HasFactory;
    protected $fillable = ['identificacion', 'nombre'];

    function registroTramites()
    {
        return $this->belongsToMany(RegistroTramite::class, 'descripcion_personas');
    }
}
