 <header class="header">
 	@auth
 		<div class="top-header">
 			<div class="container">
 				<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
 					<li class="hm"><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
 					<li class="prnt"><a href="{{route('dashboard')}}">My Profile</a></li>
 					<li class="prnt"><a href="{{route('change-password')}}">Change Password</a></li>
 					<li class="prnt"><a href="{{route('booking-history')}}">My Tour History</a></li>
 				</ul>
 				<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
 					<li class="tol">Welcome :</li>
 					<li class="sig">{{auth()->user()->name}}</li>
 					<li class="sigi"><a href="{{route('logout')}}" >/ Logout</a></li>
 				</ul>
 				<div class="clearfix"></div>
 			</div>
 		</div>
 	@endauth
    @guest
 		<div class="top-header">
 			<div class="container">

 				<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
 					<li class="hm"><a href="{{route('admin.login')}}">@auth('admin') Dashboard @else Admin Login @endauth</a></li>
 				</ul>
 				<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
 					<li class="tol">Toll Number : 123-4568790</li>
 					<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li>
 					<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >&nbsp; Sign In</a></li>
 				</ul>
 				<div class="clearfix"></div>
 			</div>
 		</div>
 	@endguest
 	<div class="container">
 		<nav class="navbar navbar-inverse" role="navigation">
 			<div class="navbar-header adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
 				<a href="#" class="navbar-brand scroll-top logo"><b>KCEE Travels</b></a>
 				<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
 					<span class="sr-only">Toggle navigation</span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 				</button>

 			</div>
 			<!--/.navbar-header-->
 			<div id="main-nav" class="collapse navbar-collapse adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
 				<ul class="nav navbar-nav" id="mainNav">
 					<li ><a href="{{route('home')}}#home" class="scroll-link">Home</a></li>
 					<li><a href="{{route('home')}}#aboutUs" class="scroll-link">About Us</a></li>
 					<li><a href="{{route('home')}}#packages" class="scroll-link">Packages</a></li>
                     <li><a href="{{route('flights')}}" class="hm">Flight Booking</a></li>
                     <li><a href="{{route('hotels')}}" class="scroll-link">Room Booking</a></li>
 					<li><a href="{{route('home')}}#portfolio" class="scroll-link">Gallery</a></li>
 					<li><a href="{{route('home')}}#contactUs" class="scroll-link">Contact Us</a></li>

 				</ul>
 			</div>
 			<!--/.navbar-collapse-->
 		</nav>
 		<!--/.navbar-->
 	</div>
 	<!--/.container-->
 </header>
