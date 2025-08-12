@extends('layouts.main')

@section('tittle', 'Contact Us | Baherindo Motor')

@section('content')
<div class="bg-gray-100 py-20 px-6">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold text-center text-gray-800 mb-12">
            Hubungi Kami
        </h1>

        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="space-y-8">
                <p class="text-lg text-gray-600 leading-relaxed">
                    Punya pertanyaan tentang motor, harga, atau ingin menjual motor Anda?  
                    Hubungi kami melalui informasi berikut:
                </p>

                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <i class="bi bi-telephone-fill text-yellow-500 text-3xl"></i>
                        <span class="text-lg font-medium">0813-3456-213</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <i class="bi bi-envelope-fill text-yellow-500 text-3xl"></i>
                        <span class="text-lg font-medium">cs@baherindomotor.com</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <i class="bi bi-geo-alt-fill text-yellow-500 text-3xl"></i>
                        <span class="text-lg font-medium">Jl. Raya Bekasi No. 123, Bekasi Timur</span>
                    </div>
                </div>

                <!-- Tombol WhatsApp langsung -->
                <a href="https://wa.me/628133456213" target="_blank"
                    class="inline-flex items-center gap-2 bg-green-500 hover:bg-green-400 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition duration-300">
                    <i class="bi bi-whatsapp text-2xl"></i> Chat via WhatsApp
                </a>
            </div>

            <!-- Contact Form -->
            <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-200">
                <h2 class="text-2xl font-semibold mb-6 text-gray-800">Kirim Pesan</h2>
                <form action="#" method="POST" class="space-y-5">
                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">Nama</label>
                        <input type="text" name="name" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none transition">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">Email</label>
                        <input type="email" name="email" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none transition">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">Pesan</label>
                        <textarea name="message" rows="4" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none transition"></textarea>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full bg-yellow-400 hover:bg-yellow-300 text-black font-semibold px-6 py-3 rounded-lg shadow-md transition duration-300">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
