<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cat;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    $username = "Gasp";
    $motdepasse = "Garsp";

    return view('home',compact('username','motdepasse'));
});
Route::get('/plus/{t}/{e}', function ($t, $e) {
    $somme = $t + $e;
    return view('bonjour',compact('somme','t','e'));
});

Route::get('/cats', function () {
    $cats = Cat::all();
    return view('index', compact('cats'));
});


Route::get('/cats/create', function () {

    return view('create');
});

Route::POST('/cats', function () {
    dd('coucou');
    return view('create');
});


Route::get('/cats/{id}', function ($id) {
    $cat= Cat::find($id);

    return view('show', compact('cat'));
});

