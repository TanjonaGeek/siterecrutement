<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard CANDIDAT') }}
        </h2>
        <form action="{{ route('candidat.logout') }}" method="POST">
            @csrf
            <button type="submit">
                Se Déconnecter
            </button>
        </form>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in! CANDIDAT SPACES
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-footer-page></x-footer-page>
