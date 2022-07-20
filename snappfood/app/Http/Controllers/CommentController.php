<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCommentsRequest;

class CommentController extends Controller
{

    public function store(StoreCommentsRequest $request)
    {
        dd($request->validated());
        
    }



}
