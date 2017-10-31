@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/aboutstyle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/tasks.css') }}">

@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class=" col-xs-12 ">
                @if(auth()->check())
                    @if(auth()->user()->position_id ==4)
                        @if(isset($committee_id))
                            <a href="{{url("committees/$committee_id/tasks/create")}}">
                                <button class="btn btn-danger" style="margin-left: 55px">Add task</button>
                            </a>
                        @endif
                    @endif
                @endif


                <div class="row">
                    @foreach($items as $item)
                        <div class=" col-xs-12 col-md-6 "
                             style="margin: 30px 0px">


                            <fieldset class="scheduler-border"
                                      style="background: url('black-bg.png'); background-repeat: no-repeat; background-size: cover;">

                                <legend class="scheduler-border">{{$item->name}}</legend>
                                @if(auth()->check())
                                    @if(auth()->user()->position_id ==5)

                                        @if(isset($member_id))
                                            @if($item->status ==1)
                                                <a href="{{url("members/$member_id/tasks/$item->id/edit")}}">
                                                    <button class="btn btn-danger" style="margin-left: 55px"> progress
                                                    </button>
                                                </a>
                                            @elseif($item->status == 2)
                                                <label class="btn btn-warning"> in progress</label>
                                            @elseif($item->status == 3)
                                                <label class="btn btn-success"> done</label>
                                            @endif
                                        @endif
                                    @endif
                                @endif
                                <div class="des">
                                    <h5 style="color: #fff">Member : {{$item->user['name']}}</h5>

                                </div>

                                <div class="des">

                                    <h5>Description :- </h5>

                                    <p style="word-break: break-word"><b>
                                            {{$item->description}}
                                        </b>
                                    </p>

                                </div>
                                <div class="col-xs-12 text-center">
                                    <div class=" col-xs-3">

                                    </div>
                                    <h4 style="color: #fff; ">
                                        <u>
                                            <strong>
                                                Deadline: {{$item->deadline}}
                                            </strong>
                                        </u>
                                    </h4>
                                    </p>
                                </div>
                                @if(auth()->check())
                                    @if(auth()->user()->position_id ==4)
                                        @if($item->status == 1)
                                            <label class="btn btn-primary"> open</label>
                                        @elseif($item->status == 2)
                                            <label class="btn btn-warning"> in progress</label>
                                        @elseif($item->status == 3)
                                            <label class="btn btn-success"> done</label>
                                        @endif
                                        <div class="col-xs-12">
                                            <div class="col-xs-6">
                                                <a href="{{url("committees/$committee_id/tasks/$item->id/edit")}}"
                                                   class=" text-center pull-left"><b>
                                                        Edit Task</b>
                                                </a>
                                            </div>
                                            <div class="col-xs-6">
                                                <form method="post"
                                                      action="{{url("committees/$committee_id/tasks/$item->id")}}">
                                                    {{csrf_field()}}
                                                    {{ method_field('DELETE') }}
                                                    <button class="  pull-right"><b>
                                                            Delete Task</b>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            </fieldset>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>

@endsection


