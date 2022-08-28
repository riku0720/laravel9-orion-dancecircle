<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use App\Models\Commet;

class CommetsController extends Controller
{
    use DisableAuthorization;

    protected $model = Commet::class;

    //public function searchableBy() : array
    //{
    //    return ['body', 'commetable_id','commetable_type'];
    //}
}
