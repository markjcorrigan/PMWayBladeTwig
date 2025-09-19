<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    public string $designTemplate;

    public function __construct()
    {
        $this->designTemplate = request()->design ?? 'tailwind';
    }

    public function index()
    {
        return view('users.' . $this->designTemplate . '.index', ['users' => User::all()]);
    }

    public function show(User $user)
    {
        return view('users.' . $this->designTemplate . '.show', compact('user'));
    }
}
