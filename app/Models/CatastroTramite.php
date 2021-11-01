<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatastroTramite extends Model
{
    use HasFactory;
    protected $fillable = ['registro_tramite_id', 'codigoCatastral'];
    function registroTramite()
    {
        return $this->belongsTo(RegistroTramite::class, 'registro_tramite_id');
    }
}
