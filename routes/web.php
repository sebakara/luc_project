<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[App\Http\Controllers\UserController::class,'index']);
Route::post('create_account',[App\Http\Controllers\UserController::class,'createAccount'])->name('create_account');
Route::get('get_create_account',[App\Http\controllers\Usercontroller::class,'showCreateUser'])->name('get_create_account');
Route::get('activate_email/{email}',[App\Http\controllers\Usercontroller::class, 'activateEmail']);
Route::get('change_password/{email}',[App\Http\Controllers\UserController::class,'getchangeStatus'])->name('change_password');
Route::get('get_reset_pwd',[App\Http\Controllers\UserController::class,'getResetPwd'])->name('get_reset_pwd');
Route::post('post_reset_password',[App\Http\Controllers\UserController::class,'postResetPassword'])->name('post_reset_password');
Route::post('perform_reset',[App\Http\Controllers\UserController::class,'performReset'])->name('perform_reset');

Route::post('post_login',[App\Http\Controllers\UserController::class, 'postLogin'])->name('post_login');
Route::middleware(['checklogin'])->group(function(){
    Route::get('dashboard',[App\Http\Controllers\UserController::class, 'dashboard'])->name('dashboard');
    Route::get('signout', [App\Http\Controllers\UserController::class, 'signOut'])->name('signout');
    Route::post('update_profile',[App\Http\Controllers\UserController::class, 'updateProfile'])->name('update_profile');
    Route::get('add_member',[App\Http\Controllers\UserController::class,'getAddMember'])->name('add_member');
    Route::post('add_new_member',[App\Http\Controllers\UserController::class,'addNewMember'])->name('add_new_member');
    Route::get('get_re_allocate',[App\Http\Controllers\UserController::class,'reAllocate'])->name('get_re_allocate');
    Route::post('post_re_allocation',[App\Http\Controllers\UserController::class,'postReAllocation'])->name('post_re_allocation');
    Route::get('get_leadermgt',[App\Http\Controllers\UserController::class,'getLeaderMgt'])->name('get_leadermgt');
    Route::post('save_leader',[App\Http\Controllers\UserController::class,'saveLeader'])->name('save_leader');
    Route::get('list_of_citizen',[App\Http\Controllers\UserController::class, 'getCitizen'])->name('list_of_citizen');
    Route::get('change_status/{family_id}',[App\Http\Controllers\UserController::class, 'changeStatus'])->name('change_status');
    Route::post('post_change_status',[App\Http\Controllers\UserController::class,'postChangeStatus'])->name('post_change_status');
    Route::get('create_citizen',[App\Http\Controllers\Usercontroller::class,'createCitizen'])->name('create_citizen');
    Route::post('post_create_citizen',[App\Http\Controllers\Usercontroller::class, 'postCreateCitizen'])->name('post_create_citizen');
});

Route::post('get_district_prov',[App\Http\Controllers\UserController::class,'getDistricts'])->name('get_district_prov');
Route::post('get_sector_dist',[App\Http\Controllers\UserController::class,'getSectors'])->name('get_sector_dist');
Route::post('get_cell_sector',[App\Http\Controllers\UserController::class,'getCells'])->name('get_cell_sector');
Route::post('get_village_sector',[App\Http\Controllers\UserController::class,'getVillages'])->name('get_village_sector');
// get_village_sector
