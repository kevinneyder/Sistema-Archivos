<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsableTramite extends Model
{
    use HasFactory;
    protected $fillable = ['registro_tramite_id', 'nombreResponsable'];
    function registroTramite()
    {
        return $this->belongsTo(RegistroTramite::class, 'registro_tramite_id');
    }
}
