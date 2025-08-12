@extends('layouts.main')

@section('tittle', 'Welcome to Baherindo Motor')

@section('content')
    <div class="text-center my-12 pt-24">
        <h1 class="text-4xl font-bold">Welcome to Baherindo Motor</h1>
        <p class="text-lg mt-4">Jual beli motor second termurah di Bekasi</p>
    </div>

 <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @foreach ($motor as $m)
        <div class="bg-gray-900 border border-gray-700 rounded-lg overflow-hidden shadow-lg text-white transform hover:-translate-y-1 hover:scale-105 transition duration-300">
            <a href="{{ route('motor.show', $m->id) }}">
                <img class="w-full h-56 object-cover" src="{{ asset('storage/' . $m['gambar_motor']) }}" alt="{{ $m['nama_motor'] }}">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-3 flex items-center gap-2">
                        <i class="bi bi-bicycle text-yellow-400"></i> {{ $m['nama_motor'] }}
                    </h2>
                  <p class="mb-2 flex items-center gap-2">
    <i class="bi bi-cash-stack text-green-400"></i>
    <strong>Harga:</strong> {{ number_format($m['harga_motor'], 0, ',', '.') }}
</p>
<p class="mb-2 flex items-center gap-2">
    <i class="bi bi-calendar text-blue-400"></i>
    <strong>Tahun:</strong> {{ $m['tahun_motor'] }}
</p>
<p class="mb-4 flex items-center gap-2">
    <i class="bi bi-speedometer2 text-red-400"></i>
    <strong>KM:</strong> {{ number_format($m['km_motor'], 0, ',', '.') }}
</p>

                    
                    {{-- Tombol WhatsApp --}}
                    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20{{ urlencode($m['nama_motor']) }}" 
                       target="_blank"
                       class="inline-flex items-center justify-center gap-2 w-full bg-green-500 hover:bg-green-400 text-white font-semibold px-6 py-3 rounded-full transition duration-300 shadow-md">
                        <i class="bi bi-whatsapp"></i> Order via WhatsApp
                    </a>
                </div>
            </a>
        </div>
    @endforeach
</div>

@endsection
