<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">

        <!-- icon -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <style>
            /* Set Poppins as the default font for the whole document */
            body {
                font-family: 'Poppins', sans-serif;
            }
        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            <!-- Admin Layout (Vertical Navbar with Sidebar) -->
            @auth
                <!-- Admin Layout (Vertical Sidebar) -->
                <div class="flex min-h-screen">
                    <!-- Sidebar -->
                    <aside class="w-64 bg-white border-r border-gray-100">
                        @include('layouts.navigation') <!-- Include the vertical navbar for authenticated users -->
                    </aside>

                    <!-- Main Content Area -->
                    <div class="flex-1">
                        <!-- Page Heading -->
                        @if (isset($header))
                            <header class="bg-white shadow">
                                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                    {{ $header }}
                                </div>
                            </header>
                        @endif

                        <!-- Page Content -->
                        <main class="p-6 bg-gray-100">
                            {{ $slot }}
                        </main>
                    </div>
                </div>
            @else
                <!-- User Layout (Horizontal Navbar before login) -->
                <div class="min-h-screen">
                    @include('layouts.navigation') <!-- Horizontal Navbar for users or guests -->

                    <!-- Page Heading -->
                    @if (isset($header))
                        <header class="bg-white shadow">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endif

                    <!-- Page Content -->
                    <main>
                        <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> -->
                            {{ $slot }}
                        <!-- </div> -->
                        <footer class="bg-[#18181B] py-[64px] text-[#9CA3AF] py-10">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 container grid grid-cols-1 md:grid-cols-3 gap-8 justify-center items-center">
                                <!-- ini footer -->
                                <div>
                                <img src="{{ asset(path: 'img/logo-white.png')}}" alt="">
                                <p class="text-[13px] mt-4">
                                Klinik Kecantikan Carelink di Jakarta Selatan menawarkan layanan kecantikan dengan tim profesional medis dan non-medis. 
                                Kami berkomitmen memberikan perawatan yang aman, efektif, dan mengutamakan kenyamanan serta kepuasan pelanggan.
                                </p>
                                </div>

                                <div class="flex flex-col justify-center items-center">
                                <h3 class="text-[16px] font-semibold mb-4 mr-12 text-[#FFFFFF]">Menu</h3>
                                <ul class="space-y-2 text-[13px]">
                                    <li><a href="#" class="hover:underline">Beranda</a></li>
                                    <li><a href="#" class="hover:underline">Tentang Kami</a></li>
                                    <li><a href="#" class="hover:underline">Treatment</a></li>
                                    <li><a href="#" class="hover:underline">Blog</a></li>
                                </ul>
                                </div>

                                <div class="">
                                <h3 class="text-[16px] font-semibold mb-4 text-[#FFFFFF]">Informasi</h3>
                                <ul class="space-y-2 text-[13px]">
                                    <li class="flex items-center">
                                    <span class="material-icons text-[#9CA3AF] text-[20px] mr-2">place</span>
                                    <p>Jl. Raya Padepokan Kosong Satu No. 10, Kelurahan Citayem, Kecamatan Pasar Rebo, Bogor, Jawa Barat.</p>
                                    </li>
                                    <li class="flex items-center">
                                    <span class="material-icons text-[#9CA3AF] text-[20px] mr-2">phone</span>
                                    <p>0711-3546789</p>
                                    </li>
                                    <li class="flex items-center">
                                    <span class="material-icons text-[#9CA3AF] text-[20px] mr-2">email</span>
                                    <p>carelinkofc@gmail.com</p>
                                    </li>
                                </ul>
                                </div>

                            </div>
                        </footer>
                    </main>
                </div>
            @endauth
        </div>
    </body>
</html>
