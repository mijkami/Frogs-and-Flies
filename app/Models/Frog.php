<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Particip extends Model
{


    protected $fillable = [
        'game_id', 'user_id', 'created_at'
    ];


}
