<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAdminController extends Controller
{
    
    public function index(Request $request){

        return view("content.roles_admin.index");
    }

    public function indexRoles(Request $request){
      
        $roles = $this->getAllRoles();
        return view("content.roles_admin.roles.index",compact("roles"));
    }

    public function storeRoles(Request $request){

        $role = Role::create($request->all());
        $roles = $this->getAllRoles();
        $response = [
            'role'=>$role,
            'view'=> view("content.roles_admin.roles.partials.ajax.index",compact('roles'))->render()
        ];
        return response()->json($response);
    }

    private function getAllRoles(){

        return   $roles = Role::paginate(5);
    }
}
