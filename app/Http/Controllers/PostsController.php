<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use App\Models\Post;


class PostsController extends Controller
{
    use DisableAuthorization;

    protected $model = Post::class;

    public function searchableBy() : array
    {
        return ['title', 'description'];
    }

}
