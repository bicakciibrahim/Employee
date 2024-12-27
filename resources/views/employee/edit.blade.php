@extends('layout')

@section('title', 'Çalışan Düzenle')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-8">
                Çalışan Düzenle: {{ $employee->ad }} {{ $employee->soyad }}
            </h1>

            <!-- Form Başlangıcı -->
            <form action="{{ route('employee.update', $employee->id) }}" method="POST" class="space-y-8">
                @csrf
                @method('PUT')

                <!-- Kişisel Bilgiler -->
                <div>
                    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Kişisel Bilgiler</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach (['ad' => 'Ad', 'soyad' => 'Soyad', 'email' => 'Email', 'telefon' => 'Telefon'] as $field => $label)
                            <div>
                                <label for="{{ $field }}" class="block text-lg font-medium text-gray-700">{{ $label }}</label>
                                <input
                                    type="{{ $field === 'email' ? 'email' : 'text' }}"
                                    id="{{ $field }}"
                                    name="{{ $field }}"
                                    value="{{ old($field, $employee->$field) }}"
                                    class="mt-2 p-3 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    required
                                >
                                @error($field)
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Çalışma Bilgileri -->
                <div>
                    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Çalışma Bilgileri</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach (['ise_baslangic_tarihi' => 'İşe Başlama Tarihi', 'son_calisma_tarihi' => 'Son Çalışma Tarihi'] as $field => $label)
                            <div>
                                <label for="{{ $field }}" class="block text-lg font-medium text-gray-700">{{ $label }}</label>
                                <input
                                    type="date"
                                    id="{{ $field }}"
                                    name="{{ $field }}"
                                    value="{{ old($field, $employee->$field) }}"
                                    class="mt-2 p-3 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    {{ $field === 'son_calisma_tarihi' ? '' : 'required' }}
                                >
                                @error($field)
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        @endforeach
                        <div>
                            <label for="maas" class="block text-lg font-medium text-gray-700">Maaş</label>
                            <input
                                type="number"
                                id="maas"
                                name="maas"
                                value="{{ old('maas', $employee->maas) }}"
                                class="mt-2 p-3 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required
                            >
                            @error('maas')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>


                <div>
                    <div>
                        <div>
                            <div>
                                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Çalışan Türü</h2>
                                <div class="grid grid-cols-1 gap-6">
                                    <div>
                                        <label for="employee_type_id" class="block text-lg font-medium text-gray-700">Çalışan Türü</label>
                                        <select id="employee_type_id" name="employee_type_id" class="mt-2 p-3 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                                            <!-- Mevcut Türü Göster ve Seçili Olsun -->
                                            <option value="" disabled {{ old('employee_type_id', $employee->employee_type_id) ? '' : 'selected' }}>
                                                {{ $employee->employeeType ? $employee->employeeType->tur_adi : 'Çalışan Türü Seçin' }}
                                            </option>
                                            @foreach ($employeeTypes as $type)
                                                <option value="{{ $type->id }}" {{ old('employee_type_id', $employee->employee_type_id) == $type->id ? 'selected' : '' }}>
                                                    {{ $type->tur_adi }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('employee_type_id')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>





                            <div class="mb-6">
                            <label for="task_id" class="block text-lg font-medium text-gray-700">Görev</label>
                            <select id="task_id" name="task_id" class="mt-2 p-2 border border-gray-300 rounded-md w-full">
                                <option value="" disabled {{ old('task_id', $employee->task_id) ? '' : 'selected' }}>
                                    {{ $employee->task ? $employee->task->gorev_adi : 'Görev Seçin' }}
                                </option>
                                @foreach ($tasks as $task)
                                    <option value="{{ $task->id }}" {{ old('task_id', $employee->task_id) == $task->id ? 'selected' : '' }}>
                                        {{ $task->gorev_adi }}
                                    </option>
                                @endforeach
                            </select>
                        </div>



                        <!-- Submit Butonu -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-500">
                        Güncelle
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
