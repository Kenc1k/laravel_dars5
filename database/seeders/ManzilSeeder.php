<?php

namespace Database\Seeders;

use App\Models\Manzil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManzilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Manzil::factory(20)->create();
    }
}
