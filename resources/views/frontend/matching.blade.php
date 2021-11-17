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
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
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
				<li class="nav-item"><a href="index.html" class="nav-link active ">Home</a></li>
				<li class="nav-item"><a href="{{ route('about') }}" class="nav-link ">About Us</a></li>
				<li class="nav-item"><a href="{{ route('services') }}" class="nav-link"> Services</a></li>
				<div class="dropdown">
                <li class="nav-item dropbtn">
				
				<a href="services.html" class="nav-link">Resources<i class="fa fa-caret-down"></i></a></li>
				<div class="dropdown-content">
				<a href="#">Blogs</a>
                <a href="#">Events</a>
                </div>
                </div>
                
		
				<li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact Us</a></li>
				
			</ul>
			
		</div>


	</div>
</nav>
<div class= "container ml-5 mt-3">

<div class="mb-5" id="intro">
         <h2>Answer these questions to get a match!</h2>

    </div>
    <form id="" method="post" action="{{ route('match') }}">
    @csrf

        <div class="quiz__item">
            <div class="item__count" id="question1" tabindex="-1"><h3>Question 1</h3></div>
            <p class="item__question">
               
            </p>
            <p>Do you prefer?</p>
            <div class="item__answer">
                <span id="MainContentPlaceholder_C001_ctl01" class="sfError" style="display:none;">Please select an answer</span>

                <ul id="MainContentPlaceholder_C001_rdbListQues2">
	<li><input id="q1_0" type="radio" name="q1" value="Male" /><label for="q1_0">A male Therapist</label></li>
	<li><input id="q1_1" type="radio" name="q1" value="Female" /><label for="q1_1">A Female Therapist</label></li>
	
	

</ul>
            </div>
        </div>
        <div class="quiz__item">
            <div class="item__count" id="question2" tabindex="-1"><h3>Question 2</h3></div>
            <p class="item__question">
               
            </p>
            <p>You want help dealing with?</p>
            <div class="item__answer">
                <span id="MainContentPlaceholder_C001_ctl01" class="sfError" style="display:none;">Please select an answer</span>

                <ul id="MainContentPlaceholder_C001_rdbListQues2">
	<li><input id="q2_0" type="checkbox" name="q2[]" value="Depression" /><label for="q2_0">Depression</label></li>
	<li><input id="q2_1" type="checkbox" name="q2[]" value="Anxiety" /><label for="q2_1">Anxiety</label></li>
	<li><input id="q2_2" type="checkbox" name="q2[]" value="Social Wellbeing" /><label for="q2_2">Social Wellbeing</label></li>
	<li><input id="q2_2" type="checkbox" name="q2[]" value="Self esteem and Confidence" /><label for="q2_2">Self esteem and Confidence</label></li>
	<li><input id="q2_2" type="checkbox" name="q2[]" value="Relationship Issues" /><label for="q2_2">Relationship Issues</label></li>
	<li><input id="q2_2" type="checkbox" name="q2[]" value="Sleeping Disorder" /><label for="q2_2">Sleeping Disorder</label></li>
	<li><input id="q2_2" type="checkbox" name="q2[]" value="Eating Disorder" /><label for="q2_2">Eating Disorder</label></li>
	<li><input id="q2_1" type="checkbox" name="q2[]" value="Trauma" /><label for="q2_1">Trauma</label></li>
	<li><input id="q2_2" type="checkbox" name="q2[]" value="Addiction" /><label for="q2_2">Addiction</label></li>
	
	

</ul>
            </div>
        </div>

        <div class="quiz__item">
            <div class="item__count" id="question3" tabindex="-1"><h3>Question 3</h3></div>
            <p class="item__question">
              
            </p>
            <p>Which session format would you prefer?</p>
            <div class="item__answer">
                <span id="MainContentPlaceholder_C001_ctl01" class="sfError" style="display:none;">Please select an answer</span>

                <ul id="MainContentPlaceholder_C001_rdbListQues2">
	<li><input id="q2_0" type="radio" name="q3" value="Online" /><label for="q2_0">Online</label></li>
	<li><input id="q2_1" type="radio" name="q3" value="Face-to-Face" /><label for="q2_1">Face-to-Face</label></li>
	<li><input id="q2_2" type="radio" name="q3" value="Hybrid" /><label for="q2_2">Hybrid</label></li>
	

</ul>
            </div>
        </div>

		<div class="quiz__item">
            <div class="item__count" id="question3" tabindex="-1"><h3>Question 4</h3></div>
            <p class="item__question">
              
            </p>
            <p>Which session type would you prefer?</p>
            <div class="item__answer">
                <span id="MainContentPlaceholder_C001_ctl01" class="sfError" style="display:none;">Please select an answer</span>

                <ul id="MainContentPlaceholder_C001_rdbListQues2">
	<li><input id="q2_0" type="radio" name="q4" value="Individual" /><label for="q2_0">Individual</label></li>
	<li><input id="q2_1" type="radio" name="q4" value="Couple" /><label for="q2_1">Couple</label></li>
	<li><input id="q2_2" type="radio" name="q4" value="Group" /><label for="q2_2">Group</label></li>
	

</ul>
            </div>
        </div>

        <div class="quiz__item">
            <div class="item__count" id="question4" tabindex="-1"><h3>Question 5</h3></div>
            <p class="item__question">
              
            </p>
            <p>Age?</p>
            <div class="item__answer">
                <span id="MainContentPlaceholder_C001_ctl01" class="sfError" style="display:none;">Please select an answer</span>

                <ul id="MainContentPlaceholder_C001_rdbListQues2">
	<li><input id="q2_0" type="radio" name="q5" value="Under 18" /><label for="q2_0">Under 18</label></li>
	<li><input id="q2_1" type="radio" name="q5" value="18+" /><label for="q2_1">18+</label></li>
	<li><input id="q2_2" type="radio" name="q5" value="Over 45" /><label for="q2_2">Over 45</label></li>
	

</ul>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Submit</button>
       
       </form>
       <div>
</body>



</html>