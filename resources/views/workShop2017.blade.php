@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/aboutstyle.css') }}">

@endsection
@section('content')

    <div class="container homeContainer wow slideInDown" id="about">
        <div class="row">
        <!--<img src="{{asset('images/About/about gablia.png')}}" id="about_the_gablia" class="col-xs-12"/>-->

            <div style="width: 100%">
                <h1 class="text-center">Registration Form</h1>
                <br>
                <form method="post" action="{{url('workShop2017')}}" class="form-horizontal"
                      style="margin: 0 auto; width: 50%">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="email">First name:</label>
                        <div class="col-sm-9">
                            <input type="text" name="first_name" placeholder="First Name" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Last name:</label>
                        <div class="col-sm-9">
                            <input name="last_name" placeholder="Last Name" class="form-control" type="text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Email:</label>
                        <div class="col-sm-9">
                            <input name="email" placeholder="E-Mail Address" class="form-control" type="email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Mobile:</label>
                        <div class="col-sm-9">
                            <input name="contact_no" placeholder="your phone no." class="form-control" type="text"
                                   required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Year:</label>
                        <div class="col-sm-9">
                            <select name="year" class="form-control selectpicker" required>
                                <option disabled selected value="">Select Your year</option>
                                <option>1st year</option>
                                <option>2nd year</option>
                                <option>3rd year</option>
                                <option>4th year</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Faculty:</label>
                        <div class="col-sm-9">
                            <select  id="faculty" name="faculty" class="form-control selectpicker" required>
                                <option disabled selected value="">Select Your Faculty</option>
                                <option value="cisAinShams" id="cisASU">حاسبات عين شمس</option>
                                <option value="engAinShams" id="engASU"> هندسة عين شمس</option>
                                <option value="cisHelwan" id="cisHL"> حاسبات حلوان</option>
                                <option value="engHelwan" id="engHL"> هندسة حلوان</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Select Workshop:</label>
                        <div class="col-sm-9">
                            <select id="workshop" disabled name="homepage_select_workshop"
                                    class="form-control selectpicker" required>
                                <option disabled selected value="">Select Workshop</option>
                                <option id="Blender" value="Blender">Blender</option>
                                <option id="Linux" value="Linux">Linux</option>
                                <option id="Laravel" value="Laravel">Laravel</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Day:</label>
                        <div class="col-sm-9">
                            <select id="day" disabled name="day" class="form-control selectpicker" required>
                                <option disabled selected value="">Select Day</option>
                                <option class="NotforignDays" value="Saturday7/10/2017">Saturday 7/10</option>
                                <option class="NotforignDays" value="Sunday8/10/2017">Sunday 8/10</option>
                                <option class="forignDays" value="Saturday">Saturday 30/9</option>
                                <option class="forignDays" value="Sunday">Sunday 1/10</option>
                                <option class="forignDays" value="Monday">Monday 2/10</option>
                                <option class="forignDays" value="Tuesday">Tuesday 3/10</option>
                                <option class="forignDays" value="Wednesday">Wednesday 4/10</option>
                                <option class="forignDays" value="Thursday ">Thursday 5/10</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Time:</label>
                        <div class="col-sm-9">
                            <select id="time" name="time" class="form-control selectpicker" required>
                                <option disabled selected value="">Select Time</option>
                                
                                <option value="10 am to 11 am">10 am to 11 am</option>
                                <option value="11 am to 12 pm">11 am to 12 pm</option>
                                <option value="12 pm to 1 pm">12 pm to 1 pm</option>
                                <option value="1 pm to 2 pm">1 pm to 2 pm</option>  
                                <option value="2 pm to 3 pm">2 pm to 3 pm</option>      
                                <option value="3 pm to 4 pm">3 pm to 4 pm</option>  
                                <option value="4 pm to 5 pm">4 pm to 5 pm</option>            
                            </select>
                        </div>
                    </div>

                    <div id="blenderTaskDiv" class="form-group" style="display: none">
                        <label class="control-label col-sm-3" for="blenderTask">Blender Task</label>
                        <div class="col-sm-9">
                            <input id="blenderTaskInput" type="text" name="blenderTask"
                                   placeholder="please paste URL of Task"
                                   class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-6 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script>
        $('#faculty').on('change', function () {
            if (this.value == "cisAinShams") {
                $('#workshop').prop('disabled', false);
                $('#day').prop('disabled', false);
                $('#day').val("");
                $('#workshop').val("");
                $('#workshop #Linux').hide();
                $('#workshop #Laravel').hide();
                $('#day .forignDays').show();
                $('#day .NotforignDays').hide();
                $('#blenderTaskInput').prop('required', false);
                $('#blenderTaskDiv').fadeOut();
            }
            else {
                $('#workshop').prop('disabled', false);
                $('#day').prop('disabled', false);
                $('#day').val("");
                $('#workshop').val("");
                $('#workshop #Linux').show();
                $('#workshop #Laravel').show();
                $('#day .forignDays').hide();
                $('#day .NotforignDays').show();
                $('#blenderTaskInput').prop('required', false);
                $('#blenderTaskDiv').fadeOut();
            }
        });

        $('#workshop').on('change', function () {
            if (this.value == "Blender") {
                $('#blenderTaskDiv').fadeIn();
                $('#blenderTaskInput').prop('required', true);
            }
            else {
                $('#blenderTaskInput').prop('required', false);
                $('#blenderTaskDiv').fadeOut();
            }
        });

    </script>
@endsection







