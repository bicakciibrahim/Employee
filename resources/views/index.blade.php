@extends('./layout')

@section('title', 'Anasayfa')

@section('content')
    <!-- Anasayfa İçeriği Başlangıcı -->
    <section class="container mx-auto py-12 px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

            <div class="bg-gradient-to-br from-white to-gray-100 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <!-- Maaşlar Ikonu -->
                    <svg class="w-8 h-8 mr-3 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3z" />
                    </svg>
                    İletişim
                </h2>
                <a href="/iletisim" class="bg-green-900 hover:bg-teal-800 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Bize Ulaşın</a>
            </div>

            <!-- Çalışanlar Listesi -->
            <div class="bg-gradient-to-br from-white to-gray-100 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <!-- Çalışan Ikonu -->
                    <svg class="w-8 h-8 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2M8 7a4 4 0 118 0M6 9v2M18 9v2" />
                    </svg>
                    Çalışanlar
                </h2>
                <a href="/calisanlar" class="bg-indigo-600 hover:bg-indigo-800 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Tüm Çalışanları Görüntüle</a>
            </div>

            <!-- Projeler Listesi -->
            <div class="bg-gradient-to-br from-white to-gray-100 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <!-- Projeler Ikonu -->
                    <svg class="w-8 h-8 mr-3 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11m-7-7h4m1 11v6m-8-6v6m6-4l-6 6m6-6l6 6" />
                    </svg>
                    Projeler
                </h2>
                <a href="/projeler" class="bg-red-800 hover:bg-red-600 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Tüm Projeleri Görüntüle</a>
            </div>

            <!-- Görevler Listesi -->
            <div class="bg-gradient-to-br from-white to-gray-100 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <!-- Görevler Ikonu -->
                    <svg class="w-8 h-8 mr-3 text-yellow-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h6v6H3zM15 3h6v6h-6zM3 15h6v6H3zM15 15h6v6h-6z" />
                    </svg>
                    Görevler
                </h2>
                <a href="/gorevler" class="bg-yellow-500 hover:bg-yellow-700 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Tüm Görevleri Görüntüle</a>
            </div>

            <!-- Birimler Listesi -->
            <div class="bg-gradient-to-br from-white to-gray-100 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <!-- Birimler Ikonu -->
                    <svg class="w-8 h-8 mr-3 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h10M7 16h10" />
                    </svg>
                    Birimler
                </h2>
                <a href="/birimler" class="bg-red-600 hover:bg-red-800 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Tüm Birimleri Görüntüle</a>
            </div>

            <!-- İzinler Listesi -->
            <div class="bg-gradient-to-br from-white to-gray-100 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <!-- İzinler Ikonu -->
                    <svg class="w-8 h-8 mr-3 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3z" />
                    </svg>
                    İzinler
                </h2>
                <a href="/izinler" class="bg-purple-600 hover:bg-purple-800 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Tüm İzinleri Görüntüle</a>
            </div>

            <!-- Çalışan Eğitimleri Listesi -->
            <div class="bg-gradient-to-br from-white to-gray-100 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <!-- Çalışan Eğitimleri Ikonu -->
                    <svg class="w-8 h-8 mr-3 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3z" />
                    </svg>
                    Çalışan Eğitimleri
                </h2>
                <a href="/calisanegitim" class="bg-indigo-600 hover:bg-indigo-800 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Tüm Çalışan Eğitimleri Görüntüle</a>
            </div>

            <!-- Yoklama Listesi -->
            <div class="bg-gradient-to-br from-white to-gray-100 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <!-- Yoklama Ikonu -->
                    <svg class="w-8 h-8 mr-3 text-pink-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3z" />
                    </svg>
                    Yoklama
                </h2>
                <a href="/yoklama" class="bg-pink-600 hover:bg-pink-800 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Tüm Yoklamaları Görüntüle</a>
            </div>

            <!-- Performans Değerlendirmeleri Listesi -->
            <div class="bg-gradient-to-br from-white to-gray-100 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <!-- Performans Değerlendirmeleri Ikonu -->
                    <svg class="w-8 h-8 mr-3 text-yellow-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3z" />
                    </svg>
                    Performans Değerlendirmeleri
                </h2>
                <a href="/performansdgr" class="bg-yellow-600 hover:bg-yellow-800 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Performans Değerlendirme Ekranı</a>
            </div>

            <!-- Maaşlar Listesi -->
            <div class="bg-gradient-to-br from-white to-gray-100 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <!-- Maaşlar Ikonu -->
                    <svg class="w-8 h-8 mr-3 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3z" />
                    </svg>
                    Maaşlar
                </h2>
                <a href="/maaslar" class="bg-green-900 hover:bg-teal-800 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Maaşları Yönet</a>
            </div>



        </div>

    </section>



@endsection
