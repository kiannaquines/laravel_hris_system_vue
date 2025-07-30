<?php

namespace Database\Seeders;

use App\Models\Positions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Others
        Positions::create(['position' => 'Contract of Service']);
        Positions::create(['position' => 'Job Order']);
        
        // Instructor
        Positions::create(['position' => 'Instructor I']);
        Positions::create(['position' => 'Instructor II']);
        Positions::create(['position' => 'Instructor III']);
        Positions::create(['position' => 'Instructor IV']);
        Positions::create(['position' => 'Instructor V']);
        
        // Professor
        Positions::create(['position' => 'Professor I']);
        Positions::create(['position' => 'Professor II']);
        Positions::create(['position' => 'Professor III']);
        Positions::create(['position' => 'Professor IV']);
        Positions::create(['position' => 'Professor V']);
    }
}
