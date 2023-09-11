<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', env('APP_NAME'))</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>

    <nav class="border rounded
     p-3 m-3">

        <a class="btn btn-primary" href="{{ route('page.index') }}">Home</a>
        <a class="btn btn-primary" href="{{ route('page.about') }}">About</a>
        <a class="btn btn-primary" href="{{ route('page.contact') }}">Contact</a>

    </nav>

    <hr>

    <section class=" p-3">
        @yield('content')
    </section>

    {{-- @include('footer') --}}

    @stack('script')

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
