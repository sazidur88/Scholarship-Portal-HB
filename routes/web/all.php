<?php

use App\Http\Controllers\CommonControllers\DashboardController;
use App\Http\Controllers\student\RegisterStudentController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;



Route::view('/student/student-dashboard','web.student.student-dashboard')->name('student_dashboard')->middleware('auth');
Route::GET('/student/student-profile-create',[RegisterStudentController::class, 'create'])->name('student_profile_create')->middleware('auth');
Route::POST('student/store-information',[RegisterStudentController::class, 'store'])->name('store_student_information')->middleware('auth');
Route::GET('/student/student-profile/{student_id}',[RegisterStudentController::class, 'show'])->name('student_profile')->middleware('auth');


