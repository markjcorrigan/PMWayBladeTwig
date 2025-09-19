<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;

class UsersController extends Controller
{
    public string $designTemplate;

    public function __construct()
    {
        $this->designTemplate = request()->design ?? 'tailwind';
    }

    public function index(): View
    {
        return view('users.' . $this->designTemplate . '.index', ['users' => User::all()]);
    }

    public function show(User $user): View
    {
        return view('users.' . $this->designTemplate . '.show', compact('user'));
    }
}
