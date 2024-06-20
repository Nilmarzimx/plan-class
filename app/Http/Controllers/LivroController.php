<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    
    public function index()
    {
      $livros = Livro::all();
      return view('livros.index', compact('livros'));
    }
    
    public function create()
    {
        return view('livros.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|min:5|max:150',
            'autor' => 'required|string|min:10|max:50',
            'subtitulo' => 'required|string|min:5|max:100',
            'edição' => 'required|string|min:5|max:100',
            'editora' => 'required|string|min:5|max:50',
            'ano de publicaçao' => 'required|integer|min:4',
        ]);

        livro::create($request->all());
        return redirect()->route('livros.index');

    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
