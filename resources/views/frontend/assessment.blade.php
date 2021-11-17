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
         <h2>Take the test to better understand your mental health!</h2>

    </div>
    <!--<div id="startButton" class="button">
         <h3>Let's get started!</h3>

    </div>
    <div id="question1" class="question">
        <p>What is your favourite food?</p>
        <ul id="answers1">
            <li>Breakfast Food</li>
            <li>Waffles</li>
            <li>Calzones</li>
            <li>Vegan Superfoods</li>
        </ul>
    </div>
    <div id="question2" class="question">
        <p>What do you enjoy doing in your spare time?</p>
        <ul id="answers2">
            <li>Woodwork in solitary</li>
            <li>Work!</li>
            <li>Make stop motion 'movies'</li>
            <li>Run!</li>
        </ul>
    </div>
    <div id="question3" class="question">
        <p>What would you do on "treat yo'self" day?</p>
        <ul id="answers3">
            <li>Buy a Batman suit and be Batman</li>
            <li>Go to my lakehouse by myself</li>
            <li>Treat myself to waffles and friends</li>
            <li>Run! Or maybe some yoga</li>
        </ul>
    </div>
    <div id="question4" class="question">
        <p>What are you likely to be doing on a Friday night?</p>
        <ul id="answers4">
            <li>Cooking vegan hamburgers</li>
            <li>Being alone, maybe with some Scotch</li>
            <li>Still working or hanging out with my bestie</li>
            <li>Watching Game of Thrones</li>
        </ul>
    </div>
    <div id="question5" class ="question" >
        <p>What do you find funny?</p>
        <ul id="answers5">
            <li>Accounting puns</li>
            <li>The Government</li>
            <li>Myself</li>
            <li>You can laugh at anything!</li>
        </ul>
    </div>
    <div id="results">
        <div id="Leslie" class="result">
            <p>You get Leslie Knope!</p>
            <img src="leslie.jpg" alt="Leslie Knope giving two thumbs up!">
        </div>
        <div id="Ron" class="result">
            <p>You got Ron Swanson!</p>
            <img src="ron.png" alt="Ron Swanson smiling">
        </div>
        <div id="Ben" class="result">
            <p>You got Ben Wyatt!</p>
            <img src="ben.png" alt="Ben Wyatt">
        </div>
        <div id="Chris" class="result">
            <p>You got Chirs Traeger!</p>
            <img src="chris.png" alt="Chris Traeger saying good job">
        </div>
    </div>-->

    <form id="" method="post" action="{{ route('process') }}">
    @csrf

        <div class="quiz__item">
            <div class="item__count" id="question1" tabindex="-1"><h3>Question 1</h3></div>
            <p class="item__question">
               
            </p>
            <p>Are you having trouble falling or staying asleep, or sleeping too much?</p>
            <div class="item__answer">
                <span id="MainContentPlaceholder_C001_ctl01" class="sfError" style="display:none;">Please select an answer</span>

                <ul id="MainContentPlaceholder_C001_rdbListQues2">
	<li><input id="q1_0" type="radio" name="q1" value="1" /><label for="q1_0">Not at all/Rarely</label></li>
	<li><input id="q1_1" type="radio" name="q1" value="2" /><label for="q1_1">Most of the days</label></li>
	<li><input id="q1_2" type="radio" name="q1" value="3" /><label for="q1_2">Nearly every day</label></li>
	

</ul>
            </div>
        </div>
        <div class="quiz__item">
            <div class="item__count" id="question2" tabindex="-1"><h3>Question 2</h3></div>
            <p class="item__question">
               
            </p>
            <p>How often have you been bothered by poor appetite or overeating?</p>
            <div class="item__answer">
                <span id="MainContentPlaceholder_C001_ctl01" class="sfError" style="display:none;">Please select an answer</span>

                <ul id="MainContentPlaceholder_C001_rdbListQues2">
	<li><input id="q2_0" type="radio" name="q2" value="1" /><label for="q2_0">Not at all/Rarely</label></li>
	<li><input id="q2_1" type="radio" name="q2" value="2" /><label for="q2_1">Most of the days</label></li>
	<li><input id="q2_2" type="radio" name="q2" value="3" /><label for="q2_2">Nearly every day</label></li>
	

