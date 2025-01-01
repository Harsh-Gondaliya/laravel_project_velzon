<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('technology')->truncate();

        $technologys = [
            'technology' => 'php',
            'status' => 'A',
        ];

        foreach ($technologys as $technology) {
            DB::table('technology')->insert($technologys);
        }
    }
}
