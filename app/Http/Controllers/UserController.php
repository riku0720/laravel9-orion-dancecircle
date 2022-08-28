<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use App\Models\User;

class UserController extends Controller
{
    use DisableAuthorization;

    protected $model = User::class;

    public function searchableBy() : array
    {
        return ['name'];
    }


}
