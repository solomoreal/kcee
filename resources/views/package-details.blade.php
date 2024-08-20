<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Package details</title>
    <meta name="description" content="Traveller">
    <meta name="author" content="WebThemez">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/isotope.css')}}" media="screen" />
    <link rel="stylesheet" href="{{asset('js/fancybox/jquery.fancybox.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/da-slider.css')}}" />
    <link href="{{asset('js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}" />
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('font/css/font-awesome.min.css')}}" rel="stylesheet">
    <style>
        .star-rating input[type="radio"] {
            display: none;
        }
        .star-rating label {
            font-size: 2em;
            color: gray;
            cursor: pointer;
        }
        .star-rating input[type="radio"]:checked ~ label {
            color: gold;
        }
        .star-rating label:hover, .star-rating label:hover ~ label {
            color: gold;
        }
    </style>
</head>

<body>
 @include('includes.header')
 <!--/.header-->
 <div id="#top"></div>
    <section id="home">
        <div class="banner-container" style="height: 300px;">
            <!-- <img src="images/banner-bg.jpg" alt="banner" /> -->
            <div class="container banner-content">
            <video autoplay muted loop>
            <source src="{{asset('images/travel.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
            </div>
        </div>
    </section>

    <section id="packages" class="secPad">
        <div class="container">
            <div class="heading text-center">
                <h2>Package Details</h2>
                <p>Mention Your Requirements in comment Section</p>
            </div>
            <div class="selectroom">
                @livewire('package-booking', ['package' => $package])

            </div>
        </div>
    </section>
      @livewire('register')
      <!-- //signu -->
      <!-- signin -->
      @livewire('login')
      <!-- //signin -->

  <!--/.container-->
</section>
@include('includes.footer')


