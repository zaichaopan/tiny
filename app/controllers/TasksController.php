<?php

namespace App\Controllers;

use App\Models\Task;

class TasksController
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }
}
