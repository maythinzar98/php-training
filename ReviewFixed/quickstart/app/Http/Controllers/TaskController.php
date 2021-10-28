<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function displayTasks()
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();
        return view('tasks', [
        'tasks' => $tasks
        ]);
    }

    public function addTasks(Request $request)
    {
        $task = new Task;
        $task->name = $request->name;
        $task->save();
    
        return redirect('/');
    }

    public function deleteTasks($id)
    {
        Task::findOrFail($id)->delete();

        return redirect('/');
    }
}
