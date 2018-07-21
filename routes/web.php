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

Route::get('/ola', function () {
    return ('Ola mundo');
});

Route::post('/post', function (\Illuminate\Http\Request $request) {
    $name = $request->name;
    $email = $request->email;

    return response()->json(compact('name','email'));
});