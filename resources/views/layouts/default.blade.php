<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.header')
</head>

<body>
<div class="container">

    <div id="wrapper">
        @yield('content')
    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>
</div>

</body>

</html>
