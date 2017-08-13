<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Permission;
use App\Http\Requests;

class HomeController extends Controller
{
    //
    public function index()
    {
		return "hello";    	# code...
    }

    public function attachUserRole($userid ,$role){
    	$user = User::find($userid);
    	$roleid = Role::where("name",$role)->first();
    	$user->roles()->attach($roleid);

    	return $user;
    }

    public function getUserRole($userid){

    	return User::find($userid)->roles;

    }


    public function attachPermissions(Request $request){
    	$parameters= $request->only('permission','role');
    	$permissionParam= $parameters['permission'];
    	$roleParam = $parameters['role'];
    	$role = Role::where("name",$roleParam)->first();
    	$permission = Permission::where("name",$permissionParam)->first();
    	$role->attachPermission($permission);

    	return $this->response->created();
    }

    public function getPermission($roleParam){
      
        $role = Role::where("name",$roleParam)->first();

        return $role->perms;
    }
}
