@extends('layout')

@section('title', 'Proje Ekle')

@section('content')
    <div class="container mx-auto py-12 px-6">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Yeni Proje Ekle</h1>

        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('project.store') }}" method="POST" class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">
            @csrf

            <!-- Proje Adı -->
            <div class="mb-4">
                <label for="ad" class="block text-gray-700 text-sm font-bold mb-2">Proje Adı</label>
                <input type="text" name="ad" id="ad" value="{{ old('ad') }}" class="block w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" required>
                @error('ad')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Proje Açıklaması -->
            <div class="mb-4">
                <label for="aciklama" class="block text-gray-700 text-sm font-bold mb-2">Açıklama</label>
                <textarea name="aciklama" id="aciklama" rows="4" class="block w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" required>{{ old('aciklama') }}</textarea>
                @error('aciklama')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Başlangıç Tarihi -->
            <div class="mb-4">
                <label for="baslangic_tarihi" class="block text-gray-700 text-sm font-bold mb-2">Başlangıç Tarihi</label>
                <input type="date" name="baslangic_tarihi" id="baslangic_tarihi" value="{{ old('baslangic_tarihi') }}" class="block w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" required>
                @error('baslangic_tarihi')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Bitiş Tarihi -->
            <div class="mb-4">
                <label for="bitis_tarihi" class="block text-gray-700 text-sm font-bold mb-2">Bitiş Tarihi</label>
                <input type="date" name="bitis_tarihi" id="bitis_tarihi" value="{{ old('bitis_tarihi') }}" class="block w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" required>
                @error('bitis_tarihi')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- İlgili Çalışan -->
            <div class="mb-4">
                <label for="calisan_id" class="block text-gray-700 text-sm font-bold mb-2">İlgili Çalışan</label>
                <select name="calisan_id" id="calisan_id" class="block w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" required>
                    <option value="">Çalışan Seç</option>
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}" {{ old('calisan_id') == $employee->id ? 'selected' : '' }}>
                            {{ $employee->ad }} {{ $employee->soyad }}
                        </option>
                    @endforeach
                </select>
                @error('calisan_id')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Kaydet Butonu -->
            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Kaydet
                </button>
                <a href="{{ route('project.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-4">
                    Geri
                </a>
            </div>
        </form>
    </div>
@endsection
