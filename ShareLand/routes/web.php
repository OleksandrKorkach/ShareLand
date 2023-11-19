<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    $posts = [];
//    if (auth()->check()){
//        $posts = auth()->user()->userPosts()->latest()->get();
//    }
//    return view('home', ['posts' => $posts]);
//});
Route::get('/', function () {
    $topics = Topic::all();
   return view('homepage', ['topics' => $topics]);
});

Route::get('/profile', function (){
   $topics = auth()->user()->userTopics();
    return view('profile', ['topics' => $topics]);
});

//Route::post('/logout', [UserController::class, 'logout']);

Route::get('/register', function (){
   return view('registration-form');
});
Route::post('/register', [UserController::class, 'register']);


Route::get('/login', function (){
    return view('login-form');
});
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/create/topic', function (){
    return view('create-topic-form');
});
Route::post('/create/topic', [TopicController::class, 'createTopic']);

//Route::post('/register', [UserController::class, 'register']);

//Route::post('/post/create', [PostController::class, 'createPost']);
//Route::get('/post/edit/{post}', [PostController::class, 'getEditForm']);
//Route::put('/post/edit/{post}', [PostController::class, 'editPostForm']);
//Route::delete('/post/delete/{post}', [PostController::class, 'deletePost']);
