<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Models\Tiendas;
use App\Models\Tiendas_productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function crearproducto(Request $request){
       $validar = $request->validate([
        'nombre' => 'required|max:60',
        'presentacion' => 'required|max:25'
       ]);
      
       if(Productos::find($request->id)){
        return 'El producto ya existe';
       }elseif(Productos::find($request->barcode))
       {
        return 'El barcode ya existe';
       }
       else {
        $nuevoproducto = new Productos();
        $nuevoproducto->id =$request->id;
        $nuevoproducto->estado =$request->estado;
        $nuevoproducto->kit =$request->kit;
        $nuevoproducto->barcode =$request->barcode;
        $nuevoproducto->nombre =$request->nombre;
        $nuevoproducto->presentacion =$request->presentacion;
        $nuevoproducto->descripcion =$request->descripcion;
        $nuevoproducto->foto =$request->foto;
        $nuevoproducto->peso =$request->peso;
        $nuevoproducto->save();
        return 'producto registrado';
       }
       
    }

   
}
