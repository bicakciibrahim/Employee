@extends('layout')

@section('title', 'Projeler')

@section('content')
    <section class="container mx-auto py-12 px-6 relative">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Projeler</h1>

        <!-- Proje Ekle Butonu -->
        <a href="{{ route('project.create') }}" class="absolute top-6 right-6 bg-green-600 text-white py-2 px-6 rounded-full shadow-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 transition duration-300">
            <span class="flex items-center space-x-2">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m7-7H5" />
                </svg>
                <span>Proje Ekle</span>
            </span>
        </a>

        @if($projects->isNotEmpty())
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
                @foreach($projects as $project)
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                        <h2 class="text-2xl font-semibold text-gray-800">{{ $project->ad }}</h2>
                        <p class="text-lg text-gray-600 mt-2">{{ \Str::limit($project->aciklama, 100) }}</p>
                        <p class="text-sm text-gray-500 mt-2">
                            <strong>Başlangıç:</strong> {{ \Carbon\Carbon::parse($project->baslangic_tarihi)->locale('tr')->isoFormat('D MMMM YYYY') }}
                            <span class="ml-4"><strong>Bitiş:</strong> {{ \Carbon\Carbon::parse($project->bitis_tarihi)->locale('tr')->isoFormat('D MMMM YYYY') }}</span>
                        </p>

                        <!-- Buton Ortalandı -->
                        <div class="flex justify-center mt-6">
                            <a href="{{ route('project.show', $project->id) }}" class="py-2 px-8 bg-blue-600 text-white font-semibold rounded-full shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
                                Projeyi Görüntüle
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Sayfalama -->
            <div class="mt-8">
                {{ $projects->links() }}
            </div>
        @else
            <p class="text-red-500">Henüz hiç proje eklenmemiş.</p>
        @endif
    </section>

    <!-- Ana Sayfaya Dön Butonu -->
    <div class="flex justify-center mt-12">
        <a href="{{ url('/') }}" class="py-2 px-6 bg-blue-600 text-white rounded-full shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
            Ana Sayfaya Dön
        </a>
    </div>
@endsection
