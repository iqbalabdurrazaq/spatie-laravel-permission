<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Role::create(['name' => 'listing']); // add role in table role
        // Permission::create(['name' => 'writte post']); // add permission in table permission
        // $permission = Permission::create(['name'=>'edit post']); // add permission in table permission
        // $role = Role::findById(1);
        // $permission = Permission::findById(2);
        // $role->givePermissionTo($permission); // add idpermission and idrole(based on $role->id) in table role has permission
        // $permission->assignRole($role); // add idrole and idpermission(based on $permission->id) in table role has permission
        // $permission->removeRole($role); // remove idpermission and idrole in table role has permission
        // $role->revokePermissionTo($permission);
        return view('home');
    }
}
