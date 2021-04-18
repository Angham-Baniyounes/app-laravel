@extends('layout')
@section('content')
    <main class="bg-light">
        <div class="page-section pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card-page">
                            @foreach ($articles as $article)
                                <h5 class="fg-primary">
                                    <a href="/articles/{{$article->id}}">{{ $article->title }}</a>
                                </h5>
                                <hr>
                                <p>{{ $article->excerpt }}</p>
                                <p>{{ $article->body }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- .bg-light -->
@endsection