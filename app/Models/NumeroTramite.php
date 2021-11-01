<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumeroTramite extends Model
{
    use HasFactory;
    protected $fillable = ['registro_tramite_id', 'numero'];
    function registroTramite()
    {
        return $this->belongsTo(RegistroTramite::class, 'registro_tramite_id');
    }
}
