<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        $tasks=\App\Task::all();
        // $tasks=\App\Task::incomlete();
        return view('tasks.show',compact('tasks'));
    }
    public function show($id){

        $task=\App\Task::find($id);
        return view('tasks.tasks',compact('task'));
    }
}
