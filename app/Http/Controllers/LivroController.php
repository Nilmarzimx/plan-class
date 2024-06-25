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
        $validated = $request->validate([
            'Titulo' => 'required|string|max:255',
            'Autor' => 'required|string|max:255',
            'Subtitulo' => 'required|string|max:255',
            'Edicao' => 'required|string|max:255',
            'Editora' => 'required|string|max:255',
            'Ano_De_Publicacao' => 'required|max:2024',
        ]);

        $livro = new Livro();
        $livro->create([
            'Titulo' => $request->Titulo,
            'Autor' => $request->Autor,
            'Subtitulo' => $request->Subtitulo,
            'Edicao' => $request->Edicao,
            'Editora' => $request->Editora,
            'Ano_De_Publicacao' => $request->Ano_De_Publicacao,
        ]);
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
