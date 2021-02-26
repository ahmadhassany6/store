<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/star.css') }}" rel="stylesheet">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor2/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--

    TemplateMo 546 Sixteen Clothing

    https://templatemo.com/tm-546-sixteen-clothing

    -->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets2/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/templatemo-sixteen.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets2/css/owl.css') }}">
    <style>
        img:hover{
            opacity: 0.8;
            transform: scale(0.9);
        }
    </style>
</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->
@php
    $url = url()->current();
    $home = "active";
    $products = "";
    $about = "";
    $contact = "";
    $product = "";

    if(str_contains($url,'home')){
        $home = 'active';
    }
    if(str_contains($url,'products')){
        $products = 'active';
        $home = "";
    }
    if(str_contains($url,'about')){
        $about = 'active';
        $home = "";
    }
    if(str_contains($url,'contact')){
        $contact = 'active';
        $home = "";
    }
    if(str_contains($url,'product')){
        $home = "";
    }
@endphp
<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><h2>Ahmad <em>Store</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ $home }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $products }}" href="{{ route('products') }}">Our Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $about }}" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $contact }}" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Page Content -->
<!-- Banner Starts Here -->
@yield('banner')
<!-- Banner Ends Here -->

<div class="latest-products">
    <div class="container">
        @yield('content')
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.

                        - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor2/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor2/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


<!-- Additional Scripts -->
<script src="{{ asset('assets2/js/custom.js') }}"></script>
<script src="{{ asset('assets2/js/owl.js') }}"></script>
<script src="{{ asset('assets2/js/slick.js') }}"></script>
<script src="{{ asset('assets2/js/isotope.js') }}"></script>
<script src="{{ asset('assets2/js/accordions.js') }}"></script>


<script language = "text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
        }
    }
</script>


</body>

</html>
