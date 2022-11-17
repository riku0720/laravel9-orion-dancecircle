<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orion\Http\Controllers\RelationController;
use Orion\Concerns\DisableAuthorization;

class TagPostsController extends RelationController
{
    use DisableAuthorization;
    protected $model = "App\Models\Tag";

    protected $relation = 'posts';
}
