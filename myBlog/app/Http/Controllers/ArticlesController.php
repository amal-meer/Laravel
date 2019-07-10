<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Support\Facades\DB;


class ArticlesController extends Controller{


    public function __construct(){

        $this->middleware('auth')->except('index','show');
    }


    public function index()
    {
        $articles = DB::table('Articles')->orderBy('created_at','desc')->paginate(8);

        $title = 'all articles';

        return view("index",compact('articles'),compact('title'));
    }


    public function create()
    {
        return view("create");
    }


    public function store()
    {
        $attributes = $this->validateArticle();

        Articles::create(['user_id' => auth()->id()] + $attributes);

        return redirect('/UserArticles');

    }


    public function show(Articles $Article)
    {
        return view("show",compact('Article'));
    }


    public function edit(Articles $Article)
    {
        $this->authorize('update',$Article);

        return view("edit",compact('Article'));
    }


    public function update(Articles $Article)
    {
        $this->authorize('update',$Article);

        $Article->update($this->validateArticle());

        return redirect('/Articles/'.$Article->id);
    }


    public function destroy(Articles $Article)
    {
        $this->authorize('update',$Article);

        $Article->delete();

        return redirect('/UserArticles');
    }


    protected function validateArticle(){

        return request()->validate([
            'title' => ['required','min:3','max:255'],
            'content' => ['required','min:10']
        ]);
    }

}
