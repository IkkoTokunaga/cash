<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <meta name="description" content="簡単な操作、シンプルなデザイン。事業始めたてのフリーランス・個人事業主、また法人でもご使用いただけます。家計簿やおこづかい帳、収支管理にもご利用いただけます。">
    <meta name="keywords" content="収支, 収支管理, 出納帳, 会計, 会計帳簿, 帳簿, おこづかい帳, 家計簿">
    <meta name="author" content="cash canvas jp">

    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:image" content="{{ asset('storage/cash-canvas-image.png') }}">
    <meta property="og:description" content="簡単な操作、シンプルなデザイン。事業始めたてのフリーランス・個人事業主、また法人でもご使用いただけます。家計簿やおこづかい帳、収支管理にもご利用いただけます。">
    <meta property="og:site_name" content="{{ config('app.name') }}">

    <meta name="twitter:card" content="summary_large_image">
    {{-- <meta name="twitter:site" content="@サイトのTwitterアカウント"> --}}
    <meta name="twitter:title" content="{{ config('app.name') }}">
    <meta name="twitter:description" content="簡単な操作、シンプルなデザイン。事業始めたてのフリーランス・個人事業主、また法人でもご使用いただけます。家計簿やおこづかい帳、収支管理にもご利用いただけます。">
    <meta name="twitter:image" content="{{ asset('storage/cash-canvas-image.png') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
