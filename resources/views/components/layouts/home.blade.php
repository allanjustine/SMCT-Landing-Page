<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMCT Group of Companies | {{ $title }}</title>
    @include('partials.head')
</head>

<body class="antialiased">
    @include('components.layouts.app.navbar')
    <main class="mt-10">
        {{ $slot }}
    </main>
    @fluxScripts
</body>
@include('components.layouts.app.footer')

</html>
