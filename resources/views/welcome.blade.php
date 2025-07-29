@extends('layouts.main')

@section('tittle', 'Welcome to Baherindo Motor')

@section('content')
    <div class="text-center my-12 pt-24">
        <h1 class="text-4xl font-bold">Welcome to Baherindo Motor</h1>
        <p class="text-lg mt-4">Jual beli motor second termurah di Bekasi</p>
    </div>

    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($motor as $m)
            <div class="bg-gray-900 border border-gray-700 rounded-lg overflow-hidden shadow-lg text-white">
               <img src="{{ asset('asset/harga-motor-sport-honda2.jpg') }}" alt="Motor" class="w-full h-48 object-cover">

                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">{{ $m['name'] }}</h2>
                    <p class="mb-1"><strong>Harga:</strong> {{ $m['price'] }}</p>
                    <p class="mb-1"><strong>Tahun:</strong> {{ $m['tanggal'] }}</p>
                    <p class="pb-3"><strong>KM:</strong> {{ $m['kilometer'] }}</p>
                     <a href="/contact" class="inline-block bg-yellow-400 hover:bg-yellow-300 text-black font-semibold px-6 py-3 rounded-full transition duration-300 shadow-md">
            BELI
        </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
