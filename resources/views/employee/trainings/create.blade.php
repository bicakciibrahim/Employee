@extends('layout')

@section('title', 'Eğitim Ekle')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200">
            <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Yeni Eğitim Ekle</h2>

            <!-- Eğitim Ekleme Formu -->
            <form action="{{ route('employee.trainings.store') }}" method="POST">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Çalışan Seçimi -->
                    <div>
                        <label for="calisan_id" class="block text-gray-700 font-medium">Çalışan Seçin</label>
                        <select id="calisan_id" name="calisan_id" class="form-select mt-2 w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                            <option value="">Çalışan Seçin</option>
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->ad }} {{ $employee->soyad }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Eğitim Türü Seçimi -->
                    <div>
                        <label for="egitim_turu_id" class="block text-gray-700 font-medium">Eğitim Türü</label>
                        <select id="egitim_turu_id" name="egitim_turu_id" class="form-select mt-2 w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                            <option value="">Eğitim Türü Seçin</option>
                            @foreach ($educationTypes as $educationType)
                                <option value="{{ $educationType->id }}">{{ $educationType->ad }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Eğitim Tarihi -->
                    <div>
                        <label for="egitim_tarihi" class="block text-gray-700 font-medium">Eğitim Tarihi</label>
                        <input type="date" id="egitim_tarihi" name="egitim_tarihi" class="form-input mt-2 w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                    </div>

                    <!-- Eğitim Durumu -->
                    <div>
                        <label for="egitim_durumu" class="block text-gray-700 font-medium">Eğitim Durumu</label>
                        <select id="egitim_durumu" name="egitim_durumu" class="form-select mt-2 w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                            <option value="">Eğitim Durumunu Seçin</option>
                            <option value="Başarılı">Başarılı</option>
                            <option value="Başarısız">Başarısız</option>
                            <option value="Devam Ediyor">Devam Ediyor</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="py-2 px-6 bg-blue-600 text-white rounded-lg mt-6 hover:bg-blue-700 transition duration-300">
                    Eğitimi Ekle
                </button>
            </form>
        </div>
    </section>
@endsection
