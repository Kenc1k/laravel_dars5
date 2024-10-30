<?php

namespace Database\Seeders;

use App\Models\Gurux;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gurux::factory(20)->create();
    }
}
