<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Calon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();
         Calon::factory(10)->create();
        \App\Models\User::factory()->create([
           
            'name' => 'administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'level' => 'admin',
        ]);
        \App\Models\User::factory()->create([
           
            'name' => 'Sekretaris',
            'email' => 'sekretaris@sekretaris.com',
            'password' => bcrypt('sekretaris'),
            'level' => 'sekretaris',
        ]);
    }
}
