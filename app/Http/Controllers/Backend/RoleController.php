<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller; 
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function AllPermission(){

        $permission =Permission::all(); 
        return view('Backend.pages.permission.all_permission',compact('permissions'));
    }
}
