@extends('layouts.app2')

@section('CSS')

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/aboutstyle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/tasks.css') }}">

@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class=" col-xs-12 ">
                <button id="btn_add" type="button" class="btn btn-primary btn-lg">Add Task</button>

                <form id="task" class="form-horizontal" method="post"
                      action="{{url("committees/$committee_id/tasks")}}">
                    {{csrf_field()}}

                    <h4 id="h4_nm">Task's Name :-</h4>
                    <input type="text" id="h_task" placeholder="Enter task name">

                    <div id="dr_dn" class="dropdown">
                        <h5 id="h_des"><strong>Members</strong></h5>
                        <select name="user_id" class="form-control">
                            @foreach($users as $user)
                                <option {{$user->id}}>{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div id="desc">
                        <h5 id="h_des"><strong>Description</strong></h5>
                        <textarea name="description" style="width:95%; margin-left:5px; height:200px;"></textarea>
                    </div>
                    <br>

                    <div id="d_div" class="row">
                        <p class="col-md-3" style="margin-left:8px; margin-top:17px;">Deadline:</p>
                        <input name="deadline" class="col-md-3" type="date"
                               style="width:60%; margin-left:8px; margin-top:17px; border-style: none;">
                    </div>

                    <div id="bnts">

                        <button id="btn-edit" type="button" class="btn btn-primary btn-lg"
                                style="background-color: #4d4d4d; border-style: none; height:40px;">Edit
                        </button>
                        <button id="btn-del" type="button" class="btn btn-primary btn-lg"
                                style="background-color: #4d4d4d; border-style:none; height:40px;">Delete
                        </button>
                        <button id="btn-del" type="button" class="btn btn-primary btn-lg"
                                style="background-color: #4d4d4d; border-style:none; height:40px;">Add
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>

@endsection