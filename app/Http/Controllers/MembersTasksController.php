<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class MembersTasksController extends Controller
{
    public function index($member_id)
    {
        $items = Task::where('user_id', $member_id)->get();
        return view('managment.tasks.index', compact('items', 'member_id'));
    }

    public function edit($member_id, $task_id)
    {
        $item = Task::find($task_id);
        if ($item->status == 1) {
            $item->status = 2;
        } elseif ($item->status == 2) {
            $item->status = 3;
        } elseif ($item->status == 3) {
            $item->status = 1;
        }
        $item->save();
        return redirect("members/$member_id/tasks");
    }
}
