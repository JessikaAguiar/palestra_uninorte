<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generos extends Model
{
    protected $table = "generos";
    protected $guarded = [
        'id',
        'descricao',
        'created_at',
        'updated_at',
    ];
}
