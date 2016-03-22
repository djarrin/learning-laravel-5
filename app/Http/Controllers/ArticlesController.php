<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\CreateArticleRequest;
use Carbon\Carbon;

use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
        //will only get articles who's published at date is before now
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);



        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(CreateArticleRequest $request)
    {
        Article::create($request->all());

        return redirect('articles');
    }
}
