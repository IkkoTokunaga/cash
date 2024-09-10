<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body class="font-sans antialiased">
        <div class="min-vh-100 bg-light">
            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white">
                    <div class="container-xl py-4 px-3 px-sm-4 px-lg-5">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot ?? '' }}
            </main>
        </div>
        <!-- Livewire Scripts -->
        @livewireScripts
    </body>
</html>
