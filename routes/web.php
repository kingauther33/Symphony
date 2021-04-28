<?php

use App\Http\Controllers\Front;
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


//// *** De kiem tra du lieu voi Model da chuan chua (JSON Formatter)
//Route::get('/', function () {
//    return \App\Models\Exam::find(1)->exam_type;
//});

// AN


Route::get('/', [Front\HomeController::class, 'index']);
Route::get('/about', [Front\CourseController::class, 'about']);
Route::get('/contact', [Front\CourseController::class, 'contact']);
Route::get('/instructor', [Front\HomeController::class, 'instructor']);
Route::post('/contact', [Front\HomeController::class, 'subscribe']);
Route::get('/login', [Front\UserAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::post('check', [Front\UserAuthController::class, 'check'])->name('admin.checklogin');

//Son

Route::get('/student_result', [Front\StudentController::class, 'result']);
Route::get('/student_profile', [Front\StudentController::class, 'profile'])->name('student.profile')->middleware('isLogged');
Route::post('/student_profile', [Front\StudentController::class, 'postProfile']);
Route::post('/contact', [Front\HomeController::class, 'sendmail'])->name('contact_mail');
Route::get('/counselor',[Front\HomeController::class,'counselor'])->name('counselor.home')->middleware('isLogged');


Route::post('/contact', [Front\HomeController::class, 'subscribe'])->name('contact_subscribe');

Route::get('/counselor',[Front\HomeController::class,'counselor']);

Route::post('/counselor',[Front\HomeController::class,'postCounselor']);
Route::get('/teacher',[Front\HomeController::class,'teacher'])->name('teacher.home')->middleware('isLogged');
Route::post('/teacher',[Front\HomeController::class,'postTeacher']);


// HIEU

Route::get('/faq', [Front\CourseController::class, 'faq']);
Route::get('/entrance_exam', [Front\CourseController::class, 'entrance_exam']);
Route::get('/search_exam', [Front\CourseController::class, 'search_exam']);

// DUC

//Route::get('/auth', [Front\HomeController::class, 'auth']);

//Route::get('/admin', [Front\AdminController::class, 'admin']);

// Admin

Route::get('/admin_staff', [Front\AdminController::class, 'staff'])->name('admin.staff')->middleware('isLogged');
Route::get('/admin_student', [Front\AdminController::class, 'student'])->name('admin.student');
Route::get('/admin_class', [Front\AdminController::class, 'class'])->name('admin.class');
Route::get('/admin_counselor', [Front\AdminController::class, 'counselor'])->name('admin.counselor');
Route::get('/admin_addstudent', [Front\AdminController::class, 'addStudent']);
Route::post('/admin_addstudent', [Front\AdminController::class, 'addStudent1'])->name('admin.addstudent');
Route::get('/admin_addcourse', [Front\AdminController::class, 'addCourse']);
Route::post('/admin_addcourse', [Front\AdminController::class, 'addCourse1'])->name('admin.addcourse');
Route::get('/admin_addprofessor', [Front\AdminController::class, 'addProfessor']);
Route::post('/admin_addprofessor', [Front\AdminController::class, 'addProfessor1'])->name('admin.addprofessor');
Route::get('/admin_addcounselor', [Front\AdminController::class, 'addCounselor']);
Route::post('/admin_addcounselor', [Front\AdminController::class, 'addCounselor1'])->name('admin.addcounselor');

// Counselor

Route::get('/visitor', [Front\AdminController::class, 'visitor']);

//Phong

Route::post('/courses', [Front\CourseController::class, 'new_course']);
Route::get('/courses', [Front\CourseController::class, 'course']);


Route::get('/students', [Front\AdminController::class, 'sssss']);

Route::get('admin_staff/delete/{rowId}',[Front\AdminController::class,'delete']);

Route::get('admin_staff/delete/{rowId}',[Front\AdminController::class,'delete1']);

Route::get('admin_staff/delete/{rowId}',[Front\AdminController::class,'delete2']);

Route::get('delete{rowId}',[Front\AdminController::class,'delete']);


