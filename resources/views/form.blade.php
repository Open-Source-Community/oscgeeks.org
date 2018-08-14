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
                  <form action="" method="POST">
                    
                    <div class="form-group">
                     
                      <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input class="form-control pull-right" type="text" placeholder="Type name here..">
                      </div>
                    </div>

                    <div class="form-group">
                     
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fas fa-envelope"></i>
                          </div>
                          <input class="form-control pull-right" type="text" placeholder="Type email here..">
                        </div>
                    </div>

                    <div class="form-group">
                     
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fas fa-mobile-alt"></i>
                          </div>
                          <input class="form-control pull-right" type="text" placeholder="Mobile Number">
                        </div>
                    </div>

                    <div class="form-group">
                     
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fas fa-university"></i>
                          </div>
                          <input class="form-control pull-right" type="text" placeholder="University Name">
                        </div>
                    </div>

                    <div class="form-group">
                     
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fas fa-warehouse "></i>
                          </div>
                          <input class="form-control pull-right" type="text" placeholder="Faculty Name">
                        </div>
                    </div>

                    <div class="form-group">
                     
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fas fa-layer-group"></i>
                          </div>
                            <select class="form-control pull-right" type="text">
                                <option selected>Choose Year from here...</option>
                                <option value="1">First Year</option>
                                <option value="2">Second Year</option>
                                <option value="3">Third Year</option>
                                <option value="4">Fourth Year</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                     
                        <div class="input-group date">
                            <div class="input-group-addon">
                            <i class="fas fa-users "></i>
                            </div>
                            <select class="form-control pull-right" type="text" required>
                                <option selected>Choose First Committee</option>
                                <option value="1">Linux</option>
                                <option value="2">Blender</option>
                                <option value="3">English Heroes</option>
                                <option value="4">Content Creators</option>
                                <option value="5">Artwork</option>
                                <option value="6">Projects</option>
                                <option value="7">Web</option>
                                <option value="8">Public Relations</option>
                                <option value="9">Human Resources</option>
                                <option value="10">Fundraising</option>
                                <option value="11">Logistics</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                     
                        <div class="input-group date">
                            <div class="input-group-addon">
                            <i class="fas fa-users "></i>
                            </div>
                            <select class="form-control pull-right" type="text" >
                                <option selected>Choose Second Committee</option>
                                <option value="1">Linux</option>
                                <option value="2">Blender</option>
                                <option value="3">English Heroes</option>
                                <option value="4">Content Creators</option>
                                <option value="5">Artwork</option>
                                <option value="6">Projects</option>
                                <option value="7">Web</option>
                                <option value="8">Public Relations</option>
                                <option value="9">Human Resources</option>
                                <option value="10">Fundraising</option>
                                <option value="11">Logistics</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                     
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fas fa-calendar-alt"></i>
                          </div>
                            <select class="form-control pull-right" type="text">
                                <option selected>Select Day...</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                     
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fas fa-clock "></i>
                          </div>
                            <select class="form-control pull-right" type="text">
                                <option selected>Select Time...</option>
                                <option value="from 10:00 to 11:30">from 10:00 to 11:30</option>
                                <option value="from 11:30 to 01:00">from 11:30 to 01:00</option>
                                <option value="from 01:00 to 02:30">from 01:00 to 02:30</option>
                                <option value="from 02:30 to 04:00">from 02:30 to 04:00</option>
                                <option value="from 04:00 to 05:30">from 04:00 to 05:30</option>
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
        
    </div>
@endsection