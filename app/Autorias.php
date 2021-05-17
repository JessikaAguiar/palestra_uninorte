<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autorias extends Model
{
    protected $table = "autorias";
    protected $guarded = [
        'id',
        'obra_id',
        'autor_id',
        'created_at',
        'updated_at',
    ];
}
