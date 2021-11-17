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
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/styleAdmin.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.css"/>
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.css"/>
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
                <a href="{{ route('logout') }}"><button type="button" class="btn btn-primary">Logout</button></a>
				
			</ul>
			
		</div>


	</div>
</nav>
				
		
<div class ="sidebar">
    <div class="sidebar-brand">
        <h2><span class="lab la-accusoft"></span>Account</h2>

    </div>
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="{{ route('dashboard') }}"><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
            </li>
            <li>
                <a href=""><span class="las la-igloo"></span>
                    <span>Account</span></a>
            </li>
            <li>
                <a href=""><span class="las la-users"></span>
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
                    <span>Seminars</span></a>
            </li>
        </ul>
    </div>
</div>

<div class="main-content1">
        

<table border = "2">
<tr>
<th> Id </th>
<th>Name</th>
<th>Username</th>
<th>Email</th>
<th>Therapist Name</th>
<th>Date</th>
<th>Status</th>
</tr>

@foreach ($app as $ap)
<tr>
<td>{{ $ap->id }}</td>
<td>{{ $ap->name }}</td>
<td>{{ $ap->username }}</td>
<td>{{ $ap->email }}</td>
<td>{{ $ap->Sname }}</td>
<td>{{ $ap->date }}</td>
<td>{{ $ap->status }}</td>
<td>
                    <a href="{{ route('approve', $ap->id) }}" class="btn btn-success">Approve</a>
                </td>
                <td>
                    <a href="{{ route('reject', $ap->id) }}" class="btn btn-danger">Decline</a>
</tr>
@endforeach
</table>
</div>
</body>
</html>
