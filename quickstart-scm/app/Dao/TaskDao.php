<?php
    namespace App\Dao;

    use App\Models\Task;
    use App\Contracts\Dao\TaskInterface;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class TaskDao implements TaskInterface
    {
        public function getTaskList()
        {
            $tasks = Task::orderBy('created_at', 'asc')->get();
            return $tasks;
        }

        public function addTasks($request) 
        {
            $task = new Task;
            $task->name = $request['name'];
            $task->save();
            return $task;
        }

        public function deleteTasks($id) 
        {
            $del = Task::findOrFail($id)->delete();
            return $del;
        }
    }