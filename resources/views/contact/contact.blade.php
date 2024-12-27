@extends('./layout')

@section('title', 'Anasayfa')

@section('content')
    <!-- Anasayfa İçeriği Başlangıcı -->
    <section class="container mx-auto py-12 px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

            <!-- Şikayet Formu -->
            <div class="bg-gradient-to-br from-white to-gray-100 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <!-- Şikayet Ikonu -->
                    <svg class="w-8 h-8 mr-3 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 014 4v7.292a4 4 0 01-2.34 3.659l-5.309 2.309a1 1 0 01-.712 0L3 19.305A4 4 0 012 15.646V8.354a4 4 0 012-3.708l6-3.292a4 4 0 014-.002z" />
                    </svg>
                    Şikayet Formu
                </h2>
                <a href="/iletisim/sikayet" class="bg-red-600 hover:bg-red-800 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Şikayetinizi Bildirin</a>
            </div>

            <!-- Öneri Formu -->
            <div class="bg-gradient-to-br from-white to-gray-100 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <!-- Öneri Ikonu -->
                    <svg class="w-8 h-8 mr-3 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.5 4.5-4.5 4.5m0-4.5H3M21 4a2 2 0 01-2 2H5a2 2 0 01-2-2m2 4v14a2 2 0 002 2h10a2 2 0 002-2V8m-6 4h.01" />
                    </svg>
                    Öneri Formu
                </h2>
                <a href="/iletisim/oneri" class="bg-green-600 hover:bg-green-800 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Önerinizi Paylaşın</a>
            </div>

            <!-- İş Başvurusu Formu -->
            <div class="bg-gradient-to-br from-white to-gray-100 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <!-- İş Başvurusu Ikonu -->
                    <svg class="w-8 h-8 mr-3 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a10 10 0 0110 10v2a10 10 0 01-20 0v-2A10 10 0 0112 2zm0 6a3 3 0 100 6 3 3 0 000-6z" />
                    </svg>
                    İş Başvurusu Formu
                </h2>
                <a href="/iletisim/basvuru" class="bg-blue-600 hover:bg-blue-800 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Başvurunuzu Yapın</a>
            </div>

        </div>
    </section>

    <!-- Ana Sayfaya Dön Butonu -->
    <div class="flex justify-center mt-12">
        <a href="{{ url('/') }}" class="py-2 px-6 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
            Ana Sayfaya Dön
        </a>
    </div>
@endsection
