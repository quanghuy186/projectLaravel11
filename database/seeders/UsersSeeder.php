<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "user";
        $user->email = "user@gmail.com";
        $user->password = "123456";
        $user->role_id = 1;
        $user->save();

        $user = new User();
        $user->name = "admin";
        $user->email = "admin@gmail.com";
        $user->password = "123456";
        $user->role_id = 2;
        $user->save();

        $user = new User();
        $user->name = "guest";
        $user->email = "guest@gmail.com";
        $user->password = "123456";
        $user->role_id = 3;
        $user->save();
    }
}