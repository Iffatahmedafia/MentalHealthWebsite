<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> mind </title>
	<link href="img/favicon.ico" rel="shortcut icon"/>
	<!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.css"/>
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.css"/>
	<script src="{{ asset('frontend') }}/js/jquery-3.5.1.min.js"></script>
	<script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>
<div class="top-bar">
	<div class="container">
		<div class="col-12 text-right">
		<div class="user-panel">
			<i class="fa fa-user-circle-o" id="reglog"></i>{{ session('LoggedUser')->username }}</a>
		
		</div>
		</div>
	</div> 
</div>



<nav class="navbar bg-light navbar-light navbar-expand-lg">
	<div class="container">

		<button class="navbar-toggler" type="button" data-toggle="collapse"
		 data-target="#navbarResponsive">
			<span class="navbar-toggler-icon">

			</span>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="{{ route('index') }}" class="nav-link active ">Home</a></li>
                <div class="dropdown">
                <li class="nav-item dropbtn">
                <a href="services.html" class="nav-link">Resources<i class="fa fa-caret-down"></i></a></li>
				<div class="dropdown-content">
				<a href="#">Blogs</a>
                <a href="#">Events</a>
                </div>
                </div>
				<li class="nav-item"><a href="" class="nav-link ">Take Assessment</a></li>
				<li class="nav-item"><a href="{{ route('therapist',[$userid]) }}" class="nav-link">Take Appointment</a></li>
                <div class="account ml-5">
                <li class="nav-item"><a href="{{ route('account') }}" class="nav-link mr-2  pr-2">My Account</a></li>
				
				<a href="{{ route('logout') }}"><button type="button" class="btn btn-primary">Logout</button></a>
</div>
			</ul>
            
				
			
			
		</div>


	</div>
</nav>


	

<div class="image">
	<img  id ="image" class="img-fluid" src="{{ asset('frontend') }}/img/Happy2.jpg" alt="Happy 2">

	<div class="image-caption">
		<div class="container">
			<div class="row justify-content-start text-left">
				<div class="col-10 bg-custom pr-4 pb-5 pt-4">
					<h4 class="caption pb-2">Confused about which therapist is right for you?We are here to help you!</h4>
					<a href="register.html" class="btn btn-danger btn-lg" id="btn-reg">Find me a Therapist</a>
				</div>
			</div>
		</div>
		
	</div>
	<!--<div class="image-caption">
		<div class="container">
		  <div class="row justify-content-Center">
			  <div class="col-10 bg-custom py-3 px-0">
				  <h1>Bootstrap</h1>
				  <div class="border-top border-primary w-100 mx-auto my-3">
					  <h3 class="pb-3">Complete Website Design</h3>-->
					 
					  
				  <!--</div>
			  </div>
		  </div> 

		</div>
</div>-->

<!--<div id="carousel" class="carousel slide" data-ride="carousel">

	<div class="carousel-inner">

		<div class="carousel-item active">
		  <img src="img/Happy1.jpg" alt="" class="w-100">
		  <div class="carousel-caption">
			  <div class="container">
				<div class="row justify-content-center">
					<div class="col-9 bg-custom py-3 px-0">
						<h1>Bootstrap</h1>
						<div class="border-top border-primary w-100 mx-auto my-3">
							<h3 class="pb-3">Complete Website Design</h3>
							<a href="" class="btn btn-danger btn-lg mr-1">View Demo</a>
							<a href="" class="btn btn-primary btn-lg ml-1">Start Now</a>
						</div>
					</div>
				</div> 

			  </div>
		  </div>

		</div>
		<div class="carousel-item">
		  <img src="img/carousel/1.jpg" alt="" class="w-100">
		</div>
		<div class="carousel-item">
		  <img src="img/carousel/3.jpg" alt="" class="w-100">
		</div>

	  </div>
	

	<a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>

	<a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>-->


</div>

<div class="col-12 text-center mt-5">
	<h1 class="text-dark pt-4">Events</h1>
</div>
<br>
<div class="container">
	<div class="row my-5">

    @php
	$items = App\Models\Like::where('uid','=',$userid)->pluck('eid');
	
	@endphp
  
	@foreach ($events as $event)
	
	
	     
		<div class="col-md-4 my-4">
	 
			<img src="{{ asset('frontend') }}/img/1.jpg" alt="" class="w-100">
			<h4 class="my-4">"{{ $event->title }}"</h4>
			<div class="eventl1">
			<p>{{ $event->date }}, {{ $event->time }}
			<span class="float-right"><a href="">Add to calendar</a></span>
			</p>
           </div>
		   <div class="eventl2">
		   
		   @if($items->contains($event->id))
		  	 <a href=""><i class="fa fa-star float-right"style="font-size:30px;color:blue;"></i></a>
			 
			@else
			<a href="{{ route('likes',[$userid,$event->id]) }}"><i class="fa fa-star float-right"style="font-size:30px;"></i></a>
			@endif
		
		
			
		
			<a href="" class="btn btn-outline-dark btn-md float-left">See More</a>
           </div>	
		</div>
	  
		@endforeach
	
	
		<!--<div class="col-md-4 my-4">
			<img src="{{ asset('frontend') }}/img/2.jpg" alt="" class="w-100">
			<h4 class="my-4">"Healing Your Mind"</h4>
			<p>20 June, 3:00 PM-4:00 PM</p>
			<a href="" class="btn btn-outline-dark btn-md">See More</a>
				
		</div>-->
		
	</div>
</div>

<div class="fixed-background">

	<div class="fixed-wrap">
		<div class="fixed"></div>
	</div>
</div>

<div class="container my-5">
	<div class="row py-4">
		<div class="col-lg-4 mb-4 my-lg-auto">
			<h1 class="text-dark font-weight-bold mb-3">We've been expecting you</h1>
			<p class="mb-4">Take self-assessment quiz to understand your state of mind better</p>
			<a href="" class="btn btn-outline-dark btn-lg">Take Quiz</a>
		</div>
		<div class="col-lg-8"><img src="{{ asset('frontend') }}/img/Happy6.jpg" alt="" class="w-100"></div>
	</div>
</div>


	<!-- Footer section -->
	
<footer>
	<div class="container bg-dark">
		<div class="row">
			<div class="col-lg-4 col-md-6 footer-widget">
				
				<p>We provide you with the best services which is best for your family and which suits your pocket.</p>
				<div class="social">
					
					<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
						<a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
						<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
						<a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
						
				</div>
			</div>
			<div class="col-lg-4 col-md-6 footer-widget">
				<div class="contact-widget">
					<h5 class="fw-title">CONTACT US</h5>
					<p><i class="fa fa-map-marker"></i>You can contact us here......  </p>
					<p><i class="fa fa-phone"></i>Number</p>
					<p><i class="fa fa-envelope"></i>info.housing-co@gmail.com</p>
					<p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
				</div>
			</div>
</footer>

</body>
</html>