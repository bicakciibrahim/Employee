@extends('layout')

@section('title', 'Yeni İzin Ekle')

@section('content')
    <div class="container mx-auto py-12">
        <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Yeni İzin Ekle</h2>

            <form action="{{ route('permissions.store') }}" method="POST">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Çalışan -->
                    <div>
                        <label for="calisan_id" class="block text-gray-700">Çalışan</label>
                        <select id="calisan_id" name="calisan_id" class="form-select mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                            <option value="" disabled selected>Çalışan Seçin</option> <!-- Varsayılan seçenek -->
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->ad }} {{ $employee->soyad }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- İzin Türü -->
                    <div>
                        <label for="izin_turu_id" class="block text-gray-700">İzin Türü</label>
                        <select id="izin_turu_id" name="izin_turu_id" class="form-select mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                            <option value="" disabled selected>İzin Türü Seçin</option> <!-- Varsayılan seçenek -->
                            @foreach ($permissionTypes as $type)
                                <option value="{{ $type->id }}">{{ $type->izin_turu_adi }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Başlangıç Tarihi -->
                    <div>
                        <label for="baslangic_tarihi" class="block text-gray-700">Başlangıç Tarihi</label>
                        <input type="date" id="baslangic_tarihi" name="baslangic_tarihi" class="form-input mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>

                    <!-- Bitiş Tarihi -->
                    <div>
                        <label for="bitis_tarihi" class="block text-gray-700">Bitiş Tarihi</label>
                        <input type="date" id="bitis_tarihi" name="bitis_tarihi" class="form-input mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>

                    <!-- Açıklama -->
                    <div>
                        <label for="aciklama" class="block text-gray-700">Açıklama (Opsiyonel)</label>
                        <textarea id="aciklama" name="aciklama" class="form-input mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                    </div>
                </div>

                <button type="submit" class="py-2 px-6 bg-green-600 text-white rounded-lg mt-6 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                    İzin Ekle
                </button>
            </form>
        </div>
    </div>
@endsection
