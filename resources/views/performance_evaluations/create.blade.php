@extends('layout')

@section('title', 'Yeni Performans Değerlendirmesi Ekle')

@section('content')
    <div class="container mx-auto py-12 px-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Yeni Performans Değerlendirmesi Ekle</h2>

        <form action="{{ route('performances.store') }}" method="POST">
            @csrf  <!-- CSRF token'ı ekleyin, Laravel bunu zorunlu tutar -->

            <!-- Form Alanları -->
            <div class="mb-6">
                <label for="calisan_id" class="block text-sm font-medium text-gray-700">Çalışan Seçin</label>
                <select name="calisan_id" id="calisan_id" class="mt-1 block w-full border-2 border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 py-2 px-4" required>
                    <option value="" selected>Çalışan Adı Seçin</option> <!-- Seçim yapılacak placeholder -->
                    @foreach($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->ad }} {{ $employee->soyad }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-6">
                <label for="puan" class="block text-sm font-medium text-gray-700">Performans Puanı (1-100)</label>
                <input type="number" name="puan" id="puan" min="1" max="100" class="mt-1 block w-full border-2 border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 py-2 px-4" required>
            </div>

            <div class="mb-6">
                <label for="yorum" class="block text-sm font-medium text-gray-700">Yorum</label>
                <textarea name="yorum" id="yorum" rows="4" class="mt-1 block w-full border-2 border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 py-2 px-4" required></textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded-md hover:bg-blue-600 focus:ring-4 focus:ring-blue-300">
                    Değerlendirmeyi Kaydet
                </button>
            </div>
        </form>

    </div>
@endsection
