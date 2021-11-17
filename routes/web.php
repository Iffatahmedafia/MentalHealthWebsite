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



Route::get('/', 'App\Http\Controllers\TestController@index')->name('index');


Route::get('/about', 'App\Http\Controllers\TestController@about')->name('about');
Route::get('/services', 'App\Http\Controllers\TestController@services')->name('services');
Route::get('/contact', 'App\Http\Controllers\TestController@contact')->name('contact');
Route::get('/landing/{id}', 'App\Http\Controllers\TestController@landing')->name('landing');
Route::get('/register', 'App\Http\Controllers\TestController@register')->name('register');
Route::get('/allevents', 'App\Http\Controllers\TestController@allevents')->name('allevents');
Route::get('/blog', 'App\Http\Controllers\TestController@blog')->name('blog');
Route::get('/blogs', 'App\Http\Controllers\TestController@blogs')->name('blogs');
Route::get('/favs/{bid}', 'App\Http\Controllers\TestController@favs')->name('favs');
Route::get('/event', 'App\Http\Controllers\TestController@event')->name('event');
Route::post('/add', 'App\Http\Controllers\TestController@add')->name('add');
Route::get('/likes/{uid}/{eid}', 'App\Http\Controllers\TestController@likes')->name('likes');
Route::get('/getevent', 'App\Http\Controllers\FullCalendarController@getevent')->name('getevent');
Route::post('/createevent','App\Http\Controllers\FullCalendarController@createEvent');
Route::post('/deleteevent','App\Http\Controllers\FullCalendarController@deleteEvent');
Route::get('/login', 'App\Http\Controllers\TestController@login')->name('login');
Route::get('/forget-password', 'App\Http\Controllers\TestController@getEmail')->name('getEmail');
Route::post('/forget-password', 'App\Http\Controllers\TestController@postEmail')->name('postEmail');
Route::get('/reset-password/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@getPassword');
Route::post('/reset-password', 'App\Http\Controllers\Auth\ResetPasswordController@updatePassword');
Route::get('/logout', 'App\Http\Controllers\TestController@logout')->name('logout');
Route::post('/save', 'App\Http\Controllers\TestController@save')->name('save');
Route::post('/check', 'App\Http\Controllers\TestController@check')->name('check');
Route::get('/admin/dashboard', 'App\Http\Controllers\TestController@dashboard')->name('dashboard');
Route::get('/admin/appointments','App\Http\Controllers\TestController@showapp')->name('app');
Route::get('/admin/users','App\Http\Controllers\TestController@showusers')->name('users');
Route::get('/admin/therapists','App\Http\Controllers\TestController@showtherapists')->name('therapists');
Route::get('/takeappointment/{id}', 'App\Http\Controllers\TestController@takeapp')->name('takeapp');
Route::post('/checkdate', 'App\Http\Controllers\TestController@checkdate')->name('checkdate');
Route::post('/store', 'App\Http\Controllers\TestController@store')->name('store');
Route::get('/therapist/{id}','App\Http\Controllers\TestController@showtherapist')->name('therapist');
Route::post('/therapists','App\Http\Controllers\TestController@therapists')->name('therapists');
Route::get('/suggestion', 'App\Http\Controllers\TestController@suggestion')->name('suggestion');
Route::get('/field','App\Http\Controllers\TestController@showfield')->name('field');
Route::get('/regtherapist','App\Http\Controllers\TestController@regtherapist')->name('regtherapist');
Route::get('/admin/appointments/approve/{id}', 'App\Http\Controllers\TestController@approve')->name('approve');
Route::get('/admin/appointments/reject/{id}', 'App\Http\Controllers\TestController@reject')->name('reject');
Route::get('/account','App\Http\Controllers\TestController@showaccount')->name('account');
Route::get('/profile/{id}','App\Http\Controllers\TestController@edit')->name('profile');
Route::post('/profile/edit/{id}','App\Http\Controllers\TestController@update')->name('update');
Route::get('/appointments/{username}','App\Http\Controllers\TestController@userapp')->name('userapp');
Route::get('/assessment', 'App\Http\Controllers\TestController@quiz')->name('quiz');
Route::post('/process', 'App\Http\Controllers\TestController@process')->name('process');
Route::get('/matching', 'App\Http\Controllers\TestController@matching')->name('matching');
Route::post('/match', 'App\Http\Controllers\TestController@match')->name('match');
Route::match(['get', 'post'], '/botman', 'App\Http\Controllers\BotManController@handle');
Route::get('/botman/tinker', 'App\Http\Controllers\BotManController@tinker')->name('tinker');


    


