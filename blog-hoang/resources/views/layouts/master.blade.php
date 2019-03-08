<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
    @include('partials.nav')
<body>
<div class="content">
    
        <div class="container">
        @yield('content')
</div>

          
</body>
</html>
