<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PropertyType;
use Illuminate\Validation\Rules\Unique;

class PropertyTypeController extends Controller
{
  public function AllType(){

    $types = PropertyType::latest()->get();
    return view('Backend.type.all_type', compact('types'));

  } //End Method

  public function AddType(){
   return view('Backend.type.add_type');
  } // End Method


  public function StoreType(Request $request){
  $request->validate([
    'type_name' => 'required|Unique:property_types|max:200',
    'type_name' => 'required'
  ]);
   PropertyType::insert([
    'type_name'=>$request->type_name,
    'type_icon'=>$request->type_icon,

   ]);
   $notification = array(
    'message' => 'Property Type created successfully',
    'alert type' => 'success'  );
    return redirect() ->route('all.type')->with($notification);


  } // End Method
}
