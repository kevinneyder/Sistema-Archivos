<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FolderTramite extends Model
{
    use HasFactory;
    protected $fillable = ['registro_tramite_id', 'numeroFolder'];
    function registroTramite()
    {
        return $this->belongsTo(RegistroTramite::class, 'registro_tramite_id');
    }
}
