<?php

namespace App\Http\Controllers;
use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        $items= Productos::all();
        return response()->json($items);
    }
    public function store(Request $request){
        $items= Productos::create($request->all());
        return response()->json($items, 201);
    }
    public function show(string $id){
        $items= Productos::find($id);
        if (!$items) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }
        return response()->json($items);
    }
    public function update(Request $request, string $id){
        $items= Productos::find($id);
        if (!$items) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }
        $items->update($request->all());
        return response()->json($items);
    }
    public function destroy(string $id){
        $items= Productos::find($id);
        if (!$items) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }
        $items->delete();
        // $items= Productos::destroy($id);
        return response()->json(['message' => 'Producto eliminado'], 204);
    }
}
