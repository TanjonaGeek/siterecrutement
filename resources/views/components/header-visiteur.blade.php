<!-- Scripts -->
<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
<script src="{{asset('js/app.js')}}" defer></script>

<div class="">
    <div class="antialiased bg-gray-100 dark-mode:bg-gray-900 fixed w-full">
        <div class="w-full text-gray-700 bg-dark p-3 dark-mode:text-gray-200 dark-mode:bg-gray-800">
            <div x-data="{ open: false }"
                 class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="flex flex-row items-center justify-between p-4">
                    <a href="#"
                       class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white
                       focus:outline-none focus:shadow-outline">ZainMada Recrutement</a>
                    <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd"
                                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                  clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{'flex': open, 'hidden': !open}"
                     class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent
                    dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white
                    dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-200
                    focus:text-gray-900 hover:bg-gray-800 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                       href="{{ route('emploisliste') }}">Emplois</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent
                    dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white
                    dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-200
                    focus:text-gray-900 hover:bg-gray-800 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                       href="#">Profiles</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent
                    dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white
                    dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-200
                    focus:text-gray-900 hover:bg-gray-800 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                       href="#">Contact</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent
                    dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white
                    dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-200
                    focus:text-gray-900 hover:bg-gray-800 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                       href="#">A propos</a>
                    <!-- Settings Dropdown -->
                    <div class="">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent
                    dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white
                    dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-100
                    focus:text-gray-900 hover:bg-gray-800 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                    <div>CANDIDAT</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <x-dropdown-link data-modal-toggle="register-modal" class="cursor-pointer">
                                    {{ __("S'Inscrire") }}
                                </x-dropdown-link>

                                <x-dropdown-link data-modal-toggle="auth-modal" class="cursor-pointer">
                                    {{ __('Se Connecter') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>
                    <!-- Settings Dropdown -->
                    <div class="">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent
                    dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white
                    dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-100
                    focus:text-gray-900 hover:bg-gray-800 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                    <div>RECRUTEUR</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <x-dropdown-link href="{{ route('recruteur.register') }}">
                                    {{ __("S'Inscrire") }}
                                </x-dropdown-link>

                                <x-dropdown-link href="{{ route('recruteur.login') }}">
                                    {{ __('Se Connecter') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- component -->
<link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css"/>
<!-- This is an example component -->

<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
<div class="max-w-2xl mx-auto">

    <!-- Main modal -->
    <div id="auth-modal" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full
    top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative w-full max-w-md px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900
                    rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800
                    dark:hover:text-white" data-modal-toggle="auth-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="{{ route('candidat.login') }}"
                      method="POST">
                    @csrf
                    <h3 class="text-xl text-center font-medium text-gray-900 dark:text-white">Login Candidat</h3>
                    <div>
                        <label for="email"
                               class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300
                        text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full
                        p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                               placeholder="Votre adresse email" required="">
                    </div>
                    <div>
                        <label for="password" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Mot
                            de Pass</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                               required="">
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50
                                border border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded dark:bg-gray-600
                                 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                            </div>
                            <div class="text-sm ml-3">
                                <label for="remember" class="font-medium text-gray-900 dark:text-gray-300">Remember
                                    me</label>
                            </div>
                        </div>
                        <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Mot de pass
                            oublier?</a>
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                    focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600
                    dark:hover:bg-blue-700 dark:focus:ring-blue-800">Se Connecter
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Register -->
<div class="max-w-2xl mx-auto">

    <!-- Main modal -->
    <div id="register-modal" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full
    top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative w-full max-w-md px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900
                    rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800
                    dark:hover:text-white" data-modal-toggle="register-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="{{ route('candidat.register') }}"
                      method="POST">
                    @csrf
                    <h3 class="text-xl text-center font-medium text-gray-900 dark:text-white">Inscription Candidat</h3>
                    <div>
                        <label for="email"
                               class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300
                        text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full
                        p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                               placeholder="Votre adresse email" required="">
                    </div>
                    <div>
                        <label for="password" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Mot
                            de Pass</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                               required="">
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50
                                border border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded dark:bg-gray-600
                                 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                            </div>
                            <div class="text-sm ml-3">
                                <label for="remember" class="font-medium text-gray-900 dark:text-gray-300">Remember
                                    me</label>
                            </div>
                        </div>
                        <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Mot de pass
                            oublier?</a>
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                    focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600
                    dark:hover:bg-blue-700 dark:focus:ring-blue-800">Se Connecter
                    </button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        Not registered? <a href="{{ route('candidat.register') }}"
                                           class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
