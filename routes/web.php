<?php

use App\Http\Controllers\Admin\ManagePermissionsController;
use App\Http\Controllers\Admin\ManageRolesController;
use App\Http\Controllers\Admin\ManageTenantsController;
use App\Http\Controllers\Admin\ManageUsersController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommonControllers\DashboardController;
use App\Http\Controllers\CommonControllers\EditProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Tenant\ManageApplicationController;
use App\Http\Controllers\Tenant\TenantScholarshipController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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
// Route::view('/','home');
Route::GET('/', [HomeController::class,'index'])->name('home');


require base_path('/routes/web/all.php');


Route::get('/clear-all/{id}', function($id) {
    if ($id == 'admin1234') {
        $exitCode = Artisan::call('cache:clear');
        $exitCode = Artisan::call('config:clear');
        $exitCode = Artisan::call('view:clear');
        $exitCode = Artisan::call('route:clear');
        return 'Cache,config,view clear done!';
    }
    else{
        return 'Sorry, wrong pin.';
    }
});


Auth::routes();
Route::POST('/verify-otp', [RegisterController::class,'sendOtp'])->name('sendotp');
Route::GET('/verify-otp', [RegisterController::class,'otpVerify']);
// Route::POST('/verify-otp', [RegisterController::class,'otpVerify']);
Route::POST('/register', [RegisterController::class,'create'])->name('registeruser');

/*
-----------------------------------------------------------
 ==== Dashboard Routes Start  Here  ===
-----------------------------------------------------------
*/
Route::GET('/dashboard', [DashboardController::class,'index'])->name('dashboard')->middleware('auth');
Route::POST('/profile_photo_upload', [DashboardController::class, 'profile_photo_upload'])->name('profile_photo_upload')->middleware('auth');




/*
-----------------------------------------------------------
 ==== Edit Profile Start  Here  ===
-----------------------------------------------------------
*/
Route::GET('/edit-user-profile', [EditProfileController::class, 'index'])->name('edit_user_profile')->middleware('auth');
Route::GET('/edit-user-info', [EditProfileController::class, 'user_info_edit'])->name('edit_user_info')->middleware('auth');
Route::POST('/update-user-password',[EditProfileController::class, 'update_user_password'])->name('update_user_password')->middleware('auth');
Route::POST('/update-user-other-info',[EditProfileController::class, 'update_user_other_info'])->name('update_user_other_info')->middleware('auth');
// Route::POST('/update-user-other-info',[EditProfileController::class, 'update_user_other_info'])->name('update_user_other_info')->middleware('auth');







/*
-----------------------------------------------------------
 ==== Spatie Role Permission starts Here  ===
-----------------------------------------------------------
*/
Route::group(['middleware' => ['auth']], function() {
    Route::resource('manage_roles', ManageRolesController::class);
    Route::resource('manage_users', ManageUsersController::class);
    Route::resource('manage_permissions', ManagePermissionsController::class);
    Route::resource('manage_tenants', ManageTenantsController::class);
});


/*
-----------------------------------------------------------
 ==== Manage Scholarship Posting starts Here  ===
-----------------------------------------------------------
*/
Route::GET('/manage-scholarships-index', [TenantScholarshipController::class, 'index'])->name('manage_scholarships_index')->middleware('auth');
Route::GET('/manage-scholarships-create', [TenantScholarshipController::class, 'create'])->name('manage_scholarships_create')->middleware('auth');
Route::POST('/manage-scholarships-store', [TenantScholarshipController::class, 'store'])->name('manage_scholarships_store')->middleware('auth');
Route::GET('/manage-scholarships-edit/{scholarship_id}', [TenantScholarshipController::class, 'edit'])->name('manage_scholarships_edit')->middleware('auth');
Route::POST('/manage-scholarships-update', [TenantScholarshipController::class, 'update'])->name('manage_scholarships_update')->middleware('auth');
Route::POST('/manage-scholarships-delete', [TenantScholarshipController::class, 'destroy'])->name('manage_scholarships_delete')->middleware('auth');
Route::POST('/manage-scholarships-status-change', [TenantScholarshipController::class, 'status'])->name('manage_scholarships_status_change')->middleware('auth');


/*
-----------------------------------------------------------
 ==== Manage Applications starts Here  ===
-----------------------------------------------------------
*/
Route::GET('/manage-applications-index/{scholarship_id}', [ManageApplicationController::class, 'index'])->name('manage_applications_index')->middleware('auth');
Route::GET('/manage-applications-profile/{student_id}', [ManageApplicationController::class, 'show_profile'])->name('manage_applications_profile')->middleware('auth');
Route::GET('/manage-applications/{scholarship_id}/{student_id}', [ManageApplicationController::class, 'create'])->name('manage_applications')->middleware('auth');

Route::POST('/manage-applications-approval', [ManageApplicationController::class, 'store'])->name('manage_applications_approval')->middleware('auth');
Route::GET('/manage-applications-scholarship-details/{scholarship_id}/{student_id}', [ManageApplicationController::class, 'application_scholarship_details'])->name('manage_applications_scholarship_details')->middleware('auth');




