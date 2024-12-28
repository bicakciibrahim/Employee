@extends('layout')

@section('title', 'Çalışan Eğitimleri')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200 relative">
            <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Çalışan Eğitimleri</h2>

            <!-- Eğitim Ekle Butonu -->
            <a href="{{ route('employee.trainings.create') }}" class="absolute top-4 right-4 bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700 transition duration-300">
                Eğitim Ekle
            </a>

            <table class="min-w-full table-auto mt-12">
                <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 uppercase">Çalışan Adı</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 uppercase">Eğitim Türü</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 uppercase">Eğitim Tarihi</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 uppercase">Eğitim Durumu</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($trainings as $training)
                    <tr class="transition duration-300 ease-in-out hover:bg-gray-100">
                        <td class="px-6 py-4 text-sm font-medium text-gray-800 border-b">{{ $training->calisan->ad ?? 'Bilinmiyor' }} {{ $training->calisan->soyad ?? '' }}</td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-800 border-b">
                            @if ($training->egitimTuru)
                                {{ $training->egitimTuru->ad }} <!-- Eğitim türünü gösteriyoruz -->
                            @else
                                Eğitim Türü Bulunamadı
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-800 border-b">{{ $training->egitim_tarihi }}</td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-800 border-b
                                @if($training->egitim_durumu == 'Başarılı')
                                    bg-green-50 text-green-700
                                @elseif($training->egitim_durumu == 'Başarısız')
                                    bg-red-50 text-red-700
                                @elseif($training->egitim_durumu == 'Devam Ediyor')
                                    bg-yellow-50 text-yellow-700
                                @else
                                    bg-gray-50 text-gray-700
                                @endif
                                ">
                            {{ $training->egitim_durumu }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </section>
@endsection
