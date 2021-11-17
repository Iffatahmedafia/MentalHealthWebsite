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
           <form id="register" method="post" action="{{ route('therapists') }}">

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

          
           
           <label>Name: </label>
           <br>
           <input type="text" name="name" id="name" placeholder="Enter Your First Name" value="">
           <br>

           <label>Gender: </label>
          
           <input type="radio" name="gender" id="" value="Male">Male
           <input type="radio" name="gender" id="" value="Female">Female
           <br>
          

           <label>Field: </label>
           <br>
          <!-- <input type="text" name="field" id="name" placeholder="Enter Your fields separated by comma" value="">-->
           <input type="checkbox" name="field[]" id="" value="Depression">Depression
           <input type="checkbox" name="field[]" id="" value="Anxiety">Anxiety
           <input type="checkbox" name="field[]" id="" value="Self esteem and Confidence">Self esteem and Confidence
           <input type="checkbox" name="field[]" id="" value="Sleeping disorder">Sleeping Disorder
           <input type="checkbox" name="field[]" id="" value="Eating Disorder">Eating Disorder
           <input type="checkbox" name="field[]" id="" value="Trauma">Trauma
           <input type="checkbox" name="field[]" id="" value="Relationship Issues">Relationship Issues
           <input type="checkbox" name="field[]" id="" value="Addiction">Addiction
           <input type="checkbox" name="field[]" id="" value="Social Wellbeing">Social Wellbeing
           <br>

           <label>Session Format: </label>
           <br>
          <!-- <input type="text" name="field" id="name" placeholder="Enter Your fields separated by comma" value="">-->
          <input type="radio" name="sformat" id="" value="Online">Online
          <input type="radio" name="sformat" id="" value="Face-to-Face">Face-to-Face
          <input type="radio" name="sformat" id="" value="Hybrid">Hybrid
       
           <br>
           <label>Session Type: </label>
           <br>
          <!-- <input type="text" name="field" id="name" placeholder="Enter Your fields separated by comma" value="">-->
           <input type="checkbox" name="stype[]" id="" value="Individual">Individual
           <input type="checkbox" name="stype[]" id="" value="Couple">Couple
           <input type="checkbox" name="stype[]" id="" value="Group">Group
           <br>

           <label>Start Time: </label>
           <br>
           <input type="time" name="start" id="name" value="">
           <br>
           <label>End Time: </label>
           <br>
           <input type="time" name="end" id="name" value="">
           <br>

           <label>Age Group: </label>
           <br>
           <input type="checkbox" name="age[]" id="" value="Under 18">Under 18
           <input type="checkbox" name="age[]" id="" value="18+">18+
           <input type="checkbox" name="age[]" id="" value="Over 45">Over 45
           <br>
        
        
           <label>Email: </label>
           <br>
           <input type="email" name="email" id="name" placeholder="Enter Your Valid Email" value="{{ old('email') }}">
           <span class="text-danger">@error('email'){{ $message }} @enderror</span>
           <br>
           <label>Phone: </label>
           <br>
           <input type="text" name="phone" id="name" placeholder="Enter Your Valid Email" value="{{ old('email') }}">
       
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
          
         
        
           </form>
       </div>
   </div> 

</body>
</html>