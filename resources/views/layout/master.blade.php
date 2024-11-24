<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CookPedia</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist\css\bootstrap.min.css') }}">
</head>
<body>
    <script src="{{asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js')}}"></script>
    @include('components.navbar')
    {{-- <div class="content-wrapper" style="margin-left: 50px; margin-right: 50px"> --}}
        @yield('content')
    {{-- </div> --}}    
    @include('components.footer')
</body>
</html>