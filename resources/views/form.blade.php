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
                    <form id="form" action="/apply" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input name="name" class="form-control pull-right" type="text" placeholder="Full Name*"
                                       required>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <input name="email" class="form-control pull-right" type="text" placeholder="Email*"
                                       required>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <input name="mobile" class="form-control pull-right" type="text"
                                       placeholder="Mobile Number*" required>
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
                                <select id="committee" name="first_committee" class="form-control pull-right" type="text" required>
                                    <option selected value="">Choose First Committee*</option>
                                    <option value="Linux">Linux</option>
                                    <option value="Blender">Blender</option>
                                    <option value="English Heroes">English Heroes</option>
                                    <option value="Content Creators">Content Creators</option>
                                    <option value="Artwork">Artwork</option>
                                    <option value="Projects">Projects</option>
                                    <option value="Web">Web</option>
                                    <option value="Public Relations">Public Relations</option>
                                    <option value="Human Resources">Human Resources</option>
                                    <option value="Fundraising">Fundraising</option>
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
                                    <option selected value="">Choose Second Committee</option>
                                    <option value="Linux">Linux</option>
                                    <option value="Blender">Blender</option>
                                    <option value="English Heroes">English Heroes</option>
                                    <option value="Content Creators">Content Creators</option>
                                    <option value="Artwork">Artwork</option>
                                    <option value="Projects">Projects</option>
                                    <option value="Web">Web</option>
                                    <option value="Public Relations">Public Relations</option>
                                    <option value="Human Resources">Human Resources</option>
                                    <option value="Fundraising">Fundraising</option>
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
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fas fa-clock "></i>
                                </div>
                                <select id="times" name="time" class="form-control pull-right" type="text" required>
                                    <option selected value="">Select Time*</option>
                                    <!-- <option value="from 10:00 to 11:30">from 10:00 to 11:30</option>
                                    <option value="from 11:30 to 01:00">from 11:30 to 01:00</option>
                                    <option value="from 01:00 to 02:30">from 01:00 to 02:30</option>
                                    <option value="from 02:30 to 04:00">from 02:30 to 04:00</option>
                                    <option value="from 04:00 to 05:30">from 04:00 to 05:30</option> -->
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="submit">Submit</button>
                    </form>

                </div>
            </div>

        </div>

    </div>
    </div>

     <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog" style="text-align: center;">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-body">
              <p class="fas fa-times-circle" style="font-size: 100px; color: red; text-align: center;"></p>
               <h3>No Available times at this day for the committee that you select it </h3> 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>

    </div>
    <script>
        $(document).ready(function(){

            function availTime(){
                var committee = $("#committee").find(':selected').val();
                var day = $("#day").find(':selected').val();
                $.ajax({
                    url:"/availTime",
                    type:"post",
                    data: $("#form").serialize()
                })
                .done(function(data){
                   if(data=="full"){
                       $("#myModal").modal("show");
                       $("#times").html('<option selected value="">Select Time*</option>');
                   }else{
                        $("#times").html('<option selected value="">Select Time*</option>');
                        jQuery.each(data , function(i , val){
                            $("#times").append('<option value="'+val+'">'+val+'</option>');
                        });

                    }
                })
            }
            
            availTime();


            $("#day").on("change" ,function(e){
                e.preventDefault()
                availTime();
            })
            $("#committee").on("change" ,function(e){
                e.preventDefault()
                availTime();
            })
        })
    
    </script>
@endsection