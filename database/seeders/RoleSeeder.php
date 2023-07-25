<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        role::truncate();
        role::create([
            'role' => 'root',
        ]);
        role::create([
            'role' => 'admin',
        ]);
    }
}
