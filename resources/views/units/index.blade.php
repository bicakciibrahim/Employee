@extends('layout')

@section('title', 'Birimler')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Birimler</h1>

        @if(isset($birimler) && $birimler->isNotEmpty())
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($birimler as $birim)
                    <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition duration-300">
                        <h2 class="text-2xl font-semibold text-gray-800">{{ $birim->birim_adi }}</h2>
                        <p class="text-lg text-gray-600 mt-2">{{ Illuminate\Support\Str::limit($birim->aciklama, 100) }}</p>

                        <!-- Yeşil Buton, Ortalanmış -->
                        <div class="flex justify-center mt-6">
                            <a href="{{ route('units.show', $birim->id) }}" class="py-2 px-8 bg-green-600 text-white font-semibold rounded-full shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 transition duration-300">
                                Birim Detayı
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-red-500">Henüz hiç birim eklenmemiş.</p>
        @endif
    </section>

    <!-- Ana Sayfaya Dön Butonu -->
    <div class="flex justify-center mt-12">
        <a href="{{ url('/') }}" class="py-2 px-6 bg-blue-600 text-white rounded-full shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
            Ana Sayfaya Dön
        </a>
    </div>
@endsection
