@extends('layout')

@section('title', 'Başvuru Formu')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <h1 class="text-4xl font-bold text-gray-900 mb-8">İnsan Kaynakları Başvuru Formu</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('application.store') }}" method="POST" class="bg-white rounded-xl p-8 shadow-md">
            @csrf
            <div class="form-group mb-4">
                <label for="isim" class="block text-gray-700 font-semibold">İsim</label>
                <input type="text" class="form-control block w-full mt-1 px-3 py-2 border rounded-md" name="isim" id="isim" value="{{ old('isim') }}" required>
                @error('isim')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="email" class="block text-gray-700 font-semibold">E-mail</label>
                <input type="email" class="form-control block w-full mt-1 px-3 py-2 border rounded-md" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="telefon" class="block text-gray-700 font-semibold">Telefon</label>
                <input type="text" class="form-control block w-full mt-1 px-3 py-2 border rounded-md" name="telefon" id="telefon" value="{{ old('telefon') }}">
                @error('telefon')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="birim_id" class="block text-gray-700 font-semibold">Birim</label>
                <select name="birim_id" id="birim_id" class="form-control block w-full mt-1 px-3 py-2 border rounded-md" required>
                    <option value="">Birim Seçin</option>
                    @foreach ($birimler as $birim)
                        <option value="{{ $birim->id }}" {{ old('birim_id') == $birim->id ? 'selected' : '' }}>{{ $birim->birim_adi }}</option>
                    @endforeach
                </select>
                @error('birim_id')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="mesaj" class="block text-gray-700 font-semibold">Mesaj</label>
                <textarea class="form-control block w-full mt-1 px-3 py-2 border rounded-md" name="mesaj" id="mesaj">{{ old('mesaj') }}</textarea>
                @error('mesaj')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Başvur
            </button>
        </form>
    </section>
@endsection
