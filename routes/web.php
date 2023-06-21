<?php


use App\Http\Controllers\urlRedirector;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
//Google
Route::get('/login/google', [\App\Http\Controllers\socialLoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [\App\Http\Controllers\socialLoginController::class, 'handleGoogleCallback']);
//Facebook
Route::get('/login/facebook', [\App\Http\Controllers\socialLoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/login/facebook/callback', [\App\Http\Controllers\socialLoginController::class, 'handleFacebookCallback']);

Route::get('/login/github', [\App\Http\Controllers\socialLoginController::class, 'redirectToGithub'])->name('login.github');

Route::get('/login/github/callback', [\App\Http\Controllers\socialLoginController::class, 'handleGithubCallback'])->name('login.github.callback');


Route::get('/{short_url}', urlRedirector::class)->name('shorten.link');
Route::get('/stats/{short_url}', [urlRedirector::class, 'stats'])->name('shorten.link.stats');
