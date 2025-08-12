@extends('layouts.main')

@section('tittle', $mobil->nama_mobil)

@section('content')
<div class="bg-gray-100 flex flex-col items-center pt-24 pb-10 px-4 min-h-screen">
    
    {{-- Gambar Mobil --}}
    <img class="w-full max-w-5xl h-96 object-cover rounded-lg shadow-lg" 
         src="{{ asset('storage/' . $mobil->gambar_mobil) }}" 
         alt="{{ $mobil->nama_mobil }}">

    {{-- Detail Mobil --}}
    <div class="w-full max-w-5xl bg-gray-900 border border-gray-700 rounded-lg shadow-lg text-white p-8 mt-6">
        <h2 class="text-4xl font-bold mb-6 flex items-center gap-3">
         {{ $mobil->nama_mobil }}
        </h2>

        <p class="mb-4 flex items-center gap-2 text-lg">
            <i class="bi bi-cash-stack text-green-400"></i>
            <strong>Harga:</strong> Rp {{ number_format($mobil->harga_mobil, 0, ',', '.') }}
        </p>
        <p class="mb-4 flex items-center gap-2 text-lg">
            <i class="bi bi-calendar text-blue-400"></i>
            <strong>Tahun:</strong> {{ $mobil->tahun_mobil }}
        </p>
        <p class="mb-8 flex items-center gap-2 text-lg">
            <i class="bi bi-speedometer2 text-red-400"></i>
            <strong>KM:</strong> {{ number_format($mobil->km_mobil, 0, ',', '.') }} KM
        </p>

        {{-- Tombol Order via WhatsApp --}}
        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20{{ urlencode($mobil->nama_mobil) }}" 
           target="_blank"
           class="block w-full text-center bg-green-500 hover:bg-green-400 text-white font-semibold px-6 py-3 rounded-full transition duration-300 shadow-md flex items-center justify-center gap-2 mb-4">
            <i class="bi bi-whatsapp"></i> Order via WhatsApp
        </a>

        {{-- Tombol Edit & Hapus --}}
        <div class="flex flex-col sm:flex-row gap-4">    
            {{-- Tombol Edit --}}
            <a href="{{ route('mobil.edit', $mobil->id) }}" 
               class="flex-1 text-center bg-blue-500 hover:bg-blue-400 text-white font-semibold px-6 py-3 rounded-full transition duration-300 shadow-md flex items-center justify-center gap-2">
                <i class="bi bi-pencil-square"></i> Edit Data
            </a>

            {{-- Tombol Hapus --}}
            <form action="{{ route('mobil.destroy', $mobil->id) }}" method="POST" class="flex-1">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        onclick="return confirm('Yakin ingin menghapus mobil ini?')"
                        class="w-full bg-red-600 hover:bg-red-500 text-white font-semibold px-6 py-3 rounded-full transition duration-300 shadow-md flex items-center justify-center gap-2">
                    <i class="bi bi-trash"></i> Hapus
                </button>
            </form>
        </div>
    </div>

</div>
@endsection
