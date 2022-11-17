<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Orion\Http\Controllers\RelationController;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;

class PostTagsController extends RelationController
{
    use DisableAuthorization;
    protected $model = "App\Models\Post";

    protected $relation = 'tags';
}
