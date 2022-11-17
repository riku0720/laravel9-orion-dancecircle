<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\Pivot;

class Role_user extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'role_id',
    ];

    // protected $table = 'role_users';
    // protected $fillable = [
    //     'meta',
    // ];
    // protected $casts = [
    //     'meta'  => 'json',
    // ];
}
