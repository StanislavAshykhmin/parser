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


Route::get('/home', function () {
    return redirect('/dashboard');
});
Auth::routes();

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');
    Route::get('/dashboard/graphic/{id}/{from?}/{before?}', 'Dashboard\DashboardController@getGraphics')->name('select');
    Route::get('/tags', 'Dashboard\TagsController@index')->name('tags');
    Route::post('/tag/create', 'Dashboard\TagsController@store')->name('create');
    Route::delete('/tag/delete/{id}', 'Dashboard\TagsController@destroy')->name('delete');
    Route::get('/parser/{tag}', 'Parser\ParserController@getContent')->name('content');
    Route::get('/tag/{id}', 'Dashboard\TagsController@show')->name('tag');
    Route::get('/systems', 'Dashboard\CmsController@index')->name('systems');
    Route::get('/messages', 'Dashboard\MessageController@index')->name('message');
    Route::get('/messages/send/{id}', 'Mail\MailController@send')->name('send');
    Route::post('/messages/create', 'Dashboard\MessageController@store')->name('message_create');
    Route::get('/messages/update/{id}', 'Dashboard\MessageController@edit')->name('edit');
    Route::post('/messages/update', 'Dashboard\MessageController@update')->name('update');
    Route::delete('/messages/delete/{id}', 'Dashboard\MessageController@destroy')->name('message_delete');
    Route::get('/systems/{id}', 'Dashboard\CmsController@show')->name('sites');
    Route::get('/site/{id}', 'Dashboard\EmailController@show')->name('email');
});



Route::group(['middleware' => ['web']], function () {
    Route::get('/messages/check/{id}', 'Mail\MailController@checkMail')->name('check');
    Route::post('/landing/contact', 'Landing\LandingController@contact')->name('contact');
    Route::get('/', 'Landing\LandingController@index')->name('landing');
});
