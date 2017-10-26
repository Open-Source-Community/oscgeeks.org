@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/aboutstyle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/tasks.css') }}">

@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class=" col-xs-12 ">
                <a href="{{url("committees/$committee_id/tasks/create")}}">
                    <button class="btn btn-danger" style="margin-left: 55px">Add task</button>
                </a>
                @foreach($items as $item)
                    <div class="row">
                        <div class=" col-xs-push-1 col-xs-10 col-md-6 col-md-push-3 col-lg-6 "
                             style="margin: 30px 0px">

                            <fieldset class="scheduler-border"
                                      style="background: url('black-bg.png'); background-repeat: no-repeat; background-size: cover;">
                                <legend class="scheduler-border">{{$item->name}}</legend>

                                <div class="des">
                                    <h4 style="color: #fff">Members : {{$item->user['name']}}</h4>

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
                                <div class="col-xs-12">
                                    <div class="col-xs-6">
                                        <a href="{{url("committees/$committee_id/tasks/$item->id/edit")}}"
                                           class=" text-center pull-left"><b>
                                                Edit Task</b>
                                        </a>
                                    </div>
                                    <div class="col-xs-6">
                                        <form method="post" action="{{url("committees/$committee_id/tasks/$item->id")}}">
                                            {{csrf_field()}}
                                            {{ method_field('DELETE') }}
                                            <button class="  pull-right"><b>
                                                    Delete Task</b>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                    </div>
                @endforeach

            </div>

        </div>
    </div>

@endsection


