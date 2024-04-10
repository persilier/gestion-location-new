<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;


class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {

        $home = auth()->user()->roles()->first()->name == 'admin' ? route('admin.dashboard') : (auth()->user()->roles()->first()->name == 'manager' ? route('manager.dashboard') : (auth()->user()->roles()->first()->name == 'locataire' ? route('locataire.dashboard') : (auth()->user()->roles()->first()->name == 'proprietaire' ? route('proprietaire.dashboard') :
            route('employe.dashboard'))));

        return redirect($home)->with('success', 'Connexion reussie !');
    }
}
