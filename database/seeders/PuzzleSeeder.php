<?php

namespace Database\Seeders;

use App\Models\Puzzle;
use Illuminate\Database\Seeder;

class PuzzleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Puzzle::factory()
            ->count(50)
            ->create();
    }
}
