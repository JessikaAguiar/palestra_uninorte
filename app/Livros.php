<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    protected $table = "livros";
    protected $guarded = [
        'id',
        'data_aquisicao',
        'edicao',
        'obra_id',
        'editora_id',
        'created_at',
        'updated_at',
    ];
}
