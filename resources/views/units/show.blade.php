

@extends('layout')

@section('title', 'Birim Detayı')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">{{ $birim->birim_adi }}</h1>

        <p class="text-lg text-gray-600 mt-2">{{ $birim->aciklama ?? 'Açıklama bulunmamaktadır.' }}</p>


        <a href="{{ route('units.index') }}" class="mt-4 inline-block py-2 px-6 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
            Birimler Listesine Dön
        </a>    </section>
@endsection
