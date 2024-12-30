<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class CarritoController extends Controller {
    public function index() {
        $carrito = session()->get('carrito', []);
        
        $total = array_reduce($carrito, function ($carry, $item) {
            return $carry + ($item['precio'] * $item['cantidad']);
        }, 0);

        return view('producto.carrito', compact('carrito', 'total'));
    }

    public function agregar(Request $request) {
        $request->validate([
            'talle' => 'required|exists:talles,medida',
        ]);

        $producto = Producto::find($request->producto_id);

        if (!$producto) {
            return redirect()->back()->with('fail', 'Producto no encontrado.');
        }

        $carrito = session()->get('carrito', []);

        //if($carrito[$producto->id_producto]['talle'] == $request['talle']){} habria que revisar si un talle ya esta en el carrito para que guarde con otro talle

        if (isset($carrito[$producto->id_producto])) { //condicion solo revisa si hay un producto con el mismo id
            $carrito[$producto->id_producto]['cantidad'] += $request->input('cantidad', 1);
        } else {
            $carrito[$producto->id_producto] = [
                'nombre' => $producto->nombre_producto,
                'precio' => $producto->precio_producto,
                'talle' => $request->input('talle'),
                'cantidad' => $request->input('cantidad', 1),
                'imagen' => $producto->imagenes()->first()->url ?? null,
            ];
        }

        session()->put('carrito', $carrito); // Guarda el carrito actualizado en la sesión

        return redirect()->back()->with('success', 'Producto agregado al carrito.');
    }

    public function eliminar(Request $request) {
        $carrito = session()->get('carrito', []);

        if (isset($carrito[$request->producto_id])) {
            unset($carrito[$request->producto_id]);
            session()->put('carrito', $carrito);
        }

        return redirect()->back()->with('success', 'Producto eliminado del carrito.');
    }

    public function finalizar() {
        // Acá iría un sistema de pagos, pero no sé muy bien cómo implementarlo (creo que se escapa de nuestro scope).

        session()->forget('carrito');

        return redirect()->route('carrito.index')->with('success', 'Compra realizada con éxito.');
    }
}
