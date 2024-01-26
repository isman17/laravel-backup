<?php

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

Route::get('/', function () {
    // $googleDisk = \Illuminate\Support\Facades\Storage::disk('google')->files('photos');
    // dd($googleDisk);

    $googleFile = \Illuminate\Support\Facades\Storage::disk('google')->putFileAs('photos', new \Illuminate\Http\File(public_path('apple-touch-icon.png')), 'nano.jpg');
    dd($googleFile);
    return view('welcome');
});
