<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Ecommerce shop selling woodworking decor">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:image:alt" content="">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>{{ config('app.name', 'ExecutiveForest') }}</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
</head>

<body class="antialiased bg-primaryWhite">
    <main>
        {{ $slot }}
    </main>
    @livewireScripts
</body>
</html>
