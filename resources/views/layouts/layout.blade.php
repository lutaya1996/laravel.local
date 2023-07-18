<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{$title}}</title>
    <meta content="" name="description">

    @include('components.styles')

</head>
<body>

@include('components.header')

@yield('content')

@include('components.footer')


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JavaScript Libraries -->

@include('components.styles')

</body>

</html>
