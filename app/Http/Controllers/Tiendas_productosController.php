<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Tiendas;
use App\Models\Tiendas_productos;
use Illuminate\Http\Request;

class Tiendas_productosController extends Controller
{
    public function crear(Request $request){
        $validar = $request->validate([
            'valor' => 'required|numeric',
            'compra_maxima' => 'required|numeric'
           ]);

        if(!Tiendas::find($request->id_tienda)){
            return 'la tienda no existe';
        }elseif(!Productos::find($request->id_producto)){
            return 'el producto no existe';
        }else{
            $nuevoproducto = new Tiendas_productos();
            $nuevoproducto->id = $request->id;
            $nuevoproducto->compra_maxima = $request->compra_maxima;
            $nuevoproducto->valor = $request->valor;
            $nuevoproducto->id_promocion = $request->id_promocion;
            $nuevoproducto->id_tienda = $request->id_tienda;
            $nuevoproducto->id_producto = $request->id_producto;
            $nuevoproducto->save();
            return 'se guardo el producto';
        }
    }
}
