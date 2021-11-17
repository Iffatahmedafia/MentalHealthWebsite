<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>mindtalks</title>
	<link href="{{ asset('frontend') }}/img/favicon.ico" rel="shortcut icon"/>
	<!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/styleAdmin.css">
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
			<i class="fa fa-user-circle-o" id="reglog">{{ session('LoggedUser')->username }}</i></a>
		
			
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
                <a href="{{ route('logout') }}"><button type="button" class="btn btn-primary ml-5 mt-2">Logout</button></a>
				
			</ul>
			
		</div>


	</div>
</nav>
				

<div class="sidebar">

    <div class="sidebar-brand">
        <h2><span class="lab la-accusoft"></span>Admin Panel</h2>

    </div>
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href=""><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
            </li>
            <li>
                <a href=""><span class="las la-igloo"></span>
                    <span>Account</span></a>
            </li>
            <li>
                <a href="{{ route('users') }}"><span class="las la-users"></span>
                    <span>Users</span></a>
            </li>
            <li>
                <a href="{{ route('therapists') }}"><span class="las la-igloo"></span>
                    <span>Therapists</span></a>
            </li>
            <li>
                <a href="{{ route('app') }}"><span class="las la-igloo"></span>
                    <span>Appointments</span></a>
            </li>
            <li>
                <a href=""><span class="las la-igloo"></span>
                    <span>Blogs</span></a>
            </li>
            <li>
                <a href=""><span class="las la-igloo"></span>
                    <span>Events</span></a>
            </li>
        </ul>
    </div>
</div>
	<div class="main-content">
       

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                    <h1> {{ $userCount }} </h1>
                   <span>Users</span> 
                   
                    </div>
                </div>
                <div class="card-single">
                    <div>
                    <h1>{{ $appCount }}</h1>
                    <span>Appointments </span>
                </div>
                </div>
                <div class="card-single">
                    <div>
                    <h1>{{ $therapistCount }}</h1>
                    <span>Therapists</span>
                </div>
                </div>
                   
                </div>
            </div>
        </main>


    </div>

    </body>
    </html>

