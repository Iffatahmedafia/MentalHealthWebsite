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
           <form id="register" method="post" action="{{ route('add') }}">

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
           
           <label>Title: </label>
           <br>
           <input type="text" name="title" id="name" placeholder="Enter Your Title" value="{{ old('title') }}">
           <span class="text-danger">@error('title'){{ $message }} @enderror</span>
           
           <br>
           <label>Speaker: </label>
           <br>
           <input type="text" name="name" id="name" placeholder="Enter Speaker Name " value="{{ old('name') }}">
           <span class="text-danger">@error('name'){{ $message }} @enderror</span>
           <br>
           <label>Description: </label>
           <br>
           <textarea rows="5" cols="40" name="des" id="name" placeholder="Enter Event Description" value="{{ old('des') }}"></textarea>
           <span class="text-danger">@error('des'){{ $message }} @enderror</span>
           <br>
           <label>Date: </label>
           <br>
           <input type="date" name="date" id="name" placeholder="" value="{{ old('date') }}">
           <span class="text-danger">@error('date'){{ $message }} @enderror</span>
           <br>
           <label>Time: </label>
           <br>
           <input type="time" name="time" id="name" placeholder="" value="{{ old('time') }}">
           <span class="text-danger">@error('time'){{ $message }} @enderror</span>
          
           <br><br>
           <input type="submit" value="Submit" name="submit" id="submit">
           <br>
           
           </form>
       </div>
   </div> 

</body>
</html>