<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function getPermissions(){
        $users=User::all();
        return view('permissions.user_permissions',compact('users'));
    }

    public function assignRoles(Request $request){

        $user=User::where('employee_id',$request->employee_id)->first();
        $user->role()->detach();
        if($request['role_teller']){
            $user->role()->attach(Role::where('name','teller')->first());
        }
        if($request['role_admin']){
            $user->role()->attach(Role::where('name','admin')->first());
        }
        if($request['role_accounts']){
            $user->role()->attach(Role::where('name','accounts')->first());
        }
        return redirect()->route('permissions')->with('message','Roles successfully assigned');
    }
}
