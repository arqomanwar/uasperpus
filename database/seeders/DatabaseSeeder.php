<?php

namespace Database\Seeders;

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
        $this->call(userSeeder::class);
        $this->call(bukuSeeder::class);
        $this->call(mahasiswaSeeder::class);
        $this->call(fakultasSeeder::class);
        $this->call(prodiSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
