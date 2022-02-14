<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([RoleSeeder::class]);
        $this->call([GenderSeeder::class]);
        $this->call([EBookSeeder::class]);
        $this->call([AccountSeeder::class]);
        $this->call([OrderSeeder::class]);
    }
}
