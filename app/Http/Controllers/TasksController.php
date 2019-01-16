<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function getTasks(){
        $tasks = Task::all();
        return response()->json($tasks);
    }


    public function addTask(Request $request){
        $task = $request->input('title');
        $status = $request->input('status');
        $date = $request->input('date');

        $Task = new Task();
        $Task->title = $task;
        $Task->status = $status;
        $Task->date = $date;

        $Task->save();

        return $Task;
    }

    public function deleteTask(Request $request){
        $id = $request->input('id');
        $task = Task::find($id);
        $task->delete();

        $response = array('id' => $id);
        return $response;
    }

    public function getOneTask(Request $request){
        $id = $request->input('id');
        $task = Task::find($id);
        return response()->json($task);
    }
}
