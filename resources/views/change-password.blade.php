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
 <section id="packages" class="secPad">
    <div class="container">
      <div class="heading text-center">
        <!-- Heading -->
        <h2>Change Password</h2>
        <p></p>
      </div>
      <div class="privacy">
        <div class="container">
          <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Change Password</h3>
          @livewire('change-password')
        </div>
      </div>
    </div>
  </div>
  </section>
 @livewire('register')

 @livewire('login')
 <!-- //signin -->

<!--/.container-->
@include('includes.footer')