@extends('layouts.main')

@section('tittle', 'Contact Us | Baherindo Motor')

@section('content')
<div class="max-w-5xl mx-auto px-6 py-16 pt-24 ">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">Hubungi Kami</h1>

    <div class="grid md:grid-cols-2 gap-10">
        <!-- Contact Info -->
        <div class="space-y-6">
            <p class="text-lg text-gray-600 leading-relaxed">
                Ingin bertanya seputar motor, harga, atau ingin menjual motor Anda?
                Jangan ragu untuk menghubungi kami melalui informasi berikut:
            </p>

            <div class="space-y-4 text-gray-700">
                <div class="flex items-center space-x-3">
                    <i class="bi bi-telephone-fill text-yellow-500 text-xl"></i>
                    <span>0813-3456-213</span>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="bi bi-envelope-fill text-yellow-500 text-xl"></i>
                    <span>cs@baherindomotor.com</span>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="bi bi-geo-alt-fill text-yellow-500 text-xl"></i>
                    <span>Jl. Raya Bekasi No. 123, Bekasi Timur</span>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-semibold mb-6 text-gray-800">Kirim Pesan</h2>
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label class="block text-gray-700 mb-1">Nama</label>
                    <input type="text" name="name" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none">
                </div>
                <div>
                    <label class="block text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none">
                </div>
                <div>
                    <label class="block text-gray-700 mb-1">Pesan</label>
                    <textarea name="message" rows="4" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none"></textarea>
                </div>
                <div>
                    <button type="submit"
                        class="bg-yellow-400 hover:bg-yellow-300 text-black font-semibold px-6 py-2 rounded-lg shadow-md transition duration-300">
                        Kirim
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
