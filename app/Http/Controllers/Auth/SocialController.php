<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use Socialite;

class SocialController extends Controller
{
        /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function viewLogin()
    {
        return view('auth.login');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToFacebookProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleFacebookProviderCallback()
    {
        try{
            $user = Socialite::driver('facebook')->stateless()->user();
            if($user){
              $user_exist = User::where(['email' => $user->getEmail()])->first();
              if($user_exist){
                Auth::login($user_exist);
                return redirect('/');
              }else{
              $newuser = new User;
              $newuser->email = $user->getEmail();
              $newuser->save();
              Auth::login($newuser);
              return redirect('/blog');
            }}

        }catch(Exception $e){
            return redirect("/");
        }

        // $user->token;
    }
}
