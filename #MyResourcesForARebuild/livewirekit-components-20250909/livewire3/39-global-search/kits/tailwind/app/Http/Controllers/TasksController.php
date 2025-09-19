<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\View\View;

class TasksController extends Controller
{
    public string $designTemplate;

    public function __construct()
    {
        $this->designTemplate = request()->design ?? 'tailwind';
    }

    public function index(): View
    {
        return view('tasks.' . $this->designTemplate . '.index', ['tasks' => Task::with('project')->get()]);
    }

    public function show(Task $task): View
    {
        return view('tasks.' . $this->designTemplate . '.show', compact('task'));
    }
}
