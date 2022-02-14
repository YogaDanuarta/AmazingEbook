<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create([
            'role_id' => 1,
            'role_desc' => 'Admin',
        ]);

        Role::create([
            'role_id' => 2,
            'role_desc' => 'User',
        ]);
    }
}
