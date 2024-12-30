@extends('layout')

@section('title', 'Projeler')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <h1 class="text-4xl font-bold text-gray-900 mb-8">Projeler</h1>

        <div class="bg-white rounded-xl p-8 shadow-md">
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">{{ $project->ad }}</h2>
            <p class="text-lg text-gray-600 mt-2">{{ $project->aciklama }}</p>

            <!-- İlgili Çalışan Başlığı -->
            <h3 class="text-2xl font-bold text-gray-800 mt-6">İlgili Çalışan</h3>
            <p class="text-xl font-semibold text-indigo-700 mt-2">{{ $project->employee->ad ?? 'Atanmadı' }} {{ $project->employee->soyad ?? '' }}</p>

            <div class="mt-6 space-x-4 text-sm text-gray-600">
                <span><strong class="font-medium text-gray-900">Başlangıç:</strong> {{ \Carbon\Carbon::parse($project->baslangic_tarihi)->locale('tr')->isoFormat('D MMMM YYYY') }}</span>
                <span><strong class="font-medium text-gray-900">Bitiş:</strong> {{ \Carbon\Carbon::parse($project->bitis_tarihi)->locale('tr')->isoFormat('D MMMM YYYY') }}</span>
            </div>

            <!-- Düzenle Butonu -->
            <div class="mt-6">
                <a href="{{ route('project.edit', $project->id) }}" class="py-2 px-6 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400 transition duration-300">
                    Düzenle
                </a>
            </div>
        </div>

        <a href="{{ route('project.index') }}" class="mt-4 inline-block py-2 px-6 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
            Projeler Listesine Dön
        </a>
    </section>
@endsection
