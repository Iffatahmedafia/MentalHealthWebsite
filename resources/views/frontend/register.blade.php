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
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/styleReg.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="top-bar">
        <div class="container">
            <div class="col-12 text-right"></div>
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
                    <li class="nav-item"><a href="{{ route('index') }}" class="nav-link active">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="services.html" class="nav-link">Our Services</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Articles</a></li>
                    <li class="nav-item"><a href="" class="nav-link mr-5">Contact Us</a></li>
                </ul>
            </div>
    
    
        </div>
    </nav>


   <div class="main">
       <div class="register">
           <h2>Register Here</h2>
           <form id="register" method="post" action="{{ route('save') }}">

           @if(Session::get('success'))
           <div class="alert alert-success">
             {{ Session::get('success') }}
           </div>
           @endif

           @if(Session::get('fail'))
           <div class="alert alert-danger">
             {{ Session::get('fail') }}
           </div>
           @endif

           @csrf
           
           <label>First Name: </label>
           <br>
           <input type="text" name="firstname" id="name" placeholder="Enter Your First Name" value="{{ old('firstname') }}">
           <span class="text-danger">@error('firstname'){{ $message }} @enderror</span>
           
           <br>
           <label>Last Name: </label>
           <br>
           <input type="text" name="lastname" id="name" placeholder="Enter Your Last Name" value="{{ old('lastname') }}">
           <span class="text-danger">@error('lastname'){{ $message }} @enderror</span>
           <br>
           <label>Email: </label>
           <br>
           <input type="email" name="email" id="name" placeholder="Enter Your Valid Email" value="{{ old('email') }}">
           <span class="text-danger">@error('email'){{ $message }} @enderror</span>
           <br>
           <label>Username: </label>
           <br>
           <input type="text" name="username" id="name" placeholder="Enter Your Username" value="{{ old('username') }}">
           <span class="text-danger">@error('username'){{ $message }} @enderror</span>
         
           <br>
           <label>Password: </label>
           <br>
           <input type="password" name="password" id="pass" placeholder="Enter Your Password">
           <span class="text-danger">@error('password'){{ $message }} @enderror</span>
           <br>
           <label>Confirm Password: </label>
           <br>
           <input type="password" name="cpassword" id="pass" placeholder="Confirm Your Password">
          
           <br><br>
           <input type="submit" value="Submit" name="submit" id="submit">
           <br>
           <p class="message">Already Registered? <a href="{{ route('login') }}">Login</a></p>
           </form>
       </div>
   </div> 

</body>
</html>