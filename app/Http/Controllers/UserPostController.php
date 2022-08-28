<?php

namespace App\Http\Controllers;

use Orion\Concerns\DisableAuthorization;
//use App\Http\Controllers\Controller;
use Orion\Http\Controllers\RelationController;
use Illuminate\Http\Request;


class UserPostController extends RelationController
{
    use DisableAuthorization;
     /**
     * Fully-qualified model class name
     */
    protected $model = "App\Models\User"; //User::class

    /**
     * Name of the relationship as it is defined on the Post model
     */
    protected $relation = 'posts';
    //protected $relation = 'users';
}
