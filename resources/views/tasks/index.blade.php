@extends('layout')

@section('title', 'Tüm Görevler')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h1 class="text-3xl font-semibold text-gray-800 mb-6">Tüm Görevler</h1>

            <table class="min-w-full table-auto border-collapse border border-gray-300">
                <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">Görev Adı</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Durum</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Başlama Tarihi</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Bitirme Tarihi</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Aksiyon</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($tasks as $task)
                    @php
                        // Duruma göre renk belirleme
                        $rowClass = match($task->durum) {
                            'Tamamlandı' => 'bg-green-100 text-green-700', // Açık yeşil arka plan ve koyu yeşil yazı
                            'Devam Ediyor' => 'bg-yellow-100 text-yellow-700', // Açık sarı arka plan ve koyu sarı yazı
                            'Bekliyor' => 'bg-red-100 text-red-700', // Açık kırmızı arka plan ve koyu kırmızı yazı
                            default => 'bg-gray-50 text-gray-700', // Hafif gri arka plan ve koyu gri yazı
                        };
                    @endphp

                    <tr class="{{ $rowClass }} hover:bg-gray-200">
                        <td class="border border-gray-300 px-4 py-2">
                            {{ $task->gorev_adi }}
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            {{ $task->durum }}
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            {{ \Carbon\Carbon::parse($task->baslama_tarihi)->locale('tr')->isoFormat('D MMMM YYYY') }}
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            {{ $task->bitirme_tarihi
                                ? \Carbon\Carbon::parse($task->bitirme_tarihi)->locale('tr')->isoFormat('D MMMM YYYY')
                                : 'Belirtilmedi' }}
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <a href="{{ route('tasks.show', $task->id) }}"
                               class="text-blue-600 hover:text-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 inline-block">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <!-- Sayfalama -->
            <div class="mt-6">
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
