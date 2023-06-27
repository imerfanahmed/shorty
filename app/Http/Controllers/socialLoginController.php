<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Laravel\Socialite\Facades\Socialite;

class socialLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    //Google Login

    public function handleGoogleCallback()
    {

        $user = Socialite::driver('google')->stateless()->user();

        $this->_registerorLoginUser($user);

        return redirect()->route('home');
    }

//Google callback

    protected function _registerOrLoginUser($data)
    {
        //ray($data);
        $user = User::where('email', $data->email)->first();
        if (! $user) {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->github_id = $data->id;
            $user->github_token = $data->token;
            $user->github_refresh_token = $data->refreshToken;
            $user->avatar = $data->avatar;
            $user->save();
        }
        Auth::login($user);
    }

//Facebook Login

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->stateless()->redirect();
    }

//facebook callback
    public function handleFacebookCallback()
    {

        $user = Socialite::driver('facebook')->stateless()->user();

        $this->_registerorLoginUser($user);

        return redirect()->route('home');
    }

//Github Login
    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

//github callback
    public function handleGithubCallback()
    {

        $user = Socialite::driver('github')->user();
        $this->_registerorLoginUser($user);

        return redirect()->route('dashboard');
    }
}
