<?php

namespace Database\Seeders;

use App\Models\Talaba;
use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TalabaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Talaba::factory(20)->create();
    }
}
