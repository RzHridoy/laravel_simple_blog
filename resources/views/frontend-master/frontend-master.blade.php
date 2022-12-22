<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}frontend-assets/css/bootstrap.min.css" />
</head>
<body>
    
    {{-- HEADER --}}
    @include('frontend-master.frontend-files.header')

<div class="container-fluid">
    
    {{-- BODY --}}
    @yield('content')

</div>

    {{-- FOOTER --}}
    @include('frontend-master.frontend-files.footer')

    <script src="{{asset('/')}}frontend-assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>