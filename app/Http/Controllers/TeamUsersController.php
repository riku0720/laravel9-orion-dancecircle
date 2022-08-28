<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orion\Http\Controllers\RelationController;
use Orion\Concerns\DisableAuthorization;

class TeamUsersController extends RelationController
{
    use DisableAuthorization;
    protected $model = "App\Models\Team"; //User::class

    /**
     * Name of the relationship as it is defined on the Post model
     */
    protected $relation = 'users';
}
