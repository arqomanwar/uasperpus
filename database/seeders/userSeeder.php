<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
                    [
                    'name' => 'arqom',
                    'email' => 'arqom@gmail.com',
                    'password' => bcrypt('arqom'),
                    ],
                    [
                    'name' => 'user',
                    'email' => 'user@example.com',
                    'password' => bcrypt('123456'),
                    ],
    ];
        foreach ($user as $key => $value) {
            User::create($value);
         }
    }

}
