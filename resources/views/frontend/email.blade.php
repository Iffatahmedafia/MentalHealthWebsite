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
           <h2>Forgot Password</h2>
           <form id="register" method="post" action="">
            


                                @csrf

                                @if (session('status'))
                                    <div class="alert alert-ssuccess">
                                        {{ session('status') }}
                                    </div>
                                @endif
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email">
                                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Send Password Link
									</button>
								</div>
								</form>
       </div>
   </div> 
							
</body>
</html>