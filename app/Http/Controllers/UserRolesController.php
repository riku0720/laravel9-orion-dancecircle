<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orion\Http\Controllers\RelationController;
use Orion\Concerns\DisableAuthorization;

class UserRolesController extends RelationController
{
    use DisableAuthorization;
    protected $model = "App\Models\User"; // or User::class

   /**
    * Name of the relationship as it is defined on the Post model
    */
   protected $relation = 'roles';
}
