@extends('layouts.app2')

@section('CSS')

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/aboutstyle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/tasks.css') }}">

@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class=" col-xs-push-1 col-xs-10 col-md-6 col-md-push-3 col-lg-6 " style="margin: 30px 0px">

                <form method="post" action="{{url("committees/$committee_id/tasks")}}">
                    {{csrf_field()}}
                    <fieldset class="scheduler-border"
                              style="background: url('black-bg.png'); background-repeat: no-repeat; background-size: cover;">
                        <legend class="scheduler-border"><input type="text" name="name" class="form-control"
                                                                placeholder="Task name"></legend>

                        <div class="des">
                            <select name="user_id" class="form-control" style="width: 35%;float: right;">
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="des">
                            <h5>Description :- </h5>
                            <p>
                                <textarea rows="10" name="description" class="form-control"></textarea>
                            </p>
                        </div>
                        <p class="dead col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-0 col-md-6">Deadline :
                            <input name="newDeadline" type="datetime-local" class="form-control">
                        </p>
                        <button
                                class=" col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-3 col-md-3 "><b>Add Task</b>
                        </button>
                </form>

            </div>

        </div>
    </div>

@endsection