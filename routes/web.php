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
    return view('index');
});
Route::get('/whoarewe', function () {
    return view('whoarewe');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/privacypolicy', function () {
    return view('privacypolicy');
});
Route::get('/registration/incometax', 'App\Http\Controllers\IncomeTaxController@index')->middleware('auth');
Route::post('/registration/incometax', 'App\Http\Controllers\IncomeTaxController@register');

Route::get('/profile/{profile}', function ($slug) {
    $profile = file_get_contents(__DIR__."/../resources/views/profile/{$slug}");
});
Route::get('/registration/signup', function () {
    return view('registration/signup');
})->middleware('guest');
Route::post('/registration/signup', 'App\Http\Controllers\UserController@register')->middleware('guest');
Route::post('/logout','App\Http\Controllers\SessionsController@logout');
Route::get('/login', function () {
    return view('login');
})->middleware('guest');
Route::post('/login','App\Http\Controllers\SessionsController@login')->middleware('guest');

// Admin Routes
Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/admin/users', 'App\Http\Controllers\AdminController@users');
Route::get('/admin/formsubmitted', 'App\Http\Controllers\AdminController@forms');
Route::get('/admin/users/{user}', 'App\Http\Controllers\AdminController@user', ['user' => '{user}']);
Route::post('/admin/users/{user}', 'App\Http\Controllers\AdminController@updateUser', ['user' => '{user}']);
Route::get('/admin/delete/{user}', 'App\Http\Controllers\AdminController@deleteUser', ['user' => '{user}']);
Route::get('/admin/login', function (){
    return view('/admin/login');
});
Route::get('/admin/signup', function (){
    return view('/admin/signup');
});
Route::post('/admin/login', 'App\Http\Controllers\AdminController@admin_login');
Route::post('/admin/logout', 'App\Http\Controllers\AdminController@admin_logout');
Route::post('/admin/signup', 'App\Http\Controllers\AdminController@admin_signup');
