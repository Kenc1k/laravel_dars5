<?php

namespace Database\Seeders;

use App\Models\Yunalish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YunalishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Yunalish::factory(20)->create();
    }
}
