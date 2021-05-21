<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


        @livewireStyles

        <!-- Scripts -->
        {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
        <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

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

        @stack('modals')

        @livewireScripts
    </body>
    <footer class="h-40 bg-black text-white flex flex-col">
        <div class="flex flex-row justify-center align-center h-4/5 p-5">
            <p class="bold self-center m-5">
                {{__('Contact us using our company phone number')}}:
                <br>
                <b class="">+(453)-432 134 42</b>
            </p>
            <p class="bold self-center m-5">
                {{__('Also you can find us at the address listed bellow')}}:
                <br>
                <b class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod possimus consequuntur ratione fugiat recusandae! Non?</b>
            </p>
            <p class="bold self-center m-5">
                {{__('Our services are fast and secure')}}
                <br>
                {{__('if by chance you find the site down, it will be back in a few minutes!')}}
            </p>
        </div>
        <div class="bold self-center justify-center h-1/5">
            <p class="">&copy; 2021 CarDash</p>
        </div>
    </footer>
</html>
