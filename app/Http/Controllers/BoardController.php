<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use App\Models\Board;
use App\Models\Comment2;

class BoardController extends Controller
{
    use DisableAuthorization;

    public function index()
    {
        $boards = Board::all()->orderBy('created_at', 'desc')->paginate(5);
        return view('bbs.index')->with([
            'boards' => $boards,
         ]);
    }
}
