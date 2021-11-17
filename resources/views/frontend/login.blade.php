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
           <h2>Login Here</h2>
           <form id="register" method="post" action="{{ route('check') }}">
            
           @if(Session::get('fail'))
           <div class="alert alert-danger">
             {{ Session::get('fail') }}
           </div>
           @endif

           @csrf
            <label>Username: </label>
            <br>
            <input type="text" name="username" id="name" placeholder="Enter Your Username" value="{{ old('username') }}">
            <span class="text-danger">@error('username'){{ $message }} @enderror</span>
            <br>

            
           <label>Password: </label>
           <a id=forget href="{{ route('getEmail') }}" class="float-right">
			Forgot Password?
		   </a>
           <br>

           <input type="password" name="password" id="name" placeholder="Enter Your Password">
           <span class="text-danger">@error('password'){{ $message }} @enderror</span>
          
          
           <br><br>
           
           <label>OPTIONS:</label>
                <td>
        
            <select name="type">
                    
                            <option value="user" selected>USER</option>
                            <option value="admin" >ADMIN</option>
                         
            </select>
            <br><br>
        </td>
       
        
        
           <input type="submit" value="Login" name="submit" id="submit">
           <br>
           <p class="message">Don't have an account? <a href="{{ route('register') }}">Register</a></p>
           </form>
       </div>
   </div> 

</body>
</html>