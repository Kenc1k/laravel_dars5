<?php

namespace Database\Seeders;

use App\Models\Fakulty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FakultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fakulty::factory(20)->create();
    }
}
