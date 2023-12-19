<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Admin extends Seeder
{
    /**
     * @return void
     */

    public function run()
    {
        $user = [
            [
                'username' => "User11",
                'email' => 'user11111@gmail.com',
                'whatsapp' => '087865683684',
                'email_verified_at' => now(),
                'name' => 'User Juan',
                'role' => 'user',
                'password' => bcrypt('123456'), // password
                'remember_token' => Str::random(10),
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
        //
    }
}
