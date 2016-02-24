@extends('app')

@section('content')
    <h1>Articles</h1>

    @foreach($articles as $article)
        <article>
            <h2>
                <a href="{{url('ArticlesController@show', $article->id)}}">{{ $article->title }}</a>
            </h2>

            <div class="body">{{ $article->body }}</div>
            <div class="body">{{ $article->id }}</div>

        </article>

    @endforeach
@stop