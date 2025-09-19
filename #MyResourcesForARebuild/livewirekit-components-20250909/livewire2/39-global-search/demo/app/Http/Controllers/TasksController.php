<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TasksController extends Controller
{
    public string $designTemplate;

    public function __construct()
    {
        $this->designTemplate = request()->design ?? 'tailwind';
    }

    public function index()
    {
        return view('tasks.' . $this->designTemplate . '.index', ['tasks' => Task::with('project')->get()]);
    }

    public function show(Task $task)
    {
        return view('tasks.' . $this->designTemplate . '.show', compact('task'));
    }
}
