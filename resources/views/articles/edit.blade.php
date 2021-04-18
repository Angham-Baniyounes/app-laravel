@extends('layout')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
@endsection
@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>
                Update Article
            </h1>
            <form action="/articles/{{$article->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="field">
                    <label for="title" class="label">Title</label>
                    <div class='control'>
                        <input class="input" type="text" name="title" id="title" value="{{ $article->title }}">
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>
                    <div class='control'>
                        <textarea type="text" name="excerpt" id="excerpt">
                            {{ $article->excerpt }}
                        </textarea>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="body">Body</label>
                    <div class='control'>
                        <textarea type="text" name="body" id="body">
                            {{ $article->body }}
                        </textarea>
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class='control'>
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection