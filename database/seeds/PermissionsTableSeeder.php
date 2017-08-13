<?php
use App\Permission;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $create= new Permission();
        $create->name="create-invoice";
        $create->display_name="Create New Invoice";
        $create->description="create invoice";
        $create->save();

        $edit= new Permission();
        $edit->name="edit-invoice";
        $edit->display_name="Edit New Invoice";
        $edit->description="edit invoice";
        $edit->save();

    }
}
