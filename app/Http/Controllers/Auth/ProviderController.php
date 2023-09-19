<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;


class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
    {
        $provider_id = $provider . "_id";
        // dd($provider_id);
        try {

            $user = Socialite::driver($provider)->user();

            $finduser = User::where($provider_id, $user->id)->first();
            $finduseremail = User::where('email', $user->email)->first();

            if ($finduser) {

                Auth::login($finduser);

                return redirect('/home');
            } elseif ($finduseremail) {
                $finduseremail->$provider_id = $user->id;
                $finduseremail->save();
                Auth::login($finduseremail);
                return redirect('/home');
            } else {
                $password = Str::password(10);

                $newUser = User::updateOrCreate([
                    $provider_id => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => $password,
                    'image' => $user->getAvatar(),
                ]);



                Auth::login($newUser);

                return redirect('/home');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
