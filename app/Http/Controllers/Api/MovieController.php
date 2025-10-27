<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    // 🌙 Método para la vista del navegador
    public function index()
    {
        // Obtiene todas las películas desde la base de datos
        $movies = Movie::all();

        // Muestra la vista Blade con los datos
        return view('index', compact('movies'));
    }

    // 💫 Método para la API (devuelve JSON real para Angular)
    public function indexJson()
    {
        $movies = Movie::all();
        return response()->json($movies, 200);
    }

    // 💫 GET - Obtener una película específica por ID
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return response()->json($movie, 200);
    }

    // 🪶 POST - Crear una nueva película
    public function store(Request $request)
    {
        $movie = Movie::create($request->all());
        return response()->json($movie, 201);
    }

    // 🔮 PUT - Actualizar una película existente
    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
        return response()->json($movie, 200);
    }

    // ⚰️ DELETE - Eliminar una película
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return response()->json(['message' => 'Película eliminada correctamente.'], 200);
    }
}
