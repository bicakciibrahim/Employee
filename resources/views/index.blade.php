@extends('./layout')

@section('title', 'Anasayfa')

@section('content')
    <!-- Anasayfa İçeriği Başlangıcı -->
    <section class="container mx-auto py-12 px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

            <!-- İletişim Bölümü -->
            <div class="bg-gradient-to-br from-teal-100 to-teal-200 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <svg class="w-8 h-8 mr-3 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3z" />
                    </svg>
                    İletişim
                </h2>
                <p class="text-gray-600 mb-4">Bize her türlü öneri, şikayet ve başvuru formlarınız ile ulaşabilirsiniz. Çalışanlarımıza en hızlı şekilde geri dönüş sağlıyoruz.</p>
                <a href="{{ route('complaint.contact') }}" class="bg-green-900 hover:bg-teal-800 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Bize Ulaşın</a>
            </div>

            <!-- Çalışanlar Listesi Bölümü -->
            <div class="bg-gradient-to-br from-indigo-100 to-indigo-200 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <svg class="w-8 h-8 mr-3 text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2M8 7a4 4 0 118 0M6 9v2M18 9v2" />
                    </svg>
                    Çalışanlar
                </h2>
                <p class="text-gray-600 mb-4">Tüm çalışanların listesine buradan ulaşabilirsiniz. Çalışanlarınızın verilerini kolayca görüntüleyebilirsiniz.</p>
                <a href="{{ route('employees.index') }}" class="bg-indigo-600 hover:bg-indigo-800 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Tüm Çalışanları Görüntüle</a>
            </div>

            <!-- Projeler Listesi Bölümü -->
            <div class="bg-gradient-to-br from-red-100 to-red-200 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <svg class="w-8 h-8 mr-3 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11m-7-7h4m1 11v6m-8-6v6m6-4l-6 6m6-6l6 6" />
                    </svg>
                    Projeler
                </h2>
                <p class="text-gray-600 mb-4">Tüm projelerinizi buradan görüntüleyebilirsiniz. Projelerinizin durumlarını ve detaylarını takip edebilirsiniz.</p>
                <a href="{{ route('project.index') }}" class="bg-red-800 hover:bg-red-600 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Tüm Projeleri Görüntüle</a>
            </div>

            <!-- Görevler Listesi Bölümü -->
            <div class="bg-gradient-to-br from-yellow-100 to-yellow-200 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <svg class="w-8 h-8 mr-3 text-yellow-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h6v6H3zM15 3h6v6h-6zM3 15h6v6H3zM15 15h6v6h-6z" />
                    </svg>
                    Görevler
                </h2>
                <p class="text-gray-600 mb-4">Tüm çalışanlara atanmış görevleri buradan görüntüleyebilir ve yönetebilirsiniz. Görev durumları hakkında bilgi edinin.</p>
                <a href="{{ route('tasks.index') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Tüm Görevleri Görüntüle</a>
            </div>

            <!-- Birimler Listesi Bölümü -->
            <div class="bg-gradient-to-br from-red-100 to-red-200 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <svg class="w-8 h-8 mr-3 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h10M7 16h10" />
                    </svg>
                    Birimler
                </h2>
                <p class="text-gray-600 mb-4">Farklı birimler hakkında detayları buradan öğrenebilirsiniz. Çalışanlarınızı ilgili birimlere göre düzenleyebilirsiniz.</p>
                <a href="{{ route('units.index') }}" class="bg-red-600 hover:bg-red-800 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Tüm Birimleri Görüntüle</a>
            </div>

            <!-- İzinler Listesi Bölümü -->
            <div class="bg-gradient-to-br from-purple-100 to-purple-200 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <svg class="w-8 h-8 mr-3 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3z" />
                    </svg>
                    İzinler
                </h2>
                <p class="text-gray-600 mb-4">Çalışanlarınızın izin durumlarını burada görüntüleyebilir, onaylama işlemlerini gerçekleştirebilirsiniz.</p>
                <a href="{{ route('permissions.index') }}" class="bg-purple-600 hover:bg-purple-800 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Tüm İzinleri Görüntüle</a>
            </div>

            <!-- Çalışan Eğitimleri Listesi Bölümü -->
            <div class="bg-gradient-to-br from-indigo-100 to-indigo-200 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <svg class="w-8 h-8 mr-3 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3z" />
                    </svg>
                    Çalışan Eğitimleri
                </h2>
                <p class="text-gray-600 mb-4">Eğitim süreçlerinizi yönetmek için çalışan eğitimlerini buradan görüntüleyebilirsiniz.</p>
                <a href="{{ route('employee.trainings.index') }}" class="bg-indigo-600 hover:bg-indigo-800 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Tüm Çalışan Eğitimleri Görüntüle</a>
            </div>

            <!-- Yoklama Listesi Bölümü -->
            <div class="bg-gradient-to-br from-pink-100 to-pink-200 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <svg class="w-8 h-8 mr-3 text-pink-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3z" />
                    </svg>
                    Yoklama
                </h2>
                <p class="text-gray-600 mb-4">Çalışanların yoklama durumlarını takip edebilirsiniz. Bu alanda her türlü yoklama işlemini gerçekleştirebilirsiniz.</p>
                <a href="{{ route('rollcalls.index') }}" class="bg-pink-600 hover:bg-pink-800 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Tüm Yoklamaları Görüntüle</a>
            </div>

            <!-- Performans Değerlendirmeleri Listesi Bölümü -->
            <div class="bg-gradient-to-br from-blue-100 to-blue-200 p-8 rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <svg class="w-8 h-8 mr-3 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    Performans Değerlendirmeleri
                </h2>
                <p class="text-gray-600 mb-4">Çalışanlarınızın performans değerlendirmelerini burada görüntüleyebilir ve raporları inceleyebilirsiniz.</p>
                <a href="{{ route('performances.index') }}" class="bg-blue-600 hover:bg-blue-800 text-white py-3 px-6 rounded-lg font-medium text-center block transition duration-300">Tüm Performans Değerlendirmelerini Görüntüle</a>
            </div>

        </div>
    </section>
    <!-- Anasayfa İçeriği Bitişi -->
@endsection
