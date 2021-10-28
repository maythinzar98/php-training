<?php
    use Illuminate\Support\Facades\Route;
    use App\Models\Task;
    use Illuminate\Http\Request;
    use App\Http\Controllers\TaskController;

    Route::get("/",[TaskController::class,'displayTasks']);
    Route::post("/task",[TaskController::class,'addTasks']);
    Route::delete("/task/{id}",[TaskController::class,'deleteTasks']);
