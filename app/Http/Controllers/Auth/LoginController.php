<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /**
     * Redirige al usuario a Facebook para el inicio de sesión.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Maneja la devolución de llamada de Facebook y autentica al usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleFacebookCallback(Request $request)
    {
        $user = Socialite::driver('facebook')->user();

        // Aquí puedes autenticar al usuario y realizar otras operaciones según tus necesidades.
        // Por ejemplo:
        // Auth::login($user);
        // return redirect('/home');
    }
}
