@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/aboutstyle.css') }}">

@endsection
@section('content')

    <div class="container homeContainer wow slideInDown" id="about">
        <div class="row">
        <!--<img src="{{asset('images/About/about gablia.png')}}" id="about_the_gablia" class="col-xs-12"/>-->

            <div class="hvr-grow-shadow" style="width: 100%">
                <h2 class="text-center">Register Form</h2>

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
                            <input name="mobile" placeholder="your phone no." class="form-control" type="number"
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
                                <option value="cisASU" id="cisASU">حاسبات عين شمس</option>
                                <option value="engASU" id="engASU"> هندسة عين شمس</option>
                                <option value="cisHL" id="cisHL"> حاسبات حلوان</option>
                                <option value="engHL" id="engHL"> هندسة حلوان</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Select Workshop:</label>
                        <div class="col-sm-9">
                            <select id="workshop" disabled name="workshop"
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
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                                <option class="forignDays" value="Monday">Monday</option>
                                <option class="forignDays" value="Tuesday">Tuesday</option>
                                <option class="forignDays" value="Wednesday">Wednesday</option>
                                <option class="forignDays" value="Thursday ">Thursday</option>
                                <option class="forignDays" value="Friday">Friday</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Time:</label>
                        <div class="col-sm-9">
                            <select id="time" name="time" class="form-control selectpicker" required>
                                <option disabled selected value="">Select Time</option>
                                <option>10 am to 10.30 am</option>
                                <option>10.30 am to 11.30 pm</option>
                                <option>11.30 pm to 12.0 pm</option>
                                <option>12.0 pm to 12.30 pm</option>
                                <option>12.30 pm to 1 pm</option>
                                <option>1.0 pm to 1.30 pm</option>
                                <option>1.30 pm to 2.0 pm</option>
                                <option>2.0 pm to 2.30 pm</option>
                                <option>2.30 pm to 3 pm</option>
                                <option>3.0 pm to 3.30 pm</option>
                                <option>3.30 pm to 4.0 pm</option>
                                <option>4.0 pm to 4.30 pm</option>
                                <option>4.30 pm to 5.0 pm</option>
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
            if (this.value == "cisASU") {
                $('#workshop').prop('disabled', false);
                $('#day').prop('disabled', false);
                $('#day').val("");
                $('#workshop').val("");
                $('#workshop #Linux').hide();
                $('#workshop #Laravel').hide();
                $('#day .forignDays').show();
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