</ul>
            </div>
        </div>

        <div class="quiz__item">
            <div class="item__count" id="question3" tabindex="-1"><h3>Question 3</h3></div>
            <p class="item__question">
              
            </p>
            <p>Are you feeling down, lost and hopeless lately?</p>
            <div class="item__answer">
                <span id="MainContentPlaceholder_C001_ctl01" class="sfError" style="display:none;">Please select an answer</span>

                <ul id="MainContentPlaceholder_C001_rdbListQues2">
	<li><input id="q2_0" type="radio" name="q3" value="1" /><label for="q2_0">Not at all/Rarely</label></li>
	<li><input id="q2_1" type="radio" name="q3" value="2" /><label for="q2_1">Most of the days</label></li>
	<li><input id="q2_2" type="radio" name="q3" value="3" /><label for="q2_2">Nearly every day</label></li>
	

</ul>
            </div>
        </div>

        <div class="quiz__item">
            <div class="item__count" id="question4" tabindex="-1"><h3>Question 4</h3></div>
            <p class="item__question">
              
            </p>
            <p>Are you having troubles focusing on your study or work?</p>
            <div class="item__answer">
                <span id="MainContentPlaceholder_C001_ctl01" class="sfError" style="display:none;">Please select an answer</span>

                <ul id="MainContentPlaceholder_C001_rdbListQues2">
	<li><input id="q2_0" type="radio" name="q4" value="1" /><label for="q2_0">Not at all/Rarely</label></li>
	<li><input id="q2_1" type="radio" name="q4" value="2" /><label for="q2_1">Most of the days</label></li>
	<li><input id="q2_2" type="radio" name="q4" value="3" /><label for="q2_2">Nearly every day</label></li>
	

</ul>
            </div>
        </div>

        <div class="quiz__item">
            <div class="item__count" id="question5" tabindex="-1"><h3>Question 5</h3></div>
            <p class="item__question">
               
            </p>
            <p>How often have you been bothered by feeling nervous, anxious or on edge?</p>
            <div class="item__answer">
                <span id="MainContentPlaceholder_C001_ctl01" class="sfError" style="display:none;">Please select an answer</span>

                <ul id="MainContentPlaceholder_C001_rdbListQues2">
	<li><input id="q2_0" type="radio" name="q5" value="1" /><label for="q2_0">Not at all/Rarely</label></li>
	<li><input id="q2_1" type="radio" name="q5" value="2" /><label for="q2_1">Most of the days</label></li>
	<li><input id="q2_2" type="radio" name="q5" value="3" /><label for="q2_2">Nearly every day</label></li>
	

</ul>
            </div>
        </div>

        <!--<div class="quiz__item">
            <div class="item__count" id="question6" tabindex="-1"><h3>Question 5</h3></div>
            <p class="item__question">
               
            </p>
            <p>Are you finding it hard coping up with your relationships lately(partner/friends/family)?</p>
            <div class="item__answer">
                <span id="MainContentPlaceholder_C001_ctl01" class="sfError" style="display:none;">Please select an answer</span>

                <ul id="MainContentPlaceholder_C001_rdbListQues2">
	<li><input id="q2_0" type="radio" name="q2" value="1" /><label for="q2_0">Not at all/Rarely</label></li>
	<li><input id="q2_1" type="radio" name="q2" value="2" /><label for="q2_1">Most of the days</label></li>
	<li><input id="q2_2" type="radio" name="q2" value="3" /><label for="q2_2">Nearly every day</label></li>
	

