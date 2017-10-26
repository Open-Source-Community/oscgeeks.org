@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/aboutstyle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/tasks.css') }}">

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class=" col-xs-12 ">

                <form method="post" action="{{url("committees/$committee_id/tasks/$item->id")}}">
                    {{method_field("PUT")}}
                    {{csrf_field()}}
                    <fieldset class="scheduler-border"
                              style="background: url('black-bg.png'); background-repeat: no-repeat; background-size: cover;">
                        <legend class="scheduler-border"><input value="{{$item->name}}" type="text" name="name" class="form-control"
                                                                placeholder="Task name"></legend>

                        <div class="des">
                            <select name="user_id" class="form-control" style="width: 35%;float: right;">
                                @foreach($users as $user)
                                    @if($item->user['id'] == $user->id )
                                        <option selected value="{{$user->id}}">{{$user->name}}</option>
                                    @else
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endif
                                @endforeach
                            </select>

                        </div>

                        <div class="des">
                            <h5>Description :- </h5>
                            <p>
                                <textarea rows="10" name="description"
                                          class="form-control">{{$item->description}}</textarea>
                            </p>
                        </div>
                        <input name="oldDeadline" value="{{$item->deadline}}" type="hidden">
                        <p class="dead col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-0 col-md-6">Deadline :
                            <input name="newDeadline" type="datetime-local" class="form-control">
                        </p>
                        <button
                                class=" col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-3 col-md-3 "><b>Edit Task</b>
                        </button>
                </form>

            </div>

        </div>
    </div>

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>

    <script>
        var time = '{{$item->deadline}}';
        // $("#deadline").val(time);

    </script>
@endsection