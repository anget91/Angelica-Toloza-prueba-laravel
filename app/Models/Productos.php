<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table ='productos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable =[
        'id',
        'estado',
        'kit',
        'barcode',
        'nombre',
        'presentacion',
        'descripcion',
        'foto',
        'peso',
    ];
}
