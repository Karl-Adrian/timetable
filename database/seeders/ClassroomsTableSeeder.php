<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\classroom;

class ClassroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        classroom::create(['name' => 'Room A']);
        classroom::create(['name' => 'Room B']);
        classroom::create(['name' => 'Room C']);
    }
}
