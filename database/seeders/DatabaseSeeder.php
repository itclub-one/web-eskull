<?php

namespace Database\Seeders;

use App\Models\Dokumentasi;
use App\Models\Eskul;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eskul::factory()->count(10)->create();
        Dokumentasi::factory()->count(5)->create();
    }
}
