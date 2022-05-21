<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libretina extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'url_foto'
    ];
}
