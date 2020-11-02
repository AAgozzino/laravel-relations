<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    {{-- Header --}}
    @include('layouts.header')
    
    {{-- Main --}}
    <main>
        @yield('main')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')
</body>
</html>