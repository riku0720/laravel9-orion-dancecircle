<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orion\Http\Controllers\RelationController;
use Orion\Concerns\DisableAuthorization;

class RoleUsersController extends RelationController
{   /**
    * Fully-qualified model class name
    */
   use DisableAuthorization;
   protected $model = "App\Models\Role"; // or User::class

   /**
    * Name of the relationship as it is defined on the Post model
    */
   protected $relation = 'users';

}
