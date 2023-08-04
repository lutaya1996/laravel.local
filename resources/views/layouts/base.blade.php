<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>{{$title}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">

    @include('includes.styles')

    @stack('css')

</head>
<body>

@include('includes.header')

@yield('content')

@include('includes.footer')


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JavaScript Libraries -->

@include('includes.scripts')

@stack('js')

</body>

</html>
