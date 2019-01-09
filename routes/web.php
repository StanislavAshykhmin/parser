<?php

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
    return redirect('/login');
});
Route::get('/home', function () {
    return redirect('/dashboard');
});
Auth::routes();

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');
    Route::get('/dashboard/graphic/{id}/{from?}/{before?}', 'Dashboard\DashboardController@getGraphics')->name('select');
    Route::get('/tags', 'Dashboard\TagsController@index')->name('tags');
    Route::get('/tag/create', 'Dashboard\TagsController@store')->name('create');
    Route::delete('/tag/delete/{id}', 'Dashboard\TagsController@destroy')->name('delete');
    Route::get('/parser/{tag}', 'Parser\ParserController@getContent')->name('content');
    Route::get('/tag/{id}', 'Dashboard\TagsController@show')->name('tag');
});

