<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Style CSS -->
    <link rel="Logo" href="{{ asset('frontend') }}/img/favicon.ico">
	<!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/styleDboard.css">
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
				<li class="nav-item"><a href="" class="nav-link active ">Home</a></li>
				<li class="nav-item"><a href="about.html" class="nav-link ">About Us</a></li>
				<li class="nav-item"><a href="services.html" class="nav-link"> Services</a></li>
				<div class="dropdown">
                <li class="nav-item dropbtn">
				
				<a href="services.html" class="nav-link">Resources<i class="fa fa-caret-down"></i></a></li>
				<div class="dropdown-content">
				<a href="#">Blogs</a>
                <a href="#">Events</a>
                </div>
                </div>
                
		
				<li class="nav-item"><a href="" class="nav-link">Contact Us</a></li>
				
			</ul>
			
		</div>


	</div>
</nav>

    

    

    <div class="main-container">
        <div class="containers">
            <div class="row">
            
             
        
        <div class="col-left sidebar col-12 col-sm-3">
            <div class="block block-account last_block first">
            <div class="block-title">
                <strong><span>Account</span></strong>
            <span class="toggle"></span></div>
            <div class="block-content">
                <ul>
                    <li><a href="{{ route('account') }}">Dashboard</a></li>
                    <li><a href="profile/{{ session('LoggedUser')->id }}">Your Profile</a></li>
                    <li class="last"><a href="appointments/{{ session('LoggedUser')->username }}">Appointments</a></li>
                    <li class="last"><a href="#">Assessments</a></li>
                    <li class="last"><a href="#">Events</a></li>
                </ul>
            </div>
        
        </div>
    </div>
                    

    <div class="col-main col-12 col-sm-9">
       
            <div class="my-account">
             <div class="dashboard">
                <div class="page-title">
                  <h1>My Dashboard</h1>
                </div>
                   <div class="welcome-msg">
                  

                      <p class="hello"><strong>Hello, {{ session('LoggedUser')->username }}</strong></p>
                     
                
                      <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
                      <div class="appointments"><strong>Your Appointments</strong></div>

                </div>
           </div>
      </div>
    
    </div>



    
    </div>
  </div>
</div>


</body>
</html>