</ul>
            </div>
        </div>

        div class="quiz__item">
            <div class="item__count" id="question7" tabindex="-1"><h3>Question 5</h3></div>
            <p class="item__question">
               
            </p>
            <p>Are you finding it hard maintaing your social life?</p>
            <div class="item__answer">
                <span id="MainContentPlaceholder_C001_ctl01" class="sfError" style="display:none;">Please select an answer</span>

                <ul id="MainContentPlaceholder_C001_rdbListQues2">
	<li><input id="q2_0" type="radio" name="q2" value="1" /><label for="q2_0">Not at all/Rarely</label></li>
	<li><input id="q2_1" type="radio" name="q2" value="2" /><label for="q2_1">Most of the days</label></li>
	<li><input id="q2_2" type="radio" name="q2" value="3" /><label for="q2_2">Nearly every day</label></li>
	

</ul>
            </div>
        </div>

        <div class="quiz__item">
            <div class="item__count" id="question8" tabindex="-1"><h3>Question 1</h3></div>
            <p class="item__question">
              
            </p>
            <p>How often have you been bothered by worrying too much about different things?</p>
            <div class="item__answer">
                <span id="MainContentPlaceholder_C001_ctl00" class="sfError" style="display:none;">Please select an answer</span>

                <ul id="MainContentPlaceholder_C001_rdbListQues1">
	<li><input id="q1_0" type="radio" name="q1" value="1" /><label for="q1_0">I sleep no longer than 7-8 hours a night and I don't nap during the day</label></li>
	<li><input id="q1_1" type="radio" name="q1" value="2" /><label for="q1_1">I sleep no longer than 10 hours in a 24-hour period including naps</label></li>
	<li><input id="q1_2" type="radio" name="q1" value="3" /><label for="q1_2">I sleep no longer than 12 hours in a 24-hour period including naps</label></li>
	
</ul>
            </div>
        </div>

        <div class="quiz__item">
            <div class="item__count" id="question9" tabindex="-1"><h3>Question 5</h3></div>
            <p class="item__question">
               
            </p>
            <p>Are you experiencing frequent mood swings lately?</p>
            <div class="item__answer">
                <span id="MainContentPlaceholder_C001_ctl01" class="sfError" style="display:none;">Please select an answer</span>

                <ul id="MainContentPlaceholder_C001_rdbListQues2">
	<li><input id="q2_0" type="radio" name="q2" value="1" /><label for="q2_0">Not at all/Rarely</label></li>
	<li><input id="q2_1" type="radio" name="q2" value="2" /><label for="q2_1">Most of the days</label></li>
	<li><input id="q2_2" type="radio" name="q2" value="3" /><label for="q2_2">Nearly every day</label></li>
	

</ul>
            </div>
        </div>

        <div class="quiz__item">
            <div class="item__count" id="question9" tabindex="-1"><h3>Question 5</h3></div>
            <p class="item__question">
               
            </p>
            <p>How often do you perform self care?</p>
            <div class="item__answer">
                <span id="MainContentPlaceholder_C001_ctl01" class="sfError" style="display:none;">Please select an answer</span>

                <ul id="MainContentPlaceholder_C001_rdbListQues2">
	<li><input id="q2_0" type="radio" name="q2" value="1" /><label for="q2_0">Not at all/Rarely</label></li>
	<li><input id="q2_1" type="radio" name="q2" value="2" /><label for="q2_1">Most of the days</label></li>
	<li><input id="q2_2" type="radio" name="q2" value="3" /><label for="q2_2">Nearly every day</label></li>
	

</ul>
            </div>
        </div>-->


      

        <button class="btn btn-primary" type="submit">Submit</button>
       
       </form>

       <div>
          
           <div class="result mt-5">
           @foreach ($results as $res)
            
           {{ $res }}
       

           @endforeach

               <div>
</div>
           
       
      
<div>
</body>



</html>