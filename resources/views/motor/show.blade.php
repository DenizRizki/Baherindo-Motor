@extends('layouts.main')

@section('tittle', $motor->nama_motor)

@section('content')
<div class="bg-gray-100 flex flex-col items-center pt-24 pb-10 px-4">
    
    {{-- Gambar Motor --}}
    <img class="w-full max-w-5xl h-96 object-cover rounded-lg shadow-lg" 
         src="{{ asset('storage/' . $motor->gambar_motor) }}" 
         alt="{{ $motor->nama_motor }}">

    {{-- Detail Motor --}}
    <div class="w-full max-w-5xl bg-gray-900 border border-gray-700 rounded-lg shadow-lg text-white p-8 mt-6">
        <h2 class="text-4xl font-bold mb-6 flex items-center gap-3">
         {{ $motor->nama_motor }}
        </h2>

        <p class="mb-4 flex items-center gap-2">
            <i class="bi bi-cash-stack text-green-400"></i>
            <strong>Harga:</strong> {{ $motor->harga_motor }}
        </p>
        <p class="mb-4 flex items-center gap-2">
            <i class="bi bi-calendar text-blue-400"></i>
            <strong>Tahun:</strong> {{ $motor->tahun_motor }}
        </p>
        <p class="mb-8 flex items-center gap-2">
            <i class="bi bi-speedometer2 text-red-400"></i>
            <strong>KM:</strong> {{ $motor->km_motor }}
        </p>

        {{-- Tombol Order via WhatsApp --}}
        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20{{ urlencode($motor->nama_motor) }}" 
           target="_blank"
           class="block w-full text-center bg-green-500 hover:bg-green-400 text-white font-semibold px-6 py-3 rounded-full transition duration-300 shadow-md flex items-center justify-center gap-2 mb-4">
            <i class="bi bi-whatsapp"></i> Order via WhatsApp
        </a>

        {{-- Tombol Edit & Hapus --}}
        <div class="flex gap-4">    
            {{-- Tombol Edit --}}
            <a href="{{ route('motor.edit', $motor->id) }}" 
               class="flex-1 text-center bg-blue-500 hover:bg-blue-400 text-white font-semibold px-6 py-3 rounded-full transition duration-300 shadow-md flex items-center justify-center gap-2">
                <i class="bi bi-pencil-square"></i> Edit Data
            </a>

            {{-- Tombol Hapus --}}
            <form action="{{ route('motor.destroy', $motor->id) }}" method="POST" class="flex-1">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        onclick="return confirm('Yakin ingin menghapus motor ini?')"
                        class="w-full bg-red-600 hover:bg-red-500 text-white font-semibold px-6 py-3 rounded-full transition duration-300 shadow-md flex items-center justify-center gap-2">
                    <i class="bi bi-trash"></i> Hapus
                </button>
            </form>
        </div>
    </div>

</div>
@endsection
