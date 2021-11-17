<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> merryMind | Heal From Within </title>
	<link rel="Logo" href="{{ asset('frontend') }}/img/favicon.ico">
	<!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/styleTherapist.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.css"/>
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
				<li class="nav-item"><a href="" class="nav-link active ">Home</a></li>
				<li class="nav-item"><a href="about.html" class="nav-link ">About Us</a></li>
				<li class="nav-item"><a href="services.html" class="nav-link"> Services</a></li>
				<div class="dropdown">
                <li class="nav-item dropbtn">
				
				<a href="services.html" class="nav-link">Resources<i class="fa fa-caret-down"></i></a></li>
				<div class="dropdown-content">
				<a href="#">Link 1</a>
                <a href="#">Link 2</a>
                </div>
                </div>
                
		
				<li class="nav-item"><a href="" class="nav-link">Contact Us</a></li>
				<form class="nav-item ml-3" action="action_page.php">
                 <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
                </form>
			</ul>
			
		</div>


	</div>
</nav>

    <div class="header">
        <h2>Matched Therapists</h2>
</div>
     
   

<div class="container-fluid">
    <div class="row">
	@foreach ($results as $res)
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                        <img class="avatar" src="{{ asset('frontend') }}/img/girl_avatar.png" alt="Avatar">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{ $res->name }}</h4>
						<span class="title">Expert in</span>
						<span class="contact">{{ $res->field }}</span>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<span class="contact"><i class="fa fa-envelope" aria-hidden="true"></i>{{ $res->email }}</span>
                        <span class="contact" ><i class="fa fa-phone" aria-hidden="true"></i>{{ $res->phone }}</span>
                    </div>
                </div>
                <div class="card-footer text-center">
                
					<a href="" class="btn btn-primary btn-md mt-3">Take Appointment</a>	
					<a href="" class="btn btn-primary btn-md mt-3">Take Appointment</a>	
					
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
    
    

</body>
</html>


