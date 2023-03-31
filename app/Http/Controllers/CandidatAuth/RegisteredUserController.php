<?php

namespace App\Http\Controllers\CandidatAuth;

use App\Http\Controllers\Controller;
use App\Models\Candidat;
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
        return view('Candidat.auth.register');
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
            'sexe' => ['required', 'string', 'max:20'],
            'date_naissance' => ['required', 'string', 'max:50'],
            'domaine' => ['required', 'string', 'max:255'],
            'niveau_etude' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $candidat = Candidat::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'sexe' => $request->sexe,
            'date_naissance' => $request->date_naissance,
            'domaine' => $request->domaine,
            'niveau_etude' => $request->niveau_etude,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($candidat));

        Auth::login($candidat);

        return redirect()->route('candidat.dashboard');
    }
}
