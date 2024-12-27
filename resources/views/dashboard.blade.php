<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Kontrol Paneli') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Başarıyla giriş yaptınız!") }}
                </div>
            </div>
        </div>


        <a href="{{ url('/') }}" class="mt-8">
            <center><br>
            <button class="py-3 px-10 bg-green-500 text-white text-lg font-bold rounded-full hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 transition duration-300">
                Ana Sayfaya Dön
            </button>
            </center>
        </a>


    </div>


</x-app-layout>
