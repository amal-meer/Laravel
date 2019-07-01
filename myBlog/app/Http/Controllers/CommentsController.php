<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct(){

        $this->middleware('auth')->except('index','show');

    }

    public function store(Articles $Article,Request $request)
    {
        Comments::create(['user_id' => auth()->id(), 'articles_id' => $Article->id,'Content'=> $request->comment]);

        return back();
    }
}
