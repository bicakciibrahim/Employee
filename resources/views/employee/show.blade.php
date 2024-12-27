@extends('layout')

@section('title', 'Çalışan Detayları')

@section('content')

    <section class="container mx-auto py-12 px-6">
        <div class="bg-white rounded-xl shadow-lg p-8 space-y-8">

            <!-- Düzenle Butonu -->
            <div class="flex justify-end mb-6">
                <a href="{{ route('employee.edit', $employee->id) }}"
                   class="bg-gradient-to-r from-blue-600 via-blue-700 to-blue-800 text-white px-6 py-3 rounded-xl shadow-lg transform transition-all duration-300 hover:scale-105 hover:bg-blue-900">
                    <span class="font-semibold text-lg">Düzenle</span>
                </a>
            </div>

            <!-- Çalışan Bilgileri Header -->
            <div class="flex items-center mb-6">
                <div class="w-20 h-20 bg-gray-300 rounded-full overflow-hidden flex justify-center items-center mr-6">
                    <svg class="w-12 h-12 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9 5-9 5-9-5 9-5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l-9 5V9l9 5z"></path>
                    </svg>
                </div>

                <div>
                    <h1 class="text-4xl font-bold text-gray-800">{{ $employee->ad }} {{ $employee->soyad }}</h1>
                    <p class="text-xl text-gray-500 mt-2">
                        @if ($employee->employeeType)
                            {{ $employee->employeeType->tur_adi }}
                        @else
                            Belirtilmemiş
                        @endif
                    </p>
                </div>
            </div>

            <!-- Kişisel ve Çalışma Bilgileri -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Kişisel Bilgiler</h2>
                    <div class="space-y-4">
                        <p class="text-lg text-gray-700"><strong>Ad:</strong> {{ $employee->ad }}</p>
                        <p class="text-lg text-gray-700"><strong>Soyad:</strong> {{ $employee->soyad }}</p>
                        <p class="text-lg text-gray-700"><strong>Email:</strong> {{ $employee->email }}</p>
                        <p class="text-lg text-gray-700"><strong>Telefon:</strong> {{ $employee->telefon }}</p>
                    </div>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Çalışma Bilgileri</h2>
                    <div class="space-y-4">
                        <p class="text-lg text-gray-700"><strong>İşe Başlama Tarihi:</strong> {{ \Carbon\Carbon::parse($employee->ise_baslangic_tarihi)->locale('tr')->isoFormat('D MMMM YYYY') }}</p>
                        <p class="text-lg text-gray-700"><strong>Son Çalışma Tarihi:</strong> {{ $employee->son_calisma_tarihi ? \Carbon\Carbon::parse($employee->son_calisma_tarihi)->locale('tr')->isoFormat('D MMMM YYYY') : 'Devam Ediyor' }}</p>
                        <p class="text-lg text-gray-700"><strong>Maaş:</strong> {{ $employee->maas }} TL</p>
                    </div>
                </div>
            </div>

            <!-- Görev Bilgileri -->
            <div class="mt-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Görev Bilgileri</h2>
                @if ($employee->task)
                    <div class="bg-gray-100 rounded-xl p-6 shadow-md">
                        <h3 class="text-xl font-semibold text-gray-700">{{ $employee->task->gorev_adi }}</h3>
                        <p class="text-lg text-gray-600 mt-2">{{ $employee->task->aciklama }}</p>
                        <div class="mt-4">
                            <span class="text-sm text-gray-500">Durum: </span>
                            <span class="text-sm font-semibold
                                @if($employee->task->durum == 'Tamamlandı') text-green-500
                                @elseif($employee->task->durum == 'Devam Ediyor') text-yellow-500
                                @else text-red-500 @endif">
                                {{ $employee->task->durum }}
                            </span>
                        </div>
                    </div>
                @else
                    <p class="text-red-500">Bu çalışana henüz bir görev atanmadı.</p>
                @endif
            </div>

            <!-- Projeler -->
            <div class="mt-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Projeler</h2>
                @if ($employee->projects && $employee->projects->isNotEmpty())
                    <div class="space-y-4">
                        @foreach ($employee->projects as $project)
                            <div class="bg-gray-100 rounded-xl p-6 shadow-md hover:shadow-lg transition duration-300">
                                <h3 class="text-xl font-semibold text-gray-700">{{ $project->ad }}</h3>
                                <p class="text-lg text-gray-600 mt-2">{{ $project->aciklama }}</p>
                                <div class="mt-4">
                                    <span class="text-sm text-gray-500">Başlangıç: </span>
                                    <span class="font-semibold">{{ \Carbon\Carbon::parse($project->baslangic_tarihi)->locale('tr')->isoFormat('D MMMM YYYY') }}</span>
                                    <span class="text-sm text-gray-500 ml-4">Bitiş: </span>
                                    <span class="font-semibold">{{ \Carbon\Carbon::parse($project->bitis_tarihi)->locale('tr')->isoFormat('D MMMM YYYY') }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-red-500">Bu çalışan şu anda bir projede yer almıyor.</p>
                @endif

                <!-- Projeleri Düzenle Butonu -->
                <div class="mt-6">
                    <a href="{{ route('project.index') }}" class="inline-block py-2 px-6 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
                        Projeleri Düzenle
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Çalışanlar Listesine Dön Butonu -->
    <div class="flex justify-center mt-12">
        <a href="{{ route('employees.index') }}" class="py-2 px-6 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
            Çalışanlar Listesine Dön
        </a>
    </div>
@endsection
