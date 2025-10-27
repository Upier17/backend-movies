<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * 🌙 Muestra todas las películas (para la vista en navegador)
     */
    public function index()
    {
        // Obtiene todas las películas desde la base de datos
        $movies = Movie::all();

        // Retorna la vista 'index' con las películas
        return view('index', compact('movies'));
    }

    /**
     * 💫 Devuelve todas las películas en formato JSON (API)
     */
    public function showAll()
    {
        return response()->json(Movie::all());
    }

    /**
     * 💎 Muestra una película específica (API)
     */
    public function show($id)
    {
        return response()->json(Movie::findOrFail($id));
    }

    /**
     * 🪶 Crea una nueva película (API)
     */
    public function store(Request $request)
    {
        $movie = Movie::create($request->all());
        return response()->json($movie, 201);
    }

    /**
     * 🔮 Actualiza una película existente (API)
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
        return response()->json($movie, 200);
    }

    /**
     * ⚰️ Elimina una película (API)
     */
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return response()->json(['message' => 'Película eliminada correctamente.'], 200);
    }
}
