<?php

    namespace App\Contracts\Dao;

    use Illuminate\Http\Request;

    interface TaskInterface{

        public function getTaskList();

        public function addTasks($request);
        
        public function deleteTasks($id);
    }