@extends('layout')

@section('title', 'Performans Değerlendirme Listesi')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200">
            <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Performans Değerlendirme Listesi</h2>

            <!-- Ekle Butonu -->
            <div class="mb-6 text-right">
                <a href="{{ route('performances.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                    Performans Değerlendirmesi Ekle
                </a>
            </div>

            <!-- Performans Değerlendirme Listesi -->
            <table class="min-w-full table-auto border-collapse">
                <thead>
                <tr class="bg-gray-100">
                    <th class="py-3 px-6 text-left">Çalışan Adı</th>
                    <th class="py-3 px-6 text-left">Performans Puanı</th>
                    <th class="py-3 px-6 text-left">Yorum</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($evaluations as $evaluation)
                    <tr>
                        <td class="py-3 px-6">
                            @if ($evaluation->employee)
                                {{ $evaluation->employee->ad }} {{ $evaluation->employee->soyad }}
                            @else
                                Veri Bulunamadı
                            @endif
                        </td>
                        <td class="py-3 px-6">{{ $evaluation->puan }}</td>
                        <td class="py-3 px-6">{{ $evaluation->yorum ? $evaluation->yorum : '-' }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <!-- Sayfalama -->
            <div class="mt-6">
                {{ $evaluations->links() }}
            </div>
        </div>
    </section>
@endsection
