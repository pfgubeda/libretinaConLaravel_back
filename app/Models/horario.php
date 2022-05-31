<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    use HasFactory;
    protected $fillable = [
        'color',
        'titulo',
        'fecha_fin',
        'fecha_inicio',
        'hora_fin',
        'hora_inicio',
        'tipo',
        'libretina_id'
    ];
    public function libretina(){
        return $this->belongsTo(libretina::Class);
    }
}
