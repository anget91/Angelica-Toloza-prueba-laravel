<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiendas_productos extends Model
{
    
    protected $table ='tiendas_productos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable =[
        'id',
        'compra_maxima',
        'valor',
        'id_promocion',
        'id_tienda',
        'id_producto',
    ];
}
