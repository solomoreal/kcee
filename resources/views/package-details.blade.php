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
                <div class="container">

                    <div class="selectroom_top">
                        <div class="col-md-4 selectroom_left">
                            <img src="{{ asset('storage/' . $package->image) }}" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-8 selectroom_right">
                            <h2>{{$package->name}}</h2>
                            <p class="dow">#PKG-{{$package->id}}</p>
                            <p><b>Package Type :{{$package->type}}</p>
                            <p><b>Package Location :</b> {{$package->location}}</p>
                            <p><b>Features:</b> {{$package->features}}</p>
                            <div class="clearfix"></div>
                            <div class="grand">
                                <p>Grand Total</p>
                                <h3>NGN {{$package->price}}</h3>
                            </div>
                        </div>
                        <h3>Package Details</h3>
                        <p>{{$package->details}}</p>
                        <div class="clearfix"></div>
                    </div>
                    <form name="book" method="post">
                        <div class="selectroom_top">
                            <div class="selectroom-info">
                                <div class="ban-bottom">
                                    <div class="col-md-6">
                                        <label class="inputLabel">From</label>
                                        <input class="form-control" type="date" name="fromdate" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="inputLabel">To</label>
                                        <input class="form-control" type="date" name="todate" required="">
                                    </div>
                                </div>
                                <ul>
                                    <li class="spe">
                                        <label class="inputLabel">Comment</label>
                                        <textarea class="form-control" rows="4" name="comment" required=""></textarea>
                                    </li>
                                    @auth
                                    <li class="spe" align="center">
                                        <button type="submit" name="submit2" class="btn-primary btn">Book</button>
                                    </li>
                                    @else

                                    <li align="center" style="margin-top: 1%">
                                        <a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn">Book</a>
                                    </li>

                                    @endauth

                                    <div class="clearfix"></div>
                                </ul>
                            </div>
                        </div>
                    </form>
                    @auth
                        <form name="rate" method="post">
                            <div class="star-rating">
                                <input type="radio" name="rating" value="5" id="5"><label for="5">&#9733;</label>
                                <input type="radio" name="rating" value="4" id="4"><label for="4">&#9733;</label>
                                <input type="radio" name="rating" value="3" id="3"><label for="3">&#9733;</label>
                                <input type="radio" name="rating" value="2" id="2"><label for="2">&#9733;</label>
                                <input type="radio" name="rating" value="1" id="1"><label for="1">&#9733;</label>
                            </div>
                            <div align="center">
                                <button type="submit" name="submit_rating" class="btn-primary btn">Submit Rating</button>
                            </div>
                        </form>
                    @else
                    <div align="center" style="margin-top: 1%">
                        <a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn">Login to Rate</a>
                    </div>

                    @endauth

                </div>
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


