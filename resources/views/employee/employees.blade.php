@extends('./layout')

@section('title', 'Çalışanlar')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-200 relative">
            <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Tüm Çalışanlar</h2>

            <a href="{{ route('employee.create') }}" class="py-2 px-6 bg-green-600 text-white rounded-full shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 transition duration-300 absolute top-4 right-4">
                <span class="flex items-center space-x-2">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m7-7H5" />
                    </svg>
                    <span>Çalışan Ekle</span>
                </span>
            </a>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-10">
                @foreach($employees as $employee)
                    <div class="bg-gray-50 p-6 rounded-xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition duration-300 ease-in-out">
                        <div class="flex items-center space-x-4 mb-6">
                            <div class="w-20 h-20 bg-gray-200 rounded-full flex justify-center items-center text-white">
                                <svg class="w-12 h-12 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9 5-9 5-9-5 9-5z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l-9 5V9l9 5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800">{{ $employee->ad }} {{ $employee->soyad }}</h3>
                                <p class="text-gray-500 text-sm">{{ $employee->email }}</p>
                            </div>
                        </div>

                        <p class="text-gray-700 mb-4">
                            <strong class="font-medium text-gray-800">Çalışan Türü:</strong>
                            @if ($employee->employeeType)
                                {{ $employee->employeeType->tur_adi }}
                            @else
                                <span class="text-gray-400">Belirtilmemiş</span>
                            @endif
                        </p>

                        <!-- Yeşil Buton, Ortalanmış -->
                        <div class="flex justify-center mt-6">
                            <a href="/calisan/{{ $employee->id }}" class="py-2 px-8 bg-green-600 text-white font-semibold rounded-full shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 transition duration-300">
                                Detayları Görüntüle
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Ana Sayfaya Dön Butonu -->
    <div class="flex justify-center mt-12">
        <a href="{{ url('/') }}" class="py-2 px-6 bg-blue-600 text-white rounded-full shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
            Ana Sayfaya Dön
        </a>
    </div>
@endsection
