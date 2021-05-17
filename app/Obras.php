<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obras extends Model
{
    protected $table = "obras";
    protected $guarded = [
        'id',
        'titulo',
        'genero_id',
        'created_at',
        'updated_at',
    ];
}
