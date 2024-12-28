@extends('layout')

@section('title', 'Yoklama Listesi')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200">
            <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Yoklama Listesi</h2>

            <!-- Yeni Yoklama Ekle Butonu -->
            <div class="mb-6 text-center">
                <a href="{{ route('rollcalls.create') }}" class="inline-block py-2 px-6 bg-green-600 text-white rounded-lg hover:bg-green-700 transition duration-300">
                    Yeni Yoklama Ekle
                </a>
            </div>

            <!-- Yoklama Listesi -->
            <table class="min-w-full table-auto border-collapse">
                <thead>
                <tr class="bg-gray-100">
                    <th class="py-3 px-6 text-left">Çalışan Adı</th>
                    <th class="py-3 px-6 text-left">Yoklama Tarihi</th>
                    <th class="py-3 px-6 text-left">Giriş Saati</th>
                    <th class="py-3 px-6 text-left">Çıkış Saati</th>
                    <th class="py-3 px-6 text-left">Durum</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($rollCalls as $rollCall)
                    <tr>
                        <td class="py-3 px-6">{{ $rollCall->employee->ad }} {{ $rollCall->employee->soyad }}</td>
                        <td class="py-3 px-6">{{ \Carbon\Carbon::parse($rollCall->tarih)->format('d/m/Y') }}</td>
                        <td class="py-3 px-6">{{ $rollCall->giris_saati ? \Carbon\Carbon::parse($rollCall->giris_saati)->format('H:i') : '-' }}</td>
                        <td class="py-3 px-6">{{ $rollCall->cikis_saati ? \Carbon\Carbon::parse($rollCall->cikis_saati)->format('H:i') : '-' }}</td>
                        <td class="py-3 px-6">{{ $rollCall->durum }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
