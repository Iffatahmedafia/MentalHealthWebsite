<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> merryMind | Heal From Within </title>
	<link href="img/favicon.ico" rel="shortcut icon"/>
	<!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/styleServices.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.css"/>
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
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
			<a href="{{ route('register') }}"><i class="fa fa-user-circle-o" id="reglog"></i> Register</a>
		
			<a href="{{ route('login') }}"><i class="fa fa-sign-in" id="reglog"></i>Login</a>
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
				<li class="nav-item"><a href="{{ route('about') }}" class="nav-link ">About Us</a></li>
				<li class="nav-item"><a href="{{ route('services') }}" class="nav-link"> Services</a></li>
				<div class="dropdown">
                <li class="nav-item dropbtn">
				
				<a href="services.html" class="nav-link">Resources<i class="fa fa-caret-down"></i></a></li>
				<div class="dropdown-content">
				<a href="#">Link 1</a>
                <a href="#">Link 2</a>
                </div>
                </div>
                
		
				<li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact Us</a></li>
				
			</ul>
			
		</div>


	</div>
</nav>

	
  </head>
  <body>
    <div class="services">
      <h1>Our Services</h1>
      <div class="cen">
        <div class="service">
          <i class="fas fa-anchor"></i>
          <h2>Online appointment</h2>
          <p>Take Online appointments of your preferred Therapist.</p>
        </div>

        <div class="service">
          <i class="fab fa-android"></i>
          <h2>Self-assessment Quiz</h2>
          <p>Assess your mental wellbeing and know if you require professional help or not.</p>
        </div>

        <div class="service">
          <i class="fab fa-angellist"></i>
          <h2>Blogs</h2>
          <p>Read our blogs written by specialists and save your favorites.</p>
        </div>

        <div class="service">
          <i class="fas fa-apple-alt"></i>
          <h2>Event Details</h2>
          <p>Get to know about the mental health events happening around you.</p>
        </div>

        <div class="service">
          <i class="fas fa-archway"></i>
          <h2>Chatbot Support</h2>
          <p>Access our chat instant chat feature for any support or enquiry.</p>
        </div>

        <div class="service">
          <i class="far fa-angry"></i>
          <h2>Service Name</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
    </div>

    <div class="services1">
      <h1>Types of Therapy</h1>
      <div class="cen">
        <div class="service1">
          <i class="fas fa-anchor"></i>
          <h2>Addiction Therapy</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="service1">
          <i class="fab fa-android"></i>
          <h2>Child Therapy</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="service1">
          <i class="fab fa-angellist"></i>
          <h2>Behavioral Therapy</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="service1">
          <i class="fas fa-apple-alt"></i>
          <h2>Marriage Therapy</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="service1">
          <i class="fas fa-archway"></i>
          <h2>Existential Therapy</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="service1">
          <i class="far fa-angry"></i>
          <h2>Service Name</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
    </div>
  </body>
</html>
