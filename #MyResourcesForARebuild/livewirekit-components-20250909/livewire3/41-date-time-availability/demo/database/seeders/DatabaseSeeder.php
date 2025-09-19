<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Appointment;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 0; $i < 3; $i++) {
            $date = Carbon::createFromTime(rand(8, 20), 0, 0);

            Appointment::create([
                'start_time' => $date,
            ]);
        }

        for ($i = 0; $i < 3; $i++) {
            $date = Carbon::createFromTime(rand(8, 20), 0, 0)->addDay();

            Appointment::create([
                'start_time' => $date,
            ]);
        }

        for ($i = 0; $i < 3; $i++) {
            $date = Carbon::createFromTime(rand(8, 20), 0, 0)->addDays(2);

            Appointment::create([
                'start_time' => $date,
            ]);
        }

        for ($i = 0; $i < 3; $i++) {
            $date = Carbon::createFromTime(rand(8, 20), 0, 0)->addDays(3);

            Appointment::create([
                'start_time' => $date,
            ]);
        }

        for ($i = 0; $i < 3; $i++) {
            $date = Carbon::createFromTime(rand(8, 20), 0, 0)->addDays(4);

            Appointment::create([
                'start_time' => $date,
            ]);
        }

        for ($i = 0; $i < 3; $i++) {
            $date = Carbon::createFromTime(rand(8, 20), 0, 0)->addDays(5);

            Appointment::create([
                'start_time' => $date,
            ]);
        }
    }
}
