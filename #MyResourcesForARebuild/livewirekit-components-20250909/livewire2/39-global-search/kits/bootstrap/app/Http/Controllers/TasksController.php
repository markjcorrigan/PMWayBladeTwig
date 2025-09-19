<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {
        return view('tasks.index', ['tasks' => Task::with('project')->get()]);
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }
}
