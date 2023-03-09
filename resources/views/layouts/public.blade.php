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

    <script src="https://kit.fontawesome.com/151512c8c9.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/css/simple-notify.min.css') }}">

</head>

<body>
    @include('layouts.public.header')

    <main id="main">
        @yield('content')
    </main>

    @include('layouts.public.footer')

    <script src="{{ asset('lib/js/simple-notify.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>

</html>
