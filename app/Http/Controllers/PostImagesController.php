<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\RelationController;

class PostImagesController extends RelationController
{
    use DisableAuthorization;
    protected $model = "App\Models\Post";

    protected $relation = 'images';
}
