<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
                <b>CANDIDAT REGISTER</b>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('candidat.register') }}">
        @csrf

        <!-- Name -->
            <div>
                <x-label for="nom" :value="__('Nom')"/>

                <x-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required
                         autofocus/>
            </div>

            <!-- Prenom -->
            <div>
                <x-label for="prenom" :value="__('Prénom(s)')"/>

                <x-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required
                         autofocus/>
            </div>

            <!-- Sexe -->
            <div>
                <x-label for="prenom" :value="__('Sexe')"/>

                <select id="sexe" class="block mt-1 w-full" name="sexe">
                    <option class="sexe" value="homme">
                        Homme
                    </option>
                    <option class="sexe" value="femme">
                        Femme
                    </option>
                </select>
            </div>

            <!-- Date de Naissance -->
            <div>
                <x-label for="prenom" :value="__('Date de Naissance')"/>

                <x-input id="date_naissance" class="block mt-1 w-full" type="date" name="date_naissance"
                         :value="old('date_naissance')" required autofocus/>
            </div>

            <!-- Domaine d'Etude -->
            <div>
                <x-label for="domaine" :value="__('Domaine dEtude')"/>

                <x-input id="domaine" class="block mt-1 w-full" type="text" name="domaine" :value="old('domaine')"
                         required autofocus/>
            </div>

            <!-- Niveau d'Etude -->
            <div>
                <x-label for="niveau_etude" :value="__('Niveau d\Etude')"/>

                <x-input id="niveau_etude" class="block mt-1 w-full" type="text" name="niveau_etude"
                         :value="old('niveau_etude')" required autofocus/>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')"/>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')"/>

                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="new-password"/>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')"/>

                <x-input id="password_confirmation" class="block mt-1 w-full"
                         type="password"
                         name="password_confirmation" required/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('candidat.login') }}">
                    {{ __('Déjà inscrit?') }}
                </a>

                <x-button class="ml-4">
                    {{ __("S'inscrire") }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
