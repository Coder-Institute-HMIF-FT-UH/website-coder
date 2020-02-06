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

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/blog', 'ArticleController@blog');
Route::get('/blog/{article}', 'PagesController@artikel');
Route::get('/contact', 'PagesController@contact');
Route::get('/feedsBlog', 'ArticleController@feeds');
Route::prefix('admin')->group(function (){
    Route::Resources([
        'articles'         => 'ArticleController',
        'contacts'         => 'ContactController',
    ]);
});

// // Admin
// Route::get('/admin', 'PagesController@login');
// Route::get('/dashboard', 'PagesController@dashboardIndex');
// Route::get('/dashboard/posts', 'PagesController@dashboardPosts');
