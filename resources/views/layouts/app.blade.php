<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @hasSection('title')
            @yield('title') - {{ config('app.name') }}
        @else
            {{ config('app.name') }}
        @endif
    </title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    @include('layouts.default.header')

    <main id="main">
        @yield('content')
    </main>

    @include('layouts.default.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
