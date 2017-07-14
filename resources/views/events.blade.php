@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/events.css') }}">
@endsection

@section('dropdownlist')

    @foreach($committees_data as $committee)
                               
        <li data-submenu-id="{{ $committee->title }}">
            <a href="#">{{ $committee->title }} Committee</a>
            <div id="{{ $committee->title }}" class="popover">
                <h3 class="popover-title">{{ $committee->title }} Committee</h3>
                <div class="popover-content">
                    <ul>
                        <li>{{ $committee->description }}
                        </li>
                        <img src="{{ $committee->imageurl }}">
                    </ul>
                </div>
            </div>
        </li>

    @endforeach

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
                    @for ($i = 0; $i < count($user_data); $i++)
                        @if($i%2==0)
                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="{{ $user_data[$i]->imageurl }}" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="subheading">{{ $user_data[$i]->title }}</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">
                                            {{ $user_data[$i]->description }}
                                        </p>
                                    </div>
                                </div>
                                @if ($i <= count($user_data)-2)
                                    <div class="line"></div>
                                @endif
                            </li>
                        @endif
                        @if($i%2==1)
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="{{ $user_data[$i]->imageurl }}" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="subheading">{{ $user_data[$i]->title }}</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">
                                            {{ $user_data[$i]->description }}
                                        </p>
                                    </div>
                                </div>
                                @if ($i <= count($user_data)-2)
                                    <div class="line"></div>
                                @endif
                            </li>
                        @endif
                    @endfor
                </ul>
            </div>
        </div>
        <br>
        <br>
    </div>
@endsection