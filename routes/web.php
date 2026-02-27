<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Selamat datang';
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return '244107020183 | Tsabita Keizya Vanya Putri';
});

Route::get('/user/{keizya}', function($keizya) {
    return 'Nama saya '.$keizya;
});

Route::get('/posts/{posts}/comment/{comment}', function($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-".$commentId;
});

Route::get('/articles/{articles}', function($articlesId) {
    return 'Halaman Artikel dengan Id '.$articlesId;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});
