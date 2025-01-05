<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rutvikdev</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('user/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('user/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('user/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('user/css/style.css')}}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
   
       @yield('content')
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('user/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('user/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('user/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('user/lib/typed/typed.min.js')}}"></script>
    <script src="{{ asset('user/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('user/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('user/lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="{{ asset('user/js/main.js')}}"></script>

    <!-- Contact Javascript File -->
    @yield('footer')
    <!-- Template Javascript -->
</body>

</html>