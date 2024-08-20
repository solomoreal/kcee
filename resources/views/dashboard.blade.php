
  <!doctype html>
  <html lang="en-gb" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>My Travel - my memories</title>
    <meta name="description" content="Traveller">
    <meta name="author" content="WebThemez">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- <link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
    <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/da-slider.css" />
    <!-- Owl Carousel Assets -->
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Font Awesome -->
    <!--animate-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="font/css/font-awesome.min.css" rel="stylesheet">
    <style>
      .errorWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #dd3d36;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
      }
      .succWrap{
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #5cb85c;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
      }
    </style>
  </head>

  <body>
    @include('includes.header')
    <!--/.header-->
    <div id="#top"></div>
    <section id="home">
      <div class="banner-container" style="height: 300px;">
        <img src="images/banner-bg.jpg" alt="banner" />
        <div class="container banner-content">
          <div id="da-slider" class="da-slider">
            <div>&nbsp;</div>
            <div class="">
              <h2>My Travel</h2>
              <p>Get your plans right away.. enjoy!!!</p>
              <div class="da-img"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Package-->
    <section id="packages" class="secPad">
      <div class="container">
        <div class="heading text-center">
          <!-- Heading -->
          <h2>User Profile</h2>
          <p>You Can Update Your Details Here</p>
        </div>
        <div class="privacy">
          <div class="container">
            <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">User Profile</h3>
            @livewire('profile')
          </div>
          
        </div>
      </div>
    </section>
    @include('includes.footer')



