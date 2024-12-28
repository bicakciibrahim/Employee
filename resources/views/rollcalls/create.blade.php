@extends('layout')

@section('title', 'Yoklama Ekle')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200">
            <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Yeni Yoklama Ekle</h2>

            <!-- Yoklama Ekleme Formu -->
            <form action="{{ route('rollcalls.store') }}" method="POST">
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
                        @error('calisan_id')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Yoklama Tarihi -->
                    <div>
                        <label for="tarih" class="block text-gray-700 font-medium">Yoklama Tarihi</label>
                        <input type="date" id="tarih" name="tarih" class="form-input mt-2 w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                        @error('tarih')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Giriş Saati -->
                    <div>
                        <label for="giris_saati" class="block text-gray-700 font-medium">Giriş Saati</label>
                        <input type="time" id="giris_saati" name="giris_saati" class="form-input mt-2 w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600">
                        @error('giris_saati')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Çıkış Saati -->
                    <div>
                        <label for="cikis_saati" class="block text-gray-700 font-medium">Çıkış Saati</label>
                        <input type="time" id="cikis_saati" name="cikis_saati" class="form-input mt-2 w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600">
                        @error('cikis_saati')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Durum -->
                    <div>
                        <label for="durum" class="block text-gray-700 font-medium">Yoklama Durumu</label>
                        <select id="durum" name="durum" class="form-select mt-2 w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                            <option value="">Durum Seçin</option>
                            <option value="Geldi">Geldi</option>
                            <option value="Gelmedi">Gelmedi</option>
                            <option value="Geç Geldi">Geç Geldi</option>
                            <option value="İzinli">İzinli</option>
                        </select>
                        @error('durum')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="py-2 px-6 bg-blue-600 text-white rounded-lg mt-6 hover:bg-blue-700 transition duration-300">
                    Yoklamayı Ekle
                </button>
            </form>
        </div>
    </section>
@endsection
