<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

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
    // listen to the queries
    /* \Illuminate\Support\Facades\DB::listen(function ($query) {
        logger($query->sql, $query->bindings);
    }); */

    return view('posts', [
        'posts' => Post::latest()->get(),
    ]);

});

// Find a post by its slug and pass it to the view
Route::get('posts/{post}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

// Show all posts associated with a category
Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts->load(['category', 'author'])
    ]);
});

// Show all posts from an author
Route::get('authors/{author:username}', function (User $author) {
    //dd($author);
    return view('posts', [
        'posts' => $author->posts
    ]);
});