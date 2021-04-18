@extends('layout')

@section('content')
    @forelse ($articles as $article)
        <div class="col-lg-12" style="margin-bottom:2rem">
            <h5 class="fg-primary">
                {{-- <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a> --}}
                <a href="{{ $article->path() }}">{{ $article->title }}</a>
            </h5>
            <hr>
            <p>{{ $article->excerpt }}</p>
            <p>{{ $article->body }}</p>
        </div>
        @empty 
            <p>No revelant articles yet.</p>
    @endforelse
@endsection