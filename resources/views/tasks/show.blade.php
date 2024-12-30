@extends('layout')

@section('title', 'Görev Detayı')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-lg p-8">
            <h1 class="text-4xl font-extrabold text-gray-900 text-center mb-6">Görev Detayı</h1>

            <div class="space-y-6">
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">{{ $task->gorev_adi }}</h2>
                    <p class="text-lg text-gray-600 mt-2">{{ $task->aciklama }}</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-center">
                    <!-- Başlangıç Tarihi -->
                    <div class="inline-block bg-gradient-to-r from-green-400 to-green-600 text-white text-sm font-medium px-6 py-2 rounded-full shadow-md">
                        <strong class="font-semibold">Başlangıç:</strong>
                        <p class="mt-1 text-xs">
                            {{ \Carbon\Carbon::parse($task->baslangic_tarihi)->locale('tr')->isoFormat('D MMMM YYYY') }}
                        </p>
                    </div>

                    <!-- Bitiş Tarihi -->
                    <div class="inline-block bg-gradient-to-r from-red-400 to-red-600 text-white text-sm font-medium px-6 py-2 rounded-full shadow-md">
                        <strong class="font-semibold">Bitiş:</strong>
                        <p class="mt-1 text-xs">
                            {{ \Carbon\Carbon::parse($task->bitis_tarihi)->locale('tr')->isoFormat('D MMMM YYYY') }}
                        </p>
                    </div>
                </div>

                <h3 class="text-2xl font-semibold mt-6 text-gray-900">Görevdeki Çalışanlar</h3>
                @if($task->employee->isNotEmpty())
                    <ul class="list-disc pl-6 mt-2 text-gray-700">
                        @foreach($task->employee as $employee)
                            <li>{{ $employee->ad }} {{ $employee->soyad }}</li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-gray-500 mt-2">Bu göreve atanan çalışan bulunmamaktadır.</p>
                @endif
            </div>

            <!-- Durum Kısmı Belirgin Yapıldı -->
            <div class="mt-8 text-center">
                @php
                    // Duruma göre renk belirleme
                    $statusColor = match($task->durum) {
                        'Tamamlandı' => 'text-green-600 font-semibold',
                        'Devam Ediyor' => 'text-yellow-600 font-semibold',
                        'Bekliyor' => 'text-red-600 font-semibold',
                        default => 'text-gray-600 font-semibold',
                    };
                @endphp

                <div class="text-xl {{ $statusColor }}">
                    <strong>Durum:</strong>
                    <p>{{ $task->durum }}</p>
                </div>
            </div>

            <div class="mt-8 flex justify-center">
                <a href="{{ route('tasks.index') }}" class="inline-block py-3 px-6 bg-indigo-600 text-white rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300 transform hover:scale-105">
                    Görevler Listesine Dön
                </a>
            </div>
        </div>
    </section>
@endsection
