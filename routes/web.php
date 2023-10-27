<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminControllerC;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Backend\PropertyTypeController;
use App\Http\Controllers\Backend\RoleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin Group Middleware
Route::middleware(['auth' , 'role:admin'])->group(function (){
    Route::get('/admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class,'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile/update', [AdminController::class, 'AdminProfileUpdate'])->name('admin.profile.update');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
}); // end  Group Admin Middleware


Route::middleware(['auth' , 'role:agent'])->group(function () 
{
    Route::get('/agent/dashboard',[AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
});
 // End Group Agent Middleware.

 Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

 // Admin Group Middleware
Route::middleware(['auth' , 'role:admin'])->group(function (){
 // Property Type Route  
Route::controller(PropertyTypeController::class)->group(function()
    {
        Route::get('/all/type','AllType')->name('all.type');
        Route::get('/add/type','AddType')->name('add.type');
        Route::post('/store/type','StoreType')->name('store.type');
        Route::get('/edit/type/{id}','EditType')->name('edit.type');
        Route::post('/update/type','UpdateType')->name('update.type');
        Route::get('/delete/type/{id}','DeleteType')->name('delete.type');
    });// end  Group Admin Middleware

// Amenities Group

Route::controller(PropertyTypeController::class)->group(function()
    {
        Route::get('/all/amenitie','AllAmenitie')->name('all.amenitie');
        Route::get('/add/amenitie','AddAmenitie')->name('add.amenitie');
        Route::post('/store/amenitie','StoreAmenitie')->name('store.aminitie');
        Route::get('/edit/amenitie/{id}','EditAmenitie')->name('edit.amenitie');
        Route::post('/update/aminitie','UpdateAminitie')->name('update.aminitie');
        Route::get('/delete/amenitie/{id}','DeleteAmenitie')->name('delete.aminitie');
    });// end  Group Amenities

    // Permission All Route  
Route::controller(RoleController::class)->group(function()
{
    Route::get('/all/Permission','AllPermission')->name('all.permission');
    Route::get('/add/type','AddType')->name('add.type');
    Route::post('/store/type','StoreType')->name('store.type');
    Route::get('/edit/type/{id}','EditType')->name('edit.type');
    Route::post('/update/type','UpdateType')->name('update.type');
    Route::get('/delete/type/{id}','DeleteType')->name('delete.type');
});// end  Group Admin Middleware

}); 






