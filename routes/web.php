<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/posts/{post}', function($post) {
//     $posts = [
//         'first' => 'Hi First',
//         'second' => 'Hi Second' 
//     ];
//     // return view('post',[
//     //     'post' => $posts[$post] ?? "Nothing here yet",
//     // ]);
//     if(! array_key_exists($post, $posts)) {
//         abort(404, 'Sorry, That post was not found.'); 
//     }
//     return view('post',[
//         'post' => $posts[$post],
//     ]);
// });

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/contact', function () {
    // $articles = App\Article::all();
    // $articles = App\Article::take(2)->get();
    // $articles = App\Article::paginate(2);
    // $articles = App\Article::latest()->get();
    // return $articles;
    // return view('contact', [
    //     'articles' => $articles
    // ]);
    return view('contact');
});

// Route::get('/about', function () {
//     return view('about', [
//         'articles' => App\Article::take(2)->latest()->get()
//     ]);
    
// });

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');
// Route::resource('/articles', 'ArticlesController');