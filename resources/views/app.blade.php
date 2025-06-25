<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <style>
        html,
        body {
            touch-action: manipulation;
            overflow-x: hidden;
        }

        @font-face {
            font-family: 'Poppins';
            src: url('{{ asset('font/Poppins-Regular.ttf') }}') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
    </style>
    @vite('resources/css/app.css')
    @livewireStyles
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    {{--  --}}

    <title>{{ (isset($title) ? $title . ' | ' : '') . config('app.name') }}</title>
    <meta name="description" content="{{ (isset($desc) ? $desc . ' | ' : '') . config('app.name') }}" />

    <meta property="og:title" content="{{ (isset($title) ? $title . ' | ' : '') . config('app.name') }}" />
    <meta property="og:description" content="{{ (isset($desc) ? $desc . ' | ' : '') . config('app.name') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->full() }}" />
    <meta property="og:image" content="{{ $thumbnail ?? asset('img/travel.jpg') }}" />

    <link rel="apple-touch-icon" href="{{ asset('img/travel.jpg') }}" />
    <link rel="icon" size="16x16" href="{{ asset('img/travel.jpg') }}" />
    <link rel="icon" size="32x32" href="{{ asset('img/travel.jpg') }}" />
    <link rel="icon" size="180x180" href="{{ asset('img/travel.jpg') }}" />
    <link rel="shortcut icon" href="{{ asset('img/travel.jpg') }}" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <link rel="canonical" href="{{ url()->full() }}" />


</head>

<body class="font-poppins bg-slate-100 text-slate-600 overflow-x-visible">
    <x-layouts.header />

    @yield('content')

    <x-alert />
    <x-layouts.footer />


    @vite('resources/js/app.js')
    @livewireScripts

</body>


</html>
