<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $table ='pedidos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable =[
        'id',
        'instrucciones',
        'entrega_fecha',
        'valor_productos',
        'valor_envios',
        'valor_descuento',
        'valor_cupom',
        'impuestos',
        'valor_impuestos',
        'valor_final',
        'calificacion',
        'id_tienda',
        'direccion',
        'valor_comision',
        'id_user',
        'created_at',
    ];
}
