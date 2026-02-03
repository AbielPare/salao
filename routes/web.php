<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('admin.login'); // porque está dentro de admin
})->name('login');

Route::get('/painel', function () {
    return view('admin.painel.painel'); // dentro da pasta painel
})->name('painel');
