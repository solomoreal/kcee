
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
        <!-- <img src="images/banner-bg.jpg" alt="banner" /> -->
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
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </div>
        <div class="privacy">
          <div class="container">
            <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">User Profile</h3>
            <form name="chngpwd" method="post">

                  <p style="width: 350px;">

                    <b>Name</b>  <input type="text" name="name" value="" class="form-control" id="name" required="">
                  </p>

                  <p style="width: 350px;">
                    <b>Mobile Number</b>
                    <input type="text" class="form-control" name="mobileno" maxlength="10" value="" id="mobileno"  required="">
                  </p>

                  <p style="width: 350px;">
                    <b>Email Id</b>
                    <input type="email" class="form-control" name="email" value="" id="email" >
                  </p>
                  <p style="width: 350px;">
                    <b>Last Updation Date : </b>

                  </p>

                  <p style="width: 350px;">
                    <b>Reg Date :</b>

                  </p>

              <p style="width: 350px;">
                <button type="submit" name="submit6" class="btn-primary btn">Update</button>
              </p>
            </form>
          </div>
          <div class="container">
            <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Recommended Destinations</h3>
            <form name="chngpwd" method="post">

              {{-- include('collaborative_filtering.php'); --}}



            </form>
          </div>
        </div>
      </div>
    </section>

    <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>
    <script src="js/modernizr-latest.js"></script>
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="js/jquery.nav.js" type="text/javascript"></script>
    <script src="js/jquery.cslider.js" type="text/javascript"></script>
    <script src="contact/contact_me.js"></script>
    <script src="js/custom.js" type="text/javascript"></script>
    <script src="js/owl-carousel/owl.carousel.js"></script>
  </body>
  </html>


