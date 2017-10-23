<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Http\Request;

class CommitteeTasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($committee_id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($committee_id)
    {
        $users = User::all();
        return view('managment.tasks.create', compact('committee_id','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $committee_id)
    {
        $request['committee_id'] = $committee_id;
        Task::create($request->all());
        return redirect("committees/$committee_id/tasks");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($committee_id, $task_id)
    {
        $users = User::all();
        return view('managment.tasks.edit', compact('committee_id', 'task_id','users'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $committee_id, $task_id)
    {
        $item = Task::find($task_id);
        $item->update($request->all());
        return redirect("committees/$committee_id/tasks");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($committee_id, $task_id)
    {
        //
    }
}
