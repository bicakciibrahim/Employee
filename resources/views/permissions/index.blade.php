@extends('layout')

@section('title', 'İzinler')

@section('content')
    <div class="container mx-auto py-12">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-semibold text-gray-800">İzinler</h2>
            <a href="{{ route('permissions.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-6 rounded-lg shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                Yeni İzin Ekle
            </a>
        </div>

        @if (session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-800 border-l-4 border-green-500 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($permissions as $permission)
                @php
                    // Rastgele bir renk seçiyoruz
                    $colors = ['bg-blue-100', 'bg-green-100', 'bg-yellow-100', 'bg-red-100', 'bg-purple-100'];
                    $randomColor = $colors[array_rand($colors)];
                @endphp

                <div class="{{ $randomColor }} border border-gray-200 rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $permission->employee->ad }} {{ $permission->employee->soyad }}</h3>
                        <p class="text-sm text-gray-600 mt-1">{{ $permission->permissionType->izin_turu_adi }}</p>
                        <p class="mt-4 text-sm text-gray-700">Başlangıç Tarihi: {{ $permission->baslangic_tarihi }}</p>
                        <p class="text-sm text-gray-700">Bitiş Tarihi: {{ $permission->bitis_tarihi }}</p>
                        <p class="text-sm text-gray-700 mt-2">{{ $permission->aciklama ?: 'Açıklama yok' }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
