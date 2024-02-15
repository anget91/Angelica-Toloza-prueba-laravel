<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
       protected $table ='promociones';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable =[
        'id',
        'estado',
        'nombre',
        'imagen',
        'porcentaje',
        'dias_semana'

    ];
}
