<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/hello', [WelcomeController::class,'Hello']);

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', AboutController::class);

Route::get('/user/{keizya}', function($keizya) {
    return 'Nama saya '.$keizya;
});

Route::get('/posts/{posts}/comment/{comment}', function($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-".$commentId;
});

Route::get('/articles/{id}', ArticleController::class);

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

Route::resource('photo', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index','show'
]);
