@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/publicrelations.css') }}">
@endsection

@section('content')

    <div class="container">
        <div class="text-center wow slideInLeft" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
            <h1 class="hvr-float">Public Relations</h1>
            <img class="img-responsive"
                 src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/PR.jpg?raw=true">
        </div>


        <div class="cont hvr-float-shadow wow slideInRight " data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
            <h2>Job Description:</h2>
            <p>If you created a wonderful job without revealing it to the public, how
                would people know that you created that wonderful thing? it's like you've
                done nothing !</p>
            <p>Surely you will need people who have the ability to make relations, communicate well with anyone and
                leave that good impression on people's toughts; to deliver your job or idea to the world in the most
                effective way.</p>
            <p>So, that's what we actually do as PRians!</p>
            <p>Create and maintain a favorable public image for the community by communicating, understanding and
                supporting our followers and students, usually through publicity and other non-paid forms of
                communication to build, maintain and manage the reputation of OSC.</p>
            <p>These efforts also include supporting arts committee, events, workshops and social media accounts.</p>
            <p>Mainly our work is managing the social media accounts and launching creative ideas of campaigns to make
                people reach to our work easily, spread our message -The open source- and our knowledge to others by
                establishing and maintaining lines of communication between our organization and its public.</p>
        </div>
        <br><br>
    </div>

@endsection