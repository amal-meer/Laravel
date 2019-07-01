<?php

namespace App\Http\Controllers;

use App\Articles;

class UserArticlesController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }

    public function index()
    {
        $articles = Articles::where('user_id',auth()->id())->paginate(8);

        $title = 'my articles';

        return view('index',compact('articles'),compact('title'));

    }

}
