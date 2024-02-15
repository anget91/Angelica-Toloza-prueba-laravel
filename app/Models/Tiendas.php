<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiendas extends Model
{
    protected $table ='tiendas';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable =[
        'id',
        'estado',
        'nombre',
        'descripcion',
        'telefono',
        'direccion',
        'direccion_anexo',
        'direccion_barrio',
        'calificacion',
        'calificacion_cantidad',
        'impuestos',
        'dias_trabajados'
    ];
}
