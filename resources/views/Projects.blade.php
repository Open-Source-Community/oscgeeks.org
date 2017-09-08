@extends('layouts.app2',array('committees_data' => $committees_data))

@section('CSS')

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/projects.css') }}">

@endsection

@section('content')
	<div class="container">
		<div class="text-center wow flipInX" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
			<div class="text-center">
			<h1 class="hvr-bounce-in">Project Committee</h1>
			</div>
			<img class="img-responsive" src="{{asset('/images/Background/6.jpg')}}">
		</div>
		<div class="">
			<h1 class="proj1 hvr-float">Steganography:</h1>
		</div>
		<!--Start Carousel-->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!--indicator-->
		<ol class="carousel-indicators hidden-xs">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			<li data-target="#carousel-example-generic" data-slide-to="4"></li>
		</ol>
		<!-- Wrapper For Slides-->
		<div class="carousel-inner">
			<div class="item active">
				<img class="img-responsive" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Project1/Screenshot%20from%202017-09-07%2021-29-52.png?raw=true" alt="pic 0">
			</div>
			<div class="item">
				<img class="img-responsive" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Project1/Screenshot%20from%202017-09-07%2021-31-24.png?raw=true" alt="pic 1">
			</div>
			<div class="item">
				<img class="img-responsive" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Project1/Screenshot%20from%202017-09-07%2021-33-08.png?raw=true" alt="pic 2">
			</div>
			<div class="item">
				<img class="img-responsive" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Project1/Screenshot%20from%202017-09-07%2021-34-41.png?raw=true" alt="pic 3">
			</div>
			<div class="item">
				<img class="img-responsive" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Project1/Screenshot%20from%202017-09-07%2021-34-11.png?raw=true" alt="pic 4">
			</div>
		</div>
		<!--Controls-->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
		</div>
		<!--End Carousel-->
		 <div class="wow bounceInRight" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
		<div class="hvr-glow">
		<h2>Project Description:</h2>
		<p>This is a project in which we use images to hide inside them either text or other images, the project is divided into two sub projects, first the text-in-image project in which we iterate over the text given by a user and hide it inside the bits of a given pic. This technique will hide the text completely and the user would never notice that the data are hided Here we choose an image and a text file then we encrypt, later on we can decrypt the secret text into a text file from our choice as show.</p><br>
		</div>
		<div class="hvr-glow">
		<p>The second part is storing images inside other images, we used the Pixels of the image in order to store pixels of the secret images, for example we take the Red/Green/Blue bits of the secret image and store them in different Red/Green/Blue bits of the other image, this process requires that the image we are going to use have a larger height/width than the secret image, should be between 2.5-3* the size of the smaller image This is the basic application look in which the user picks his small image that he desires to store it in a larger image from his choice.</p><br>
		</div>
		<div class="hvr-glow">
		<p>we encrypted the image on the left on the image on the right, if you opened the image after encrypting you will not notice any difference After decrypting the image has been returned as the original form `The link of out github repository is <a target="_blank" href="https://github.com/Open-Source-Community/steganography_OSC">steganography_OSC</a> </p><br>
		</div>
		</div>

		<h2 class="proj1 hvr-float">المحفظة:</h2>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img class="img-responsive" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Project2/image1.jpg?raw=true" alt="Los Angeles" style="width:30%;height: 50%;">
      </div>

      <div class="item">
        <img class="img-responsive" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Project2/image2.jpg?raw=true" alt="Chicago" style="width:30%;height: 50%;">
      </div>
    
      <div class="item">
        <img class="img-responsive" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Project2/image3.jpg?raw=true" alt="New york" style="width:30%;height: 50%;">
      </div>

      <div class="item">
        <img class="img-responsive" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Project2/image4.jpg?raw=true" alt="New york" style="width:30%;height: 50%;">
      </div>

      <div class="item">
        <img class="img-responsive" src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Project2/image5.jpg?raw=true" alt="New york" style="width:30%;height: 50%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="wow bounceInLeft" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
	<div class="hvr-glow">
	<h2>Project Description:</h2>
	<p>This an android application that we created in order to keep track of the user’s money in a specific time that he will give to the application and then the application will tell the user his daily (مصروف) 
The application will also allow the user to add money to his pocket money that has been given at the start and will re-construct his (مصروف) according to the money given 
It’s a great android app that will make you know how much you need to spend each day for your pocket money and will prevent you from over-spending <a target="_blank" href="https://github.com/Open-Source-Community/AllowanceCalculator">المحفظة</a></p>
	</div>
 </div>
</div>
	

@endsection