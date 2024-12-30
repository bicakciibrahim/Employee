@extends('layout')

@section('title', 'Projeler')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <!-- Proje Başlık ve Detayları -->
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-8">
            <h1 class="text-4xl font-extrabold text-gray-900 text-center mb-6">{{ $project->ad }}</h1>
            <p class="text-lg text-gray-700 text-center mb-6">{{ $project->aciklama }}</p>

            <!-- İlgili Çalışan Başlığı -->
            <div class="text-center mb-6">
                <h2 class="text-2xl font-semibold text-gray-800">İlgili Çalışan</h2>
                <p class="text-xl font-medium text-indigo-600 mt-2">{{ $project->employee->ad ?? 'Atanmadı' }} {{ $project->employee->soyad ?? '' }}</p>
            </div>

            <!-- Tarih Bilgisi -->
            <main class="mt-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-center">
                    <!-- Başlangıç Tarihi (Yeşil Tonları) -->
                    <div class="inline-block bg-gradient-to-r from-green-400 to-green-600 text-white text-sm font-medium px-6 py-2 rounded-full shadow-md">
                        <span class="font-semibold">Başlangıç:</span>
                        <p class="mt-1 text-xs">
                            {{ \Carbon\Carbon::parse($project->baslangic_tarihi)->locale('tr')->isoFormat('D MMMM YYYY') }}
                        </p>
                    </div>

                    <!-- Bitiş Tarihi (Kırmızı Tonları) -->
                    <div class="inline-block bg-gradient-to-r from-red-400 to-red-600 text-white text-sm font-medium px-6 py-2 rounded-full shadow-md">
                        <span class="font-semibold">Bitiş:</span>
                        <p class="mt-1 text-xs">
                            {{ \Carbon\Carbon::parse($project->bitis_tarihi)->locale('tr')->isoFormat('D MMMM YYYY') }}
                        </p>
                    </div>
                </div>
            </main>

            <!-- Düzenle Butonu -->
            <div class="mt-8 text-center">
                <a href="{{ route('project.edit', $project->id) }}" class="py-3 px-8 bg-yellow-500 text-white rounded-lg shadow-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400 transition duration-300">
                    Düzenle
                </a>
            </div>
        </div>

        <!-- Listeye Dön Butonu -->
        <div class="mt-6 text-center">
            <a href="{{ route('project.index') }}" class="py-3 px-8 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
                Projeler Listesine Dön
            </a>
        </div>
    </section>
@endsection
