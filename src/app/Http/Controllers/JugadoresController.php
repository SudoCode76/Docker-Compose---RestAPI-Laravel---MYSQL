<?php

namespace App\Http\Controllers;

use App\Models\Jugadores;
use Illuminate\Http\Request;

class JugadoresController extends Controller
{
    public function index()
    {
        $items= Jugadores::all();
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $items= Jugadores::create($request->all());
        return response()->json($items, 201);
    }

    public function show(string $id)
    {
        $items= Jugadores::find($id);
        if (!$items) {
            return response()->json(['message' => 'Jugador no encontrado'], 404);
        }
        return response()->json($items);
    }

    public function update(Request $request, string $id)
    {
        $items= Jugadores::find($id);
        if (!$items) {
            return response()->json(['message' => 'Jugador no encontrado'], 404);
        }
        $items->update($request->all());
        return response()->json($items);
    }

    public function destroy(string $id)
    {
        $items= Jugadores::find($id);
        if (!$items) {
            return response()->json(['message' => 'Jugador no encontrado'], 404);
        }
        $items->delete();
    }
}
