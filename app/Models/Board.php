<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    public function Comment(){

        return $this->hasMany('App\Models\Comment', 'board_id');
    }
}
