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
    $validated = request()->validate([
       'name' => 'required',
        'price' => 'required'

    ]);
    dd('valide');
    $c = new Cat();
    $c->price = request('price');
    $c->name = request('name');
    $c->desc = request('desc');
    $c->image = request('image');
    $c->birth_date = request('birth_date');
    $c->save();
    return redirect('/cats/'.$c->id);
});


Route::get('/cats/{id}', function ($id) {
    $cat= Cat::find($id);

    return view('show', compact('cat'));
});

