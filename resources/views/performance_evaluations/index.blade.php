@extends('layout')

@section('title', 'Performans Değerlendirme Listesi')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <div class="bg-white rounded-lg shadow-lg p-8 border-l-4 border-blue-500">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-8 text-center">Performans Değerlendirme Listesi</h2>

            <!-- Ekle Butonu -->
            <div class="mb-6 text-right">
                <a href="{{ route('performances.create') }}" class="bg-blue-500 text-white py-2 px-6 rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-200">
                    Performans Değerlendirmesi Ekle
                </a>
            </div>

            <!-- Performans Değerlendirme Listesi -->
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto border-collapse">
                    <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="py-4 px-6 text-gray-800">Çalışan Adı</th>
                        <th class="py-4 px-6 text-gray-800">Performans Puanı</th>
                        <th class="py-4 px-6 text-gray-800">Yorum</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($evaluations as $evaluation)
                        <tr class="border-t border-b hover:bg-gray-50">
                            <td class="py-3 px-6">{{ $evaluation->employee ? $evaluation->employee->ad . ' ' . $evaluation->employee->soyad : 'Veri Bulunamadı' }}</td>
                            <td class="py-3 px-6 text-center">{{ $evaluation->puan }}</td>
                            <td class="py-3 px-6">{{ $evaluation->yorum ? $evaluation->yorum : '-' }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Sayfalama -->
            <div class="mt-6">
                {{ $evaluations->links() }}
            </div>
        </div>
    </section>
@endsection
