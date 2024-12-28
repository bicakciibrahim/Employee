@extends('layout')

@section('title', 'İzinler')

@section('content')
    <div class="container mx-auto py-12">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">İzinler</h2>
            <a href="{{ route('permissions.create') }}"
               class="bg-blue-600 text-white py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                Yeni İzin Ekle
            </a>
        </div>

        @if (session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-800 border-l-4 border-green-500 rounded-lg shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($permissions as $permission)
                @php
                    // Tarihe göre renk belirleme
                    $isExpired = \Carbon\Carbon::parse($permission->bitis_tarihi)->isPast();
                    $colorClass = $isExpired ? 'bg-red-100 border-red-300' : 'bg-green-100 border-green-300';
                @endphp

                <div class="{{ $colorClass }} border rounded-lg shadow-md">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $permission->employee->ad }} {{ $permission->employee->soyad }}</h3>
                        <p class="mt-2">
                            <span class="text-xl font-bold text-blue-800">{{ $permission->permissionType->izin_turu_adi }}</span>
                        </p>
                        <div class="mt-4">
                            <p class="text-sm text-gray-700">
                                <span class="font-medium">Başlangıç Tarihi:</span> {{ $permission->baslangic_tarihi }}
                            </p>
                            <p class="text-sm text-gray-700">
                                <span class="font-medium">Bitiş Tarihi:</span> {{ $permission->bitis_tarihi }}
                            </p>
                        </div>
                        <p class="mt-3 text-sm text-gray-600">{{ $permission->aciklama ?: 'Açıklama yok' }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
