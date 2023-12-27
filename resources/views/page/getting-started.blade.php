@extends('app')

@section('content')
    <div class="bg-gray-100 min-h-screen flex items-center justify-center">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-6 text-indigo-600">Selamat Datang di Dokumentasi API Cybertech</h1>
            <p class="text-gray-700 text-lg mb-8">Temukan informasi lengkap mengenai API Cybertech di sini.</p>
            <div class="flex justify-center">
                <a href="#section1"
                    class="bg-blue-900 hover:bg-blue-950 text-white font-bold py-2 px-8 transition  mr-4">Mulai</a>
                <a href="#section2"
                    class="bg-gray-900 hover:bg-gray-950 text-white font-bold py-2 px-8 transition ">Tutorial</a>
            </div>
        </div>
    </div>

    <!-- Section 1 -->
    <div id="section1" class="bg-white py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Bagian 1: Pengenalan</h2>
            <p class="text-gray-700 text-lg mb-8">Pelajari dasar-dasar penggunaan API Cybertech di bagian ini.</p>

            <!-- Add your content here -->
        </div>
    </div>

    <!-- Section 2 -->
    <div id="section2" class="bg-gray-100 py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Bagian 2: Tutorial</h2>
            <p class="text-gray-700 text-lg mb-8">Ikuti tutorial langkah demi langkah untuk menggunakan fitur-fitur API
                Cybertech.</p>

            <!-- Add your content here -->
        </div>
    </div>
@endsection
