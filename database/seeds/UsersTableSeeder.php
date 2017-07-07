<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        \App\User::create([
        'name' => 'gamers',
        'email' => 'hello',
        'password' => Hash::make('test123')
        ]);

        \App\User::create([
        'name' => 'powers',
        'email' => 'dfser',
        'password' => Hash::make('aaaaw')
        ]);
    }
}
