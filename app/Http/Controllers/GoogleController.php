<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use illuminate\Support\Str;
class GoogleController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {

            $user = Socialite::driver($provider)->stateless()->user();
        } catch (Exception $e) {
            return redirect()->back();
        }
        // find or create user and send params user get from socialite and provider
        $authUser = $this->findOrCreateUser($user, $provider);

        // setelah login redirect ke dashboard
        return redirect('/dashboard');
    }

    public function findOrCreateUser($socialUser, $provider)
    {
        // Get Social Account
        $socialAccount = User::where('social_id', $socialUser->getId())
            ->where('social_type', $provider)
            ->first();

        // Jika sudah ada
        if ($socialAccount) {
            // return user
            Auth()->login($socialAccount, true);

            // Jika belum ada
        } else {

            // User berdasarkan email
            $user = User::where('email', $socialUser->getEmail())->first();

            // Jika Tidak ada user
            if (!$user) {
                // Create user baru
                $user = User::create([
                    'name'  => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'phone_number' => $socialUser->getName(),
                    'password' => $socialUser->getName(),
                    'social_id'   => $socialUser->getId(),
                    'social_type' => $provider,
                    'remember_token' => Str::random(10)
                ]);
            }

            // return user
            return $user;
        }
    }
}
