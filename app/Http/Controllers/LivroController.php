<?php

namespace App\Http\Controllers;

use App\Http\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LivroController extends Controller
{
    
    public function index()
    {
      $livros = Livro::all();
      return view('livros.index', compact('livros'));
    }
    
    public function create()
    {
        //
    }
  
    public function store(Request $request)
    {
        //
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
