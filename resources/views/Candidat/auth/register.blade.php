<x-guest-layout>
 <!-- component -->
<div class="min-h-screen bg-purple-800 flex justify-center items-center">
	<div class="absolute w-60 h-60 rounded-xl bg-purple-300 -top-5 -left-16 z-0 transform rotate-45 hidden md:block">
	</div>
	<div class="absolute w-48 h-48 rounded-xl bg-purple-300 -bottom-6 -right-10 transform rotate-12 hidden md:block">
	</div>
	<div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
		<div>
			<h1 class="text-3xl font-bold text-center cursor-pointer">INSCRIPTION</h1>
			<p class="w-80 text-center text-sm mb-8 font-semibold  text-gray-600 tracking-wide cursor-pointer">
			
            </p>
		</div>

        <x-auth-session-status class="mb-4" :status="session('status')" />
        <!-- Validation Errors -->

        <form action="{{route('candidat.login')}}" method="post">
        @csrf
                <div class="space-y-4">
                    <div>
                        <label for="username" class="block text-sm text-gray-500 dark:text-gray-300">Nom utilisateur</label>

                       <input placeholder="Tapez votre nom" class="mt-2 block text-sm py-3 px-4 rounded-lg w-full border outline-none" type="email" name="email" :value="old('email')" required autofocus />
                        <p class="mt-3 text-xs text-red-400">
                        <x-auth-validation-errors class="mb-4 text-center" :errors="$errors" />
                        </p>
                    </div>

                    <div>
                        <label for="username" class="block text-sm text-gray-500 dark:text-gray-300">Email</label>

                       <input placeholder="Tapez votre email" class="mt-2 block text-sm py-3 px-4 rounded-lg w-full border outline-none" type="email" name="email" :value="old('email')" required autofocus />
                        <p class="mt-3 text-xs text-red-400">
                        <x-auth-validation-errors class="mb-4 text-center" :errors="$errors" />
                        </p>
                    </div>

                  <div class="grid grid-cols-2">

                    <div>
                        <label for="password" class="block text-sm text-gray-500 dark:text-gray-300">password</label>

                        <input type="password" placeholder="Tapez votre password" class="mt-2 block text-sm py-3 px-4 rounded-lg w-full border outline-none"   name="password" required autocomplete="current-password" />
                        <p class="mt-3 text-xs text-red-400">
                        <x-auth-validation-errors class="mb-4 text-center" :errors="$errors" />
                        </p>
                    </div>
		        	
                    <div class="ml-2">
                        <label for="password" class="block text-sm text-white">password</label>

                        <input type="password" placeholder="Retapez" class="mt-2 block text-sm py-3 px-4 rounded-lg w-full border outline-none"   name="password" required autocomplete="current-password" />
                        <p class="mt-3 text-xs text-red-400">
                        <x-auth-validation-errors class="mb-4 text-center" :errors="$errors" />
                        </p>
                    </div>

                  </div>


                </div>
		    	<div class="text-center mt-6">
		    		<button type="submit" class="py-3 w-64 text-sm text-white bg-purple-400 rounded-2xl">
                      INSCRIPTION
                    </button>
		    		<p class="mt-4 text-sm text-gray-600 hover:text-gray-900">
                   
                                {{ __('Déjà inscrit ?') }}

                        <span class="underline cursor-pointer">
                            <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('candidat.login') }}">
                             {{ __('Se connecter') }}
                            </a>
                        </span>
		    		</p>
		    	</div>
        </form>
		
	</div>
		<div class="w-40 h-40 absolute bg-purple-300 rounded-full top-0 right-12 hidden md:block"></div>
		<div
			class="w-20 h-40 absolute bg-purple-300 rounded-full bottom-20 left-10 transform rotate-45 hidden md:block">
		</div>
</div>
</x-guest-layout>
