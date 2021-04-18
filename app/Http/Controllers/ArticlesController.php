<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;

class ArticlesController extends Controller
{
    // public function index() {
    //     $articles = Article::latest()->get();
    //     return view('articles.index', ['articles' => $articles]);
    // }
    // public function index() {
    //     if (request('tag')) {
    //         $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;

    //         return $articles;
    //     }
    //     $articles = Article::latest()->get();
    //     return view('articles.index', ['articles' => $articles]);
    // }
    public function index() {
        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get();
        }
        return view('articles.index', ['articles' => $articles]);
    }

    // public function show($id) {
    //     $article = Article::findOrFail($id);
    //     return view('articles.show', ['article' => $article]);
    // }
    public function show(Article $article) {
        return view('articles.show', ['article' => $article]);
    }

    // public function store() {
    //     request()->validate([
    //         'title' => 'required',
    //         'excerpt' => 'required',
    //         'body' => 'required'
    //     ]);
    //     $article = new Article();
    //     $article->title = request('title');
    //     $article->excerpt = request('excerpt');
    //     $article->body = request('body'); 
    //     $article->save();
    //     return redirect('/articles');   
    // }
    // public function store() {
    //     request()->validate([
    //         'title' => 'required',
    //         'excerpt' => 'required',
    //         'body' => 'required'
    //     ]);
    //     Article::create([
    //         'title' => request('title'),
    //         'excerpt' => request('excerpt'),
    //         'body' => request('body') 
    //     ]);
    //     return redirect('/articles');   
    // }
    // public function store() {
    //     $validateAttributes = request()->validate([
    //         'title' => 'required',
    //         'excerpt' => 'required',
    //         'body' => 'required'
    //     ]);
    //     Article::create($validateAttributes);
    //     return redirect('/articles');   
    // }
    // public function store() {
    //     Article::create(request()->validate([
    //         'title' => 'required',
    //         'excerpt' => 'required',
    //         'body' => 'required'
    //     ]));
    //     return redirect('/articles');   
    // }
    // public function store() {
    //     Article::create($this->validateArticle());
    //     return redirect('/articles');   
    // }
    // public function store() {
    //     Article::create($this->validateArticle());
    //     return redirect(route('articles.index'));   
    // }
    // public function store() {
    //     $article = new Article($this->validateArticle());
    //     $article->user_id = 1;
    //     $article->save();
    //     $article->tags()->attach(request('tags'));
    //     return redirect(route('articles.index'));   
    // }
    public function store() {
        $this->validateArticle();
        $article = new Article(request(['title', 'excerpt', 'body']));
        $article->user_id = 1;
        $article->save();
        $article->tags()->attach(request('tags'));
        return redirect(route('articles.index'));   
    }

    // public function create() {
    //     return view('articles.create');
    // }
    // public function create() {
    //     $tags = Tag::all();
    //     return view('articles.create', ['tags' => $tags]);
    // }
    public function create() {
        return view('articles.create', [
            'tags' => Tag::all()
        ]);
    }

    // public function edit($id) {
    //     $article = Article::findOrFail($id);
    //     return view('articles.edit', ['article' => $article]);
    // }
    public function edit(Article $article) {
        return view('articles.edit', ['article' => $article]);
    }

    // public function update(Request $request, $id) {
    //     request()->validate([
    //         'title' => 'required',
    //         'excerpt' => 'required',
    //         'body' => 'required'
    //     ]);
    //     $article = Article::findOrFail($id);
    //     $article->title = request('title');
    //     $article->excerpt = request('excerpt');
    //     $article->body = request('body'); 
    //     $article->save();
    //     return redirect('/articles/'. $article->id); 
    // }
    // public function update(Article $article) {
    //     request()->validate([
    //         'title' => 'required',
    //         'excerpt' => 'required',
    //         'body' => 'required'
    //     ]);
    //     $article->title = request('title');
    //     $article->excerpt = request('excerpt');
    //     $article->body = request('body'); 
    //     $article->save();
    //     return redirect('/articles/'. $article->id); 
    // }
    // public function update(Article $article) {
    //     $validateAttributes = request()->validate([
    //         'title' => 'required',
    //         'excerpt' => 'required',
    //         'body' => 'required'
    //     ]);
    //     $article->update($validateAttributes);
    //     return redirect('/articles/'. $article->id); 
    // }
    // public function update(Article $article) {
    //     $article->update(request()->validate([
    //         'title' => 'required',
    //         'excerpt' => 'required',
    //         'body' => 'required'
    //     ]));
    //     return redirect('/articles/'. $article->id); 
    // }
    // public function update(Article $article) {
    //     $article->update($this->validateArticle());
    //     return redirect('/articles/'. $article->id); 
    // }
    // public function update(Article $article) {
    //     $article->update($this->validateArticle());
    //     return redirect(route('articles.show', $article)); 
    // }
    public function update(Article $article) {
        $article->update($this->validateArticle());
        return redirect($article->path()); 
    }

    public function destroy($id) {
        //
    }

    // public function validateArticle() {
    //     return request()->validate([
    //         'title' => 'required',
    //         'excerpt' => 'required',
    //         'body' => 'required'
    //     ]);
    // }
    public function validateArticle() {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
