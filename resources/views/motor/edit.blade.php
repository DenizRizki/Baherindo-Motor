@extends('layouts.main')

@section('tittle', 'Welcome to Baherindo Motor')

@section('content')
<div class="max-w-2xl mx-auto mt-20 p-8 bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit Data Motor</h2>

    <form action="{{ route('motor.update', $motor->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT') <!-- Laravel method spoofing -->

        <div>
            <label for="nama_motor" class="block text-gray-700 font-medium mb-1">Nama Motor</label>
            <input type="text" name="nama_motor" id="nama_motor" value="{{ $motor->nama_motor }}" required
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>

        <div>
            <label for="harga_motor" class="block text-gray-700 font-medium mb-1">Harga Motor</label>
            <input type="number" name="harga_motor" id="harga_motor" value="{{ $motor->harga_motor }}" required
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>

        <div>
            <label for="tahun_motor" class="block text-gray-700 font-medium mb-1">Tahun Motor</label>
            <input type="number" name="tahun_motor" id="tahun_motor" value="{{ $motor->tahun_motor }}" required
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>

        <div>
            <label for="km_motor" class="block text-gray-700 font-medium mb-1">Kilometer Motor</label>
            <input type="number" name="km_motor" id="km_motor" value="{{ $motor->km_motor }}" required
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
