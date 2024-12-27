@extends('layout')

@section('title', 'Şikayet Formu')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <h1 class="text-4xl font-bold text-gray-900 mb-8">Şikayet Formu</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('complaint.store') }}" method="POST" class="bg-white rounded-xl p-8 shadow-md">
            @csrf

            <div class="mb-6">
                <label for="isim" class="block text-sm font-medium text-gray-700">İsim</label>
                <input type="text" id="isim" name="isim" required
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700">Email (Opsiyonel)</label>
                <input type="email" id="email" name="email"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-6">
                <label for="telefon" class="block text-sm font-medium text-gray-700">Telefon (Opsiyonel)</label>
                <input type="text" id="telefon" name="telefon"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-6">
                <label for="mesaj" class="block text-sm font-medium text-gray-700">Mesaj</label>
                <textarea id="mesaj" name="mesaj" rows="5" required
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
            </div>

            <button type="submit" class="bg-indigo-600 hover:bg-indigo-800 text-white py-3 px-6 rounded-lg font-medium">
                Gönder
            </button>
        </form>
    </section>
@endsection
