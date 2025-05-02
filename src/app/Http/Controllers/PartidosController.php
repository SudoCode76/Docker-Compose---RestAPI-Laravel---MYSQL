<?php

namespace App\Http\Controllers;

use App\Models\Partidos;
use Illuminate\Http\Request;

class PartidosController extends Controller
{
    public function index()
    {
        $items= Partidos::all();
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $items= Partidos::create($request->all());
        return response()->json($items, 201);
    }

    public function show(string $id)
    {
        $items= Partidos::find($id);
        if (!$items) {
            return response()->json(['message' => 'Partido no encontrado'], 404);
        }
        return response()->json($items);
    }

    public function update(Request $request, string $id)
    {
        $items= Partidos::find($id);
        if (!$items) {
            return response()->json(['message' => 'Partido no encontrado'], 404);
        }
        $items->update($request->all());
        return response()->json($items);
    }

    public function destroy(string $id)
    {
        $items= Partidos::find($id);
        if (!$items) {
            return response()->json(['message' => 'Partido no encontrado'], 404);
        }
        $items->delete();
    }
}
