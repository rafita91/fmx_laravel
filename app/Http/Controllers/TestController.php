<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;


class TestController extends Controller
{
    public function view($id){
        $article = Article::find($id);
        
        //relaciones
        $article->category;
        $article->user;
        $article->tags;
        
        //mandar parámetros a la vista
        return view('test.index', ['article' => $article]);
    }
}
