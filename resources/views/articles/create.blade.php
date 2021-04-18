@extends('layout')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
@endsection
@section('content')
    <div class="col-lg-12">
        <h1> Create Article </h1>
        <form action="/articles" method="POST">
            @csrf
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class='control'>
                    {{-- <input class="input {{$errors->has('title') ? 'is-danger' : ''}}" type="text" name="title" id="title"> --}}
                    {{-- @if ($errors->has('title')) 
                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @endif --}}
                    <input class="input @error('title')is-danger @enderror" type="text" name="title" id="title"
                    value="{{ old('title') }}">
                    @error('title')
                        <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @enderror
                </div
                </div>
            </div>
            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>
                <div class='control'>
                    <textarea name="excerpt" id="excerpt" class="textarea @error('excerpt')is-danger @enderror">
                        {{ old('excerpt') }}
                    </textarea>
                    @error('excerpt')
                        <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label" for="body">Body</label>
                <div class='control'>
                    <textarea name="body" id="body" class="textarea @error('body')is-danger @enderror">
                        {{ old('body') }}
                    </textarea>
                    @error('body')
                        <p class="help is-danger">{{ $errors->first('body') }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label" for="tags">Tags</label>
                <div class='select is-multiple control'>
                    <select name="tags[]" id="tags"  multiple>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                    @error('tags')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="field is-grouped">
                <div class='control'>
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection