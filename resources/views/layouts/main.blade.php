<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('meta_title') | EWC Codes</title>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @if(app()->environment('production'))
        <script src="https://rabbit.slashequip.com/script.js" data-site="CVHGQSAW" defer></script>
    @endif
</head>
<body class="antialiased font-sans bg-gray-50 selection:bg-green-500 selection:text-black min-h-screen">
    <div class="min-h-screen flex flex-col">
        <div class="flex-initial">
            @include('partials.header')
        </div>
        <div class="flex-grow">
            @yield('content')
        </div>
        <div class="flex-initial">
            @include('partials.footer')
        </div>
    </div>
</body>
</html>
