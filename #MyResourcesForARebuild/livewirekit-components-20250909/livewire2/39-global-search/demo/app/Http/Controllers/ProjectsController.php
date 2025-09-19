<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectsController extends Controller
{
    public string $designTemplate;

    public function __construct()
    {
        $this->designTemplate = request()->design ?? 'tailwind';
    }

    public function index()
    {
        return view('projects.' . $this->designTemplate . '.index', ['projects' => Project::with('user')->get()]);
    }

    public function show(Project $project)
    {
        return view('projects.' . $this->designTemplate . '.show', compact('project'));
    }
}
