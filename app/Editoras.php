<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editoras extends Model
{
    protected $table = "editoras";
    protected $guarded = [
        'id',
        'nome_fantasia',
        'cnpj',
        'created_at',
        'updated_at',
    ];
}
