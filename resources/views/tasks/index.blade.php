@extends('layout')

@section('title', 'Tüm Görevler')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h1 class="text-3xl font-semibold text-gray-800 mb-6">Tüm Görevler</h1>

            <!-- Kartlar ile görevler -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($tasks as $task)
                    @php
                        // Duruma göre renk belirleme
                        $cardClass = match($task->durum) {
                            'Tamamlandı' => 'bg-green-50 text-green-800',
                            'Devam Ediyor' => 'bg-yellow-50 text-yellow-800',
                            'Bekliyor' => 'bg-red-50 text-red-800',
                            default => 'bg-gray-50 text-gray-800',
                        };
                    @endphp

                    <div class="border rounded-lg p-6 {{ $cardClass }} shadow-sm hover:shadow-lg transition duration-300 transform hover:scale-105">
                        <h3 class="text-xl font-semibold">{{ $task->gorev_adi }}</h3>
                        <p class="text-sm mt-2">Durum: <span class="font-medium">{{ $task->durum }}</span></p>
                        <p class="text-sm mt-2">
                            <span class="font-medium">Başlama Tarihi:</span> {{ \Carbon\Carbon::parse($task->baslama_tarihi)->locale('tr')->isoFormat('D MMMM YYYY') }}
                        </p>
                        <p class="text-sm mt-2">
                            <span class="font-medium">Bitirme Tarihi:</span> {{ $task->bitis_tarihi ? \Carbon\Carbon::parse($task->bitis_tarihi)->locale('tr')->isoFormat('D MMMM YYYY') : 'Belirtilmedi' }}
                        </p>
                        <div class="mt-4 text-center">
                            <a href="{{ route('tasks.show', $task->id) }}" class="inline-block py-2 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
                                Görüntüle
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Sayfalama -->
            <div class="mt-6 flex justify-center">
                {{ $tasks->links() }}
            </div>
        </div>
    </section>

    <!-- Ana Sayfaya Dön Butonu -->
    <div class="flex justify-center mt-12">
        <a href="{{ url('/') }}" class="py-2 px-6 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
            Ana Sayfaya Dön
        </a>
    </div>
@endsection
