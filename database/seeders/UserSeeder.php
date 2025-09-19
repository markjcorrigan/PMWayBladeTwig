<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Jo',
            'email' => 'jo@jo.co.za',
            'password' => Hash::make('password123'), // replace 'password' with your desired password
        ]);
    }
}
