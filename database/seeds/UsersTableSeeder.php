<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Sinan Eldem',
                'email' => 'sinan@sinaneldem.com.tr',
                'password' => Hash::make('secret')
            ],
            [
                'name' => 'Sanctum Tester',
                'email' => 'info@laravel.gen.tr',
                'password' => Hash::make('secret')
            ],
        ];

        foreach ($users as $user) {
            User::insert($user);
        }
    }
}
