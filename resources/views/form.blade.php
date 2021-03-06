@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/fr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/done.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="text-center wow zoomInUp" data-wow-duration="1s" data-wow-delay="0.5s" offset="200">
            <h1 class="hvr-pop">Registration Form</h1>
            <div class="col-md-offset-3 col-md-6">
                <div class="form-container">
                    <div class="errors">

                    </div>
                    <form id="form">
                        {{ csrf_field() }}

                        <div class="form-group">

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input name="name" class="form-control pull-right" placeholder="Full Name*" required>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <input name="email" class="form-control pull-right" type="email"
                                       placeholder="Email*" required>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <input name="mobile" class="form-control pull-right" type="tel"
                                       pattern="^\d{11}$" maxlength="11" placeholder="Mobile Number*" required>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fas fa-layer-group"></i>
                                </div>
                                <select name="year" class="form-control pull-right" type="text" required>
                                    <option selected value="">Choose Year*</option>
                                    <option value="First Year">First Year</option>
                                    <option value="Second Year">Second Year</option>
                                    <option value="Third Year">Third Year</option>
                                    <option value="Fourth Year">Fourth Year</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fas fa-users "></i>
                                </div>
                                <select name="first_committee" class="form-control pull-right" type="text" required>
                                    <option selected value="">Choose First Committee*</option>
                                    <option value="Linux">Linux</option>
                                    <option value="Blender">Blender</option>
                                    <option value="English Heroes">English Heroes</option>
                                    <option value="Content Creators">Content Creators</option>
                                    <option value="Artwork">Artwork & Design</option>
                                    <option value="Projects">Projects</option>
                                    <option value="Web">Web</option>
                                    <option value="Public Relations">Public Relations</option>
                                    <option value="Human Resources">Human Resources</option>
                                    <option value="Game">Game</option>
                                    <option value="Social">Social Media</option>
                                    <option value="Logistics">Logistics</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fas fa-users "></i>
                                </div>
                                <select name="second_committee" class="form-control pull-right" type="text">
                                    <option selected value="-">Choose Second Committee</option>
                                    <option value="Linux">Linux</option>
                                    <option value="Blender">Blender</option>
                                    <option value="English Heroes">English Heroes</option>
                                    <option value="Content Creators">Content Creators</option>
                                    <option value="Artwork">Artwork & Design</option>
                                    <option value="Projects">Projects</option>
                                    <option value="Web">Web</option>
                                    <option value="Public Relations">Public Relations</option>
                                    <option value="Human Resources">Human Resources</option>
                                    <option value="Game">Game</option>
                                    <option value="Social">Social Media</option>
                                    <option value="Logistics">Logistics</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <select id="day" name="day" class="form-control pull-right" type="text" required>
                                    <option selected value="">Select Day*</option>
                                    {{--<option value="1">Saturday 01/09</option>--}}
                                    @foreach($days as $day)
                                         <option value="{{$day->id}}">{{$day->day." | $day->date"}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fas fa-clock "></i>
                                </div>
                                <select id="times" disabled name="time" class="form-control pull-right" type="text" required>
                                    <option value="" selected>chose time</option>
                                </select>
                            </div>
                        </div>

                        <button class="submit"><i id="spinner" class="fa fa-circle-o-notch fa-spin"
                                                  style="margin-right: 10px;display: none"></i>Submit
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title danger" style="color:orange">Error Submit</h4>
                </div>
                <div class="modal-body" style="color: red;text-align: center">
                    <img class="done"
                         src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/Minified%20Images/navbar/logo-osc.png?raw=true">
                    <p>Sorry, The slot you have picked is fully booked! Please choose another time for your
                        interview.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {

            $("#day").change(function(){
                var day = $(this).find(":selected").val();
                $.ajax({
                    url: "/getTimes",
                    type: "get",
                    dataType:"json",
                    data: {'day':day , '_token':'{{csrf_token()}}'}
                })
                .done(function (res) {
                    $("#times").html("");
                    $("#times").append('<option value="" selected>Select Time</option>');
                    $("#times").attr("disabled" , false);
                        jQuery.each(res , function(i , row) {
                           $("#times").append("<option value='"+row.id+"'>"+row.time+"</option>");
                        })
                        if(res.length == 0){
                            alert("this day doesn't have available times");
                            $("#times").attr("disabled" , true);
                        }
                })
            });
            $(".submit").click(function (e) {
                    var valid = this.form.checkValidity();
                    $("#valid").html(valid);
                    if (valid) {
                        e.preventDefault();
                        $("#spinner").show();
                        $.ajax({
                            url: "/apply",
                            type: "post",
                            data: $("#form").serialize()
                        }).done(function (data) {
                            $("#spinner").hide();
                            if (data === "done") {
                                window.location = "/done";
                            }
                            if (data === "refused") {
                                $("#myModal").modal("show");
                            }
                        })
                        .fail(function(){
                            $("#spinner").hide();
                        })
                    }
                }
            );
        });

        

    </script>

@endsection