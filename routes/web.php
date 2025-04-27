<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DiscussionController;

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
    $posts = Post::latest()->get();
    return view('user.index', compact('posts'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/chat', [App\Http\Controllers\ChatsController::class, 'index']);
Route::get('/messages', [App\Http\Controllers\ChatsController::class, 'fetchMessages']);
Route::post('/messages', [App\Http\Controllers\ChatsController::class, 'sendMessage']);
Route::resource('post', PostController::class);
Route::resource('discussion', DiscussionController::class);
Route::resource('comment', CommentController::class);
Route::post('reply', [CommentController::class, 'replyStore'])->name('reply.add');
// Route::get('/projects', [PostController::class, 'show']);

// Route::post('/create', [PostController::class, 'store'])->name('post');

// Route::get('/post/create', [PostController::class, 'create']);

// Route::get('/projects/{id}/delete', [PostController::class, 'destroy']);
