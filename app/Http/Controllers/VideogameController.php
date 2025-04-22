<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videogame;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videogames = Videogame::all(); // Pega todos os videogames
        return view('videogames.index', compact('videogames')); // Retorna a view com a lista de videogames
    }

    public function show($id)
    {
        $videogame = Videogame::findOrFail($id); // Pega o videogame pelo ID
        return view('videogames.show', compact('videogame')); // Retorna a view de detalhes
    }

    public function create()
    {
        return view('videogames.create'); // Retorna o formulário de criação
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'brand' => 'required|string',
            'release_year' => 'required|integer',
        ]);

        Videogame::create($request->all()); // Cria um novo videogame no banco
        return redirect()->route('videogames.index'); // Redireciona para a lista de videogames
    }

    public function edit(string $id)
    {
        $videogame = Videogame::findOrFail($id); // Pega o videogame pelo ID
        return view('videogames.edit', compact('videogame')); // Retorna o formulário de edição
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string',
            'brand' => 'required|string',
            'release_year' => 'required|integer',
        ]);

        $videogame = Videogame::findOrFail($id);
        $videogame->update($request->all()); // Atualiza o videogame no banco
        return redirect()->route('videogames.index'); // Redireciona para a lista de videogames 
    }

    public function destroy(string $id)
    {
        $videogame = Videogame::findOrFail($id);
        $videogame->delete(); // Exclui o videogame do banco
        return redirect()->route('videogames.index'); // Redireciona para a lista de videogames
    }
}

