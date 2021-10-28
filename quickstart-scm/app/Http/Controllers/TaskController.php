<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateRequest;
use App\Contracts\Dao\TaskInterface;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    private $taskInterface;

    public function __construct(TaskInterface $taskInterface)
    {
        $this->TaskInterface = $taskInterface;
    }
    /**
     * Show the Task.
     * @return View added tasks
     */
    public function displayTasks() 
    {
        $tasks = $this->TaskInterface->getTaskList();
        return view('tasks', [
            'tasks' => $tasks
            ]);
    }
    
    /**
     * To add new task
     * Validate $request with ValidateRequest
     * @param Request $request to add new task
     * @return view task list
     */
    public function addTasks(ValidateRequest $request) 
    {
        // validation for request values
       $validated = $request->validated();
       $addTask = $this->TaskInterface->addTasks($validated);
       return redirect('/');
    }

    /**
     * To delete unwanted task
     * @param String $id to delete a task
     * @return view task list
     */
    public function deleteTasks($id) 
    {
        $deleteTask = $this->TaskInterface->deleteTasks($id);
        return redirect('/');
    }

}