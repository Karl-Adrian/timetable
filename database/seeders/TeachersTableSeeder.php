<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\teacher;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com'
        ]);

        Teacher::create([
            'name' => 'Jane Smith',
            'email' => 'janesmith@example.com'
        ]);

        Teacher::create([
            'name' => 'Michael Brown',
            'email' => 'michaelbrown@example.com'
        ]);
    }
}
