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
                        <footer class="bg-[#18181B] py-[64px]">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <p class="text-[#9CA3AF]">Ini Footer</p>
                            </div>
                        </footer>
                    </main>
                </div>
            @endauth
        </div>
    </body>
</html>
