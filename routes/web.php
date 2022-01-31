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
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Blog
Route::group(['namespace' => 'Blog', 'prefix' => 'blog'], function() {
    // роуты внутри (можно было каждому роуту прописывать обертку blog/)
    route::resource('posts','PostController')->names('blog.posts');
});

// Admin panel
$groupData = [
    'namespace' => 'Blog\Admin',
    'prefix'    => 'admin/blog',
];
Route::group($groupData, function () {
    // Blog category
    $methods = ['index', 'edit', 'update', 'create', 'store',];
    Route::resource('categories', 'CategoryController')
        ->only($methods)
        ->names('blog.admin.categories');
});


