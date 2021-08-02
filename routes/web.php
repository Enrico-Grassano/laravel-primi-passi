<?php

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
    $data = [
        "title" => "HELLO WORLD!!!",
        "name" => "Enrico",
        "hobbies" => [
            "Drawing",
            "Playing guitar",
            "Writing poetries",
            "Watching old movies",
            "Playing videogames"
        ]
    ];
    return view('home', $data);
});
