<?php

use App\Http\Middleware\ThreadsToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Revolution\Threads\Facades\Threads;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware([ThreadsToken::class])->name('dashboard');

Route::get('threads/login', function () {
    return Socialite::driver('threads')->redirect();
})->name('threads.login');

Route::get('threads/callback', function (Request $request) {
    if ($request->missing('code')) {
        return to_route('welcome');
    }

    /** @var \Laravel\Socialite\Two\User $user */
    $user = Socialite::driver('threads')->user();

    //dump($user);

    $long_token = Threads::exchangeToken($user->token, config('services.threads.client_secret'))['access_token'];
    //dump($long_token);

    session(['threads_token' => $long_token]);

    return to_route('dashboard');

})->name('threads.callback');
