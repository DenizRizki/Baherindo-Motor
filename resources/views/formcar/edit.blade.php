@extends('layouts.main')

@section('tittle', 'Welcome to Baherindo Motor')

@section('content')
<div class="max-w-2xl mx-auto mt-20 p-8 bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit Data Mobil</h2>

    <form action="{{ route('mobil.update', $mobil->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT') <!-- Laravel method spoofing -->

        <div>
            <label for="nama_mobil" class="block text-gray-700 font-medium mb-1">Nama Mobil</label>
            <input type="text" name="nama_mobil" id="nama_mobil" value="{{ $mobil->nama_mobil }}" required
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>

        <div>
            <label for="harga_mobil" class="block text-gray-700 font-medium mb-1">Harga Mobil</label>
            <input type="number" name="harga_mobil" id="harga_mobil" value="{{ $mobil->harga_mobil }}" required
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>

        <div>
            <label for="tahun_mobil" class="block text-gray-700 font-medium mb-1">Tahun Mobil</label>
            <input type="number" name="tahun_mobil" id="tahun_mobil" value="{{ $mobil->tahun_mobil }}" required
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>

        <div>
            <label for="km_mobil" class="block text-gray-700 font-medium mb-1">Kilometer Mobil</label>
            <input type="number" name="km_mobil" id="km_mobil" value="{{ $mobil->km_mobil }}" required
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>

        <div class="text-right">
            <button type="submit"
                class="bg-yellow-400 hover:bg-yellow-300 text-black font-semibold px-6 py-2 rounded-lg shadow-md transition duration-300">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
