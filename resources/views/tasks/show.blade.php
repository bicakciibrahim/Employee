@extends('layout')

@section('title', 'Görev Detayı')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Görev Detayı</h1>

        <div class="bg-white rounded-xl p-6 shadow-md">
            <h2 class="text-2xl font-semibold text-gray-800">{{ $task->gorev_adi }}</h2>
            <p class="text-lg text-gray-600 mt-2">{{ $task->aciklama }}</p>
            <p class="text-sm text-gray-500 mt-2">
                <strong>Başlangıç:</strong> {{ \Carbon\Carbon::parse($task->baslangic_tarihi)->locale('tr')->isoFormat('D MMMM YYYY') }}
                <span class="ml-4"><strong>Bitiş:</strong> {{ \Carbon\Carbon::parse($task->bitis_tarihi)->locale('tr')->isoFormat('D MMMM YYYY') }}</span>
            </p>
            <p class="mt-4">
                <strong>Durum:</strong> {{ $task->durum }}
            </p>

            <h3 class="text-xl font-semibold mt-6">Görevdeki Çalışanlar</h3>
            @if($task->employee->isNotEmpty())
                <ul class="list-disc pl-5 mt-2">
                    @foreach($task->employee as $employee)
                        <li>{{ $employee->ad }} {{ $employee->soyad }}</li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-500">Bu göreve atanan çalışan bulunmamaktadır.</p>
            @endif
        </div>

        <a href="{{ route('tasks.index') }}" class="mt-4 inline-block py-2 px-6 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
            Görevler Listesine Dön
        </a>
    </section>
@endsection
