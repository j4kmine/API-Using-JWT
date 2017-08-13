<?php
use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;



class RolesTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

        $owner= new Role();
        $owner->name="Product Owner";
        $owner->display_name="Product Owner";
        $owner->description="the owner of given project";
        $owner->save();

        $admin= new Role();
        $admin->name="Admin";
        $admin->display_name="Admin user";
        $admin->description="Adminsitrate project";
        $admin->save();
    }
}
