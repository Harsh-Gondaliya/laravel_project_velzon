<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Designation;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $designations = [
            ['designation' => 'Software Engineer', 'status' => 'A'],
            ['designation' => 'Senior Software Engineer', 'status' => 'A'],
        ];

        foreach ($designations as $designation) {
            Designation::create($designation);
        }
    }
}
