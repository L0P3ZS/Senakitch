<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'Ronaldo',
            'email' => 'ronaldo@gmail.com',
            'password' => 1234,
        ]);

        User::create([
            'username' => 'Sebastian paz',
            'email' => 'sebastian@gmail.com',
            'password' => 1234,
        ]);

        User::create([
            'username' => 'German David',
            'email' => 'german@gmail.com',
            'password' => 1234,
        ]);

        User::create([
            'username' => 'Juan David',
            'email' => 'juan@gmail.com',
            'password' => 1234,
        ]);

        User::create([
            'username' => 'Sebastian ',
            'email' => 'sebas@gmail.com',
            'password' => 1234,
        ]);
    }
}
