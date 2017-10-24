@extends('layouts.app2')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/aboutstyle.css') }}">

@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class=" col-xs-12 ">
                <a href="{{url("committees/$committee_id/tasks/create")}}">

                    <button class="btn btn-primary">Add task</button>

                    <table class="table table-bordered ">
                        <thead>
                        <tr>

                            <th>Task ID</th>
                            <th>Name</th>
                            <th>Desc</th>
                            <th>User</th>
                            <th>deadline</th>


                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($items as $item)

                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->user['name']}}</td>
                                <td>{{$item->deadline}}</td>


                                <td>
                                    <div class="col-sm-12">
                                        <a href="{{url("committees/$committee_id/tasks/$item->id/edit")}}">
                                            <button class="btn btn-warning label-sm">تعديل</button>
                                        </a>
                                    </div>
                                    <div class="col-sm-12">
                                        <form onsubmit='return ConfirmDelete()' method="post"
                                              action="{{url(" committees/$committee_id/tasks/$item->id")}}">
                                            {{ method_field('DELETE') }}
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-danger label-sm">حذف</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </a>
            </div>

        </div>
    </div>

@endsection


