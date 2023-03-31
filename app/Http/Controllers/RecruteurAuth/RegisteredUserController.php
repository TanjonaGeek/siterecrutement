<?php

namespace App\Http\Controllers\RecruteurAuth;

use App\Http\Controllers\Controller;
use App\Models\Candidat;
use App\Models\Recruteur;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Recruteur.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'nom' => ['required', 'string', 'max:50'],
            'prenom' => ['required', 'string', 'max:80'],
            'societe' => ['required', 'string', 'max:60'],
            'adresse' => ['required', 'string', 'max:100'],
            'ville' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $recruteur = Recruteur::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'societe' => $request->societe,
            'adresse' => $request->adresse,
            'ville' => $request->ville,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($recruteur));

        Auth::login($recruteur);

        return redirect()->route('recruteur.dashboard');
    }
}
