<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    public function run()
    {
        Account::create([
            'account_id' => '1',
            'role_id' => 1,
            'first_name' => 'Luis',
            'middle_name' => 'Marshall',
            'last_name' => 'Whitaker',
            'gender_id' => 1,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('asdasd123'),
            'display_picture_link' => "images/pic1.jpeg",
        ]);
        Account::create([
            'account_id' => '2',
            'role_id' => 2,
            'first_name' => 'Sara ',
            'middle_name' => 'Judy',
            'last_name' => 'Armitage',
            'gender_id' => 2,
            'email' => 'user@gmail.com',
            'password' => Hash::make('asdasd123'),
            'display_picture_link' => "images/pic2.jpeg",
        ]);
    }
}
