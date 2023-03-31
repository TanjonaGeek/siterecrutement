<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
                <b>RECRUTEUR REGISTER</b>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('recruteur.register') }}">
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

            <!-- Nom du SOciete -->
            <div>
                <x-label for="societe" :value="__('Nom du Société')"/>

                <x-input id="societe" class="block mt-1 w-full" type="text" name="societe"
                         :value="old('societe')" required autofocus/>
            </div>

            <!-- Numero Telephone -->
            <div>
                <x-label for="telephone" :value="__('Numéro Téléphone')"/>

                <x-input id="telephone" class="block mt-1 w-full" type="number" name="telephone"
                         :value="old('telephone')" required autofocus/>
            </div>

            <!-- Adresse -->
            <div>
                <x-label for="adresse" :value="__('Adresse')"/>

                <x-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')"
                         required autofocus/>
            </div>

            <!-- Ville -->
            <div>
                <x-label for="ville" :value="__('Ville')"/>

                <x-input id="ville" class="block mt-1 w-full" type="text" name="ville"
                         :value="old('ville')" required autofocus/>
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
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('recruteur.login') }}">
                    {{ __('Déjà inscrit?') }}
                </a>

                <x-button class="ml-4">
                    {{ __("S'inscrire") }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
