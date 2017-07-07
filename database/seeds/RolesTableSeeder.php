<?php

use App\Role;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $owner = new Role();
        $owner->name            = 'owner';
        $owner->display_name    = 'Product Owner';
        // Allow a user to ...
        $owner->description     = 'Product owner is the owner of the given objects';
        $owner->save();


       	$owner = new Role();
        $owner->name 			= 'admin';
        $owner->display_name 	= 'Admin User';
        // Allow a user to ...
        $owner->description 	= 'Product owner is the owner of the given objects';
        $owner->save();


    }
}
