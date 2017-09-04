@extends('layouts.app2',array('committees_data' => $committees_data))

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/aboutstyle.css') }}">

@endsection



@section('content')
    <div class="container homeContainer wow slideInDown" id="about">
        <div class="row">
        <!--<img src="{{asset('images/About/about gablia.png')}}" id="about_the_gablia" class="col-xs-12"/>-->
            <div class="hvr-grow">
            <h1 id="about_the_gablia" class="col-xs-12">About OSC</h1>
            </div>
            <div class="hvr-grow-shadow">
            <p class="about_text"><span>Open Source Community</span> a student community founded in Faculty of
                Computer and Information Science - Ain Shams University, on Dec 5th
                2013.<br> Open Source Community promotes the philosophy of free software
                and provides a suitable environment for students to create open source
                projects.<br>
                We believe that knowledge and technologies do not belong to a person or a
                group of people.<br> We believe that knowledge and technologies must be
                open and available for everybody to study, contribute in, modify and share.<br>
                Simply we are students who believe in the Open Source concept. We are a
                community because we work together in each committee to reach our goal.
                A person is not just a member in a committee like PR or HR, we work
                wherever we can because we are OSCians. In other words <span>“ open sourceاحنا بتوع الـ ”</span></p>
            </div>
            <img src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/About/pinguens.png?raw=true" id="pinguens">
        </div>
    </div>
@endsection





