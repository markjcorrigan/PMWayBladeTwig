<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Contracts\View\View;

class ProjectsController extends Controller
{
    public string $designTemplate;

    public function __construct()
    {
        $this->designTemplate = request()->design ?? 'tailwind';
    }

    public function index(): View
    {
        return view('projects.' . $this->designTemplate . '.index', ['projects' => Project::with('user')->get()]);
    }

    public function show(Project $project): View
    {
        return view('projects.' . $this->designTemplate . '.show', compact('project'));
    }
}
