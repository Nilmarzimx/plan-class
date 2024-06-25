<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ['Autor',
                            'Titulo',
                            'Subtitulo',
                            'Edicao',
                            'Editora',
                            'Ano_Da_Publicacao'];
}
