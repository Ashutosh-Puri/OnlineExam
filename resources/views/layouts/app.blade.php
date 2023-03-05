<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
    
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}"> --}}
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="body d-flex flex-column min-vh-100" oncontextmenu="return false" >

    @include('layouts.navbar')

            <div class="p-0 m-0  ">

                @yield('content')

            </div>

    @include('layouts.footer')


    {{-- <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script> --}}
  
    <script src="{{ url('js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ url('js/multiselect-dropdown.js') }}"></script>
    @yield('scripts')
    @livewireScripts
</body>
</html>
