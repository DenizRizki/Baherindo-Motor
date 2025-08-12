@extends('layouts.main')

@section('tittle', 'Welcome to Baherindo Motor')

@section('content')
    <div class="text-center my-12 pt-24">
        <h1 class="text-4xl font-bold">Mobil Rekomendasi</h1>
        <p class="text-lg mt-4">Jual beli mobil second termurah di Bekasi</p>
    </div>

    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($mobil as $mr)
            <a href="{{ route('mobil.show', $mr->id) }}" 
               class="block bg-gray-900 border border-gray-700 rounded-lg overflow-hidden shadow-lg text-white no-underline hover:shadow-xl transition-shadow duration-300">
                <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $mr['gambar_mobil']) }}" alt="{{ $mr['nama_mobil'] }}">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">{{ $mr['nama_mobil'] }}</h2>
                    <p class="mb-2 flex items-center gap-2">
                        <i class="bi bi-cash-stack text-green-400"></i>
                        <strong>Harga:</strong> {{ number_format($mr['harga_mobil'], 0, ',', '.') }}
                    </p>
                    <p class="mb-2 flex items-center gap-2">
                        <i class="bi bi-calendar text-blue-400"></i>
                        <strong>Tahun:</strong> {{ $mr['tahun_mobil'] }}
                    </p>
                    <p class="mb-4 flex items-center gap-2">
                        <i class="bi bi-speedometer2 text-red-400"></i>
                        <strong>KM:</strong> {{ number_format($mr['km_mobil'], 0, ',', '.') }}
                    </p>

                    <span class="inline-block bg-yellow-400 hover:bg-yellow-300 text-black font-semibold px-6 py-3 rounded-full transition duration-300 shadow-md cursor-pointer">
                        BELI
                    </span>
                </div>
            </a>
        @endforeach
    </div>
@endsection
