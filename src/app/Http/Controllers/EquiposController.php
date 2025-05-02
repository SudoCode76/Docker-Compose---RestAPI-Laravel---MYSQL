<?php

namespace App\Http\Controllers;

use App\Models\Equipos;
use Illuminate\Http\Request;

class EquiposController extends Controller
{

    public function index()
    {
        $items= Equipos::all();
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $items= Equipos::create($request->all());
        return response()->json($items, 201);
    }

    public function show(string $id)
    {
        $items= Equipos::find($id);
        if (!$items) {
            return response()->json(['message' => 'Equipo no encontrado'], 404);
        }
        return response()->json($items);
    }

    public function update(Request $request, string $id)
    {
        $items= Equipos::find($id);
        if (!$items) {
            return response()->json(['message' => 'Equipo no encontrado'], 404);
        }
        $items->update($request->all());
        return response()->json($items);
    }

    public function destroy(string $id)
    {
        $items= Equipos::find($id);
        if (!$items) {
            return response()->json(['message' => 'Equipo no encontrado'], 404);
        }
        $items->delete();
    }
}
