<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    /**
     * will show all articles that are available
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //will only get articles who's published at date is before now
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    /**
     * will show articles
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);



        return view('articles.show', compact('article'));
    }

    /**
     * will create areticles
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * will store articles
     * @param CreateArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateArticleRequest $request)
    {
        Article::create($request->all());

        return redirect('articles');
    }

    /**
     * will edit articles
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);


        return view('articles.edit', compact('article'));
    }


    public function update($id, Request $request)
    {
        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');
    }
}
