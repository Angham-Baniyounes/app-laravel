@extends('layout')

@section('content')
    <div class="col-lg-12">
        <h1> {{ $article->title }} </h1>
        <p> {{ $article->body }} </p>
    </div>
    @foreach ($article->tags as $tag)
    <div class="col-lg-12" style="margin-bottom:2rem">
        <h5 class="fg-primary">
            {{-- <a href="/articles?tag={{ $tag->name }}">{{ $tag->name }}</a> --}}
            <a href="{{ route('articles.index', ['tag' => $tag->name]) }}">{{ $tag->name }}</a>
        </h5>
    </div>
    @endforeach
@endsection