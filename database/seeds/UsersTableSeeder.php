<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        \App\User::create([
        	'name'=>'bayu',
        	'email'=>'bayu@katadata.co.id',        	
        	'password'=> Hash::make('test123')

        ]);
    }
}
