<?php

use App\Http\Controllers\CommonControllers\DashboardController;
use App\Http\Controllers\student\RegisterStudentController;
use App\Http\Controllers\student\StudentDocumentController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;



Route::view('/student/student-dashboard','web.student.student-dashboard')->name('student_dashboard')->middleware('auth');
Route::GET('/student/student-profile-create',[RegisterStudentController::class, 'create'])->name('student_profile_create')->middleware('auth');
Route::POST('student/store-information',[RegisterStudentController::class, 'store'])->name('store_student_information')->middleware('auth');
Route::GET('/student/student-profile/{student_id}',[RegisterStudentController::class, 'show'])->name('student_profile')->middleware('auth');
Route::GET('/student/student-profile-edit/{student_id}', [RegisterStudentController::class, 'edit'])->name('student_edit')->middleware('auth');
Route::POST('/student/student-profile-update', [RegisterStudentController::class, 'update'])->name('student_update')->middleware('auth');


Route::GET('/student/student-document', [StudentDocumentController::class, 'Create'])->name('student_document')->middleware('auth');
Route::POST('/student/student-document-upload', [StudentDocumentController::class, 'store'])->name('student_document_upload')->middleware('auth');
Route::POST('/student/student-document-delete',[StudentDocumentController::class, 'destroy'])->name('student_document_delete')->middleware('auth');
// Route::POST('/create_notice', [\App\Http\Controllers\Landing_Controllers\NoticeController::class, 'create_notice'])->name('create_notice')->middleware('auth');