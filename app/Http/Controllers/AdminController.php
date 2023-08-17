<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
     return view('admin.index');
     }  // End Method
     public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    } // End method

    public function AdminLogin()
    {
        return view('admin.admin_login');
    }  //End method

    public function AdminProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = user::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
  
        if ($request->file('photo')){
          $file= $request->file('photo');
          $filename=date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('upload/admin_images'),$filename);
          $data['photo'] = $filename;
        }
          $data->save();
          return redirect() ->back();

    }
}