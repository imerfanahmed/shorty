<?php

use App\Models\Click;
use App\Models\Link;
use Illuminate\Support\Facades\Request;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/{short_url}', function ($short_url) {
    $link = Link::where('short_url', $short_url)->first();

    if (!$link) {
        return redirect('/');
    }
    //user agent
    $user_agent = Request::header('User-Agent');
    //ip address
    $ip_address = Request::ip();
    //get the link

//    $click = new Click();
//    $click->user_agent = $user_agent;
//    $click->ip_address = $ip_address;
//    $click->link_id = $link->id;

    return redirect()->away($link->long_url);
})->name('shorten.link');
