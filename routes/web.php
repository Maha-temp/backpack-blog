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

route::get('/about', function() {
    return view('about',[
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});


Route::get('/test', function () {
    return view('test');
});


Route::get('/contact', function () {
    return view('contact');
});

route::get('/articles','ArticleController@index')->name('articles.index');
route::post('/articles','ArticleController@store');
route::get('/articles/create','ArticleController@create');
route::get('/articles/{article}','ArticleController@show')->name('articles.show');
route::get('/articles/{article}/edit','ArticleController@edit');
route::put('/articles/{article}','ArticleController@update');

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');