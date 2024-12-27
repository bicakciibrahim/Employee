@extends('layout')

@section('title', 'Yeni Çalışan Ekle')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200">
            <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Yeni Çalışan Ekle</h2>

            <form action="{{ route('employee.store') }}" method="POST">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Ad -->
                    <div>
                        <label for="ad" class="block text-gray-700">Ad</label>
                        <input type="text" id="ad" name="ad" class="form-input mt-2 w-full" value="{{ old('ad') }}" required>
                    </div>

                    <!-- Soyad -->
                    <div>
                        <label for="soyad" class="block text-gray-700">Soyad</label>
                        <input type="text" id="soyad" name="soyad" class="form-input mt-2 w-full" value="{{ old('soyad') }}" required>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="form-input mt-2 w-full" value="{{ old('email') }}" required>
                    </div>

                    <!-- Telefon -->
                    <div>
                        <label for="telefon" class="block text-gray-700">Telefon</label>
                        <input type="text" id="telefon" name="telefon" class="form-input mt-2 w-full" value="{{ old('telefon') }}" required>
                    </div>

                    <!-- Çalışan Türü -->
                    <div>
                        <label for="calisan_turu_id" class="block text-gray-700">Çalışan Türü</label>
                        <select id="calisan_turu_id" name="calisan_turu_id" class="form-select mt-2 w-full" required>
                            @foreach ($employeeTypes as $type)
                                <option value="{{ $type->id }}" {{ old('calisan_turu_id') == $type->id ? 'selected' : '' }}>
                                    {{ $type->tur_adi }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Birim -->
                    <div>
                        <label for="birim_id" class="block text-gray-700">Birim</label>
                        <select id="birim_id" name="birim_id" class="form-select mt-2 w-full" required>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}" {{ old('birim_id') == $department->id ? 'selected' : '' }}>
                                    {{ $department->ad }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Görev -->
                    <div>
                        <label for="gorev_id" class="block text-gray-700">Görev</label>
                        <select id="gorev_id" name="gorev_id" class="form-select mt-2 w-full">
                            <option value="">Görev Seçiniz</option>
                            @foreach ($tasks as $task)
                                <option value="{{ $task->id }}" {{ old('gorev_id') == $task->id ? 'selected' : '' }}>
                                    {{ $task->ad }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- İşe Başlangıç Tarihi -->
                    <div>
                        <label for="ise_baslangic_tarihi" class="block text-gray-700">İşe Başlangıç Tarihi</label>
                        <input type="date" id="ise_baslangic_tarihi" name="ise_baslangic_tarihi" class="form-input mt-2 w-full" value="{{ old('ise_baslangic_tarihi') }}" required>
                    </div>



                    <!-- Maaş -->
                    <div>
                        <label for="maas" class="block text-gray-700">Maaş</label>
                        <input type="number" step="0.01" id="maas" name="maas" class="form-input mt-2 w-full" value="{{ old('maas') }}" required>
                    </div>
                </div>

                <button type="submit" class="py-2 px-6 bg-green-600 text-white rounded-lg mt-6 hover:bg-green-700">
                    Çalışan Ekle
                </button>
            </form>
        </div>
    </section>
@endsection
