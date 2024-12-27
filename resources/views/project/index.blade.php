@extends('layout')

@section('title', 'Projeler')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Projeler</h1>

        @if($projects->isNotEmpty())
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition duration-300">
                        <h2 class="text-2xl font-semibold text-gray-800">{{ $project->ad }}</h2>
                        <p class="text-lg text-gray-600 mt-2">{{ $project->aciklama }}</p>
                        <p class="text-sm text-gray-500 mt-2">
                            <strong>Başlangıç:</strong> {{ \Carbon\Carbon::parse($project->baslangic_tarihi)->locale('tr')->isoFormat('D MMMM YYYY') }}
                            <span class="ml-4"><strong>Bitiş:</strong> {{ \Carbon\Carbon::parse($project->bitis_tarihi)->locale('tr')->isoFormat('D MMMM YYYY') }}</span>
                        </p>
                        <a href="{{ route('project.show', $project->id) }}" class="text-blue-600 hover:text-blue-800 mt-4 inline-block">Projeyi Görüntüle</a>
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
        <a href="{{ url('/') }}" class="py-2 px-6 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
            Ana Sayfaya Dön
        </a>
    </div>
@endsection
