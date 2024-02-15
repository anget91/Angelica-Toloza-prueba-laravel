<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carritos extends Model
{
    protected $table ='carritos';
    protected $primaryKey = 'id';
    protected $timestamps = false;

    protected $fillable =[
        'id',
        'cantidad',
        'id_producto',
        'id_tienda',
        'id_user',
        'created_at'
    ];
}
