@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/aboutstyle.css') }}">

@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class=" col-xs-12 ">

                <form class="form-horizontal" method="post"
                      action="{{url("committees/$committee_id/tasks/$item->id")}}">
                    {{method_field("PUT")}}
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Members:</label>
                        <div class="col-sm-8">
                            <select required class="form-control" name="user_id">
                                @foreach($users as $user)
                                    @if($item->id == $user->id)
                                        <option selected value="{{$user->id}}">{{$user->name}}</option>
                                    @else
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Name:</label>
                        <div class="col-sm-8">
                            <input required value="{{$item->name}}" type="text" class="form-control" id="name"
                                   placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Description:</label>
                        <div class="col-sm-8">
                            <textarea required name="description" class="form-control">{{$item->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Deadline:</label>
                        <div class="col-sm-8">
                            <input name="oldDeadline" type="hidden" value="{{$item->deadline}}">
                            <input id="deadline" name="newDeadline" type="datetime-local"
                                   class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
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