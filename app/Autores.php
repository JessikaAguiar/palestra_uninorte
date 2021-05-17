<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autores extends Model
{
    protected $table = "autores";
    protected $guarded = [
        'id',
        'nome',
        'created_at',
        'updated_at',
    ];
}
