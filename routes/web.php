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

Route::get('/login', [Front\UserAuthController::class, 'login']);

Route::post('check', [Front\UserAuthController::class, 'check'])->name('admin.checklogin');

//Son

Route::get('/student_result', [Front\StudentController::class, 'result']);
Route::get('/student_profile', [Front\StudentController::class, 'profile']);


// HIEU

Route::get('/faq', [Front\CourseController::class, 'faq']);

Route::get('/entrance_exam', [Front\CourseController::class, 'entrance_exam']);

Route::get('/search_exam', [Front\CourseController::class, 'search_exam']);

// DUC

//Route::get('/auth', [Front\HomeController::class, 'auth']);

//Route::get('/admin', [Front\AdminController::class, 'admin']);

Route::get('/admin_staff', [Front\AdminController::class, 'staff'])->name('admin.staff');

Route::get('/admin_student', [Front\AdminController::class, 'student']);

Route::get('/admin_class', [Front\AdminController::class, 'class']);

Route::get('/admin_counselor', [Front\AdminController::class, 'counselor']);

Route::get('/admin_addstudent', [Front\AdminController::class, 'addStudent']);

Route::post('/admin_addstudent', [Front\AdminController::class, 'addStudent1'])->name('admin.addstudent');

Route::get('/admin_addcourse', [Front\AdminController::class, 'addCourse']);

Route::post('/admin_addcourse', [Front\AdminController::class, 'addCourse1'])->name('admin.addcourse');

Route::get('/admin_addprofessor', [Front\AdminController::class, 'addProfessor']);

Route::post('/admin_addprofessor', [Front\AdminController::class, 'addProfessor1'])->name('admin.addprofessor');

Route::get('/admin_addcounselor', [Front\AdminController::class, 'addCounselor']);

Route::post('/admin_addcounselor', [Front\AdminController::class, 'addCounselor1'])->name('admin.addcounselor');

//Phong

Route::post('/courses', [Front\CourseController::class, 'new_course']);

Route::get('/courses', [Front\CourseController::class, 'course']);

