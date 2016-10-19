<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Profile;
use App\User;
use Socialite;

class AuthController extends Controller
{
    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $facebookUser = Socialite::driver('facebook')->user();

        if ($facebookUser) {
            $u = User::where('email', $facebookUser->getEmail())->first();

            if (!$u) {
                $u = User::create([
                    'name' => $facebookUser->getName(),
                    'email' => $facebookUser->getEmail(),
                    'password' => bcrypt('password'),
                ]);

                // set default role
                $role = \App\Role::find(4);
                $u->attachRole($role);

                Profile::create([
                    'user_id' => $u->id,
                    'facebook_id' => $facebookUser->getId(),
                    'avatar' => $facebookUser->getAvatar(),
                ]);
            }

            if (!$u->profile) {
                $u->profile->facebook_id = $facebookUser->getId();
                $u->profile->avatar = $facebookUser->getAvatar();
                $u->save();
            }

            auth()->login($u);

            return redirect('/dashboard');
        }
    }
}
