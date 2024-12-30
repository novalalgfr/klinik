<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
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
                        {{ $slot }}
                    </main>
                </div>
            @endauth
        </div>
    </body>
</html>
