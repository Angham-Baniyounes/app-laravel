<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $container = new \App\Container();

//     $container->bind('example', function() {
//         return new \App\Example();
//     });

//     $example = $container->resolve('example');

//     $example->go();
// });
// app()->bind('example', function () {
//     // $foo = config('services.foo');
//     // return new \App\Example($foo);
//     return new \App\Example();
// });
// Route::get('/', function () {
//     $example = resolve('example');
//     ddd($example);
// });
// Route::get('/', function () {
//     $example = resolve(App\Example::class);
//     // $example = app()->make(App\Example::class);
//     ddd($example);
// });
// Route::get('/', function (App\Example $example) {
//     ddd($example);
// });
// app()->bind('App\Example', function () {
//     $collaborater = new \App\Collaborator();
//     $foo = 'foobar';
//     return new \App\Example($collaborater, $foo);
// });
Route::get('/', 'PagesController@home');

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

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');
// Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('payments/create', 'PaymentController@create')->middleware('auth');
Route::post('payments/', 'PaymentController@store')->middleware('auth');

// Route::get('payments/create', 'PaymentController@create');
// Route::post('payments', 'PaymentController@store');