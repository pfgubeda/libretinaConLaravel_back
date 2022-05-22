<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nota extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'descripcion',
        'fecha',
        'tipo',
        'libretina_id'
    ];
    public function libretina(){
        return $this->belongsTo(libretina :: Class);
    }
}
