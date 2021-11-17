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
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/styleContact.css">
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


	
<div class= "container1">
    <h1>Connect With Us</h1>
    <p>We would love to respond to your queries and help you succeed.<br>
	Feel free to get in touch with us.</p>
	<div class= "contact-box">
	<div class="contact-left">
		<h3>Send your request</h3>
		<div class="input-row">
			<div class="input-group">
				<label>Name</label>
				<input type="text" name="Name" placeholder="Write your name">
			</div>
			<div class="input-group">
				<label>Email</label>
				<input type="text" name="Name" placeholder="Write your valid Email">
			</div>
			<div class="input-group">
				<label>Subject</label>
				<input type="text" name="Name" placeholder="Write your Subject">
			</div>
			
				
		</div>
		<label>Message</label>
		        <textarea rows="5" placeholder="Your Message"></textarea>
			    <button type="submit">SEND</button>
    
	</div>
	<div class= "contact-right">
		<h3>Reach Us</h3>
		<table>
			<tr>
				<td>Email</td>
				<td>mindtalks022@gmail.com</td>
            </tr>
			<tr>
				<td>Phone</td>
				<td>0165568787</td>
            </tr>
			<tr>
				<td>Address</td>
				<td>Mind Talks , Malaysia</td>
            </tr>
        </table>
     
	</div>
	</div>
	</div>
	</body>
	</html>
