@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/events.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Vision of OSC </h3>
                <p class="vision">
                    Our aim is to spread the open source concept throughout our community,
and among FCIS students specifically. We work to help them start the
journey of using alternative open source software programs and to answer
their questions as best we can.

                </p>
                <h3 class="text-center">Our Events</h3>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="http://lorempixel.com/250/250/cats/1" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Event One</h4>
                                <h4 class="subheading"> Ubuntu Release Party (URP)</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">
                          It's a one day event that takes place twice a year since we hold it to
celebrate the release of a new version of Ubuntu based distributions of
Linux OS, those releases happen in April and October of every year. In this
event we tell FCIS students about the open source concept’s most famous
application "Linux" in general, and the new distributions specifically, we
display laptops with various distros installed to give students the chance to
try them and see the difference between them first hand, as well as offer
technical support if they want them installed on their laptops. 
                                </p>
                            </div>
                        </div>
                        <div class="line"></div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="http://lorempixel.com/250/250/cats/2" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Event Two</h4>
                                <h4 class="subheading">Workshops
</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">
                            An event in which we provide 3 workshops<br>
●Linux<br>
●Blender<br>
●Laravel<br>
The workshops’ instructors are students with knowledge vast enough to put
the applicants on the right path. The workshops are completely free, they
start at level zero and build up until participants have enough information to
follow their own path. We also follow up with them through our public
groups, and facebook fan page. 
                                </p>
                            </div>
                        </div>
                        <div class="line"></div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="http://lorempixel.com/250/250/cats/3" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Event Three</h4>
                                <h4 class="subheading">Recruitment</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">
                            An event in which we open our gate for the students to join OSC and learn
various skills. We explain the structure of OSC (as on the inside we are 4
families containing 12 committees), and then our Human Resources place
the applicants where they fit best, once in you can work everywhere and
learn from everybody. 

                                </p>
                            </div>
                        </div>
                        <div class="line"></div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="http://lorempixel.com/250/250/cats/4" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Event Four</h4>
                                <h4 class="subheading">Sala5ana</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">
                               It's a one day event where we invite our fellow students to work with us as
if they were OSC members, each committee displays their work and lets
people join in, this way people learn and have fun as the day is also
themed; we have games and activities related to each committee,
participants play to earn Mohsens (The OSC currency) and at the end of
the day the one with the most number of Mohsens gets a present. The
purpose of this day is that instead of telling them, we show them what we
do, how we do it, and what it means to be an OSCian. 
                                </p>
                            </div>
                        </div>
                       
                    </li>
                 
                </ul>
            </div>
        </div>
        <br>
        <br>
    </div>
@endsection