<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            //superadmin
            [
                'name' =>  'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],

            //registration
            [
                'name' =>  'registration',
                'email' => 'registration@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'registration',
            ],

            //legal
            [
                'name' =>  'legal',
                'email' => 'legal@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'legal',
            ],

            //fad
            [
                'name' =>  'fad',
                'email' => 'fad@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'fad',
            ]
        ]);
    }
}
