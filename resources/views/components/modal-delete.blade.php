<!-- component -->
<link rel="preconnect" href="https://rsms.me/">
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<style>
    :root { font-family: 'Inter', sans-serif; }
    @supports (font-variation-settings: normal) {
        :root { font-family: 'Inter var', sans-serif; }
    }
</style>
<div class="py-10 min-h-screen w-screen antialiased font-medium text-gray-800 bg-slate-100 bg-white" x-data="{ modal: true }">
    <div class="max-w-sm p-2 mx-auto bg-white border-[1px] border-gray-200 shadow rounded-xl hover:shadow-lg transition-all duration-150 ease-linear" x-show="modal"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-90"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-90"
    >
        <div class="relative p-6">
            <a href="#" x-on:click="modal = ! modal" class="absolute top-1.5 right-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 cursor-pointer fill-current text-slate-500 hover:text-slate-900">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>

            </a>
            <h1 class="text-3xl font-bold">Delete controller</h1>
            <p class="text-sm text-gray-500">Are you sure you want to delete this controller?</p>
            <code>App/Cokies</code>
            <div class="flex flex-row mt-6 space-x-2 justify-evenly">
                <a href="#" class="w-full py-3 text-sm font-medium text-center text-white transition duration-150 ease-linear bg-red-600 border border-red-600 rounded-lg hover:bg-red-500">Delete</a>
                <a href="#" x-on:click="modal = ! modal" class="w-full py-3 text-sm text-center text-gray-500 transition duration-150 ease-linear bg-white border border-gray-200 rounded-lg hover:bg-gray-100">Cancel</a>
            </div>
        </div>
    </div>
</div>