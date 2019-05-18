<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $tasks = [
        'Lend a dress',
        'rent a dress',
        'lend an abaya'
        ];

        return view('welcome',[
            'tasks' => $tasks,
        ]);
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

}
