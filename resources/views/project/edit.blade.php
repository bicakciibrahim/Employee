@extends('layout')

@section('content')
    <div class="container mx-auto py-12 px-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Proje Düzenle: {{ $project->ad }}</h2>

        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('project.update', $project->id) }}" method="POST" class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">
            @csrf

            <!-- Çalışan Seçimi -->
            <div class="mb-4">
                <label for="calisan_id" class="block text-gray-700 text-sm font-bold mb-2">İlgili Çalışan</label>
                <select name="calisan_id" id="calisan_id" class="block w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5">
                    <option value="">Çalışan Seç</option>
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}" {{ $project->calisan_id == $employee->id ? 'selected' : '' }}>
                            {{ $employee->ad }}  {{ $employee->soyad }}
                        </option>
                    @endforeach
                </select>
                @error('calisan_id')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Form Butonları -->
            <div class="flex items-center justify-between">

                <a href="{{ route('project.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Geri
                </a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Kaydet
                </button>
            </div>
        </form>
    </div>
@endsection
