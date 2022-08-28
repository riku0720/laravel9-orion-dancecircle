<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commet extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'commetable_id',
        'commetable_type',
    ];
}
