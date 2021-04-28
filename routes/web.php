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


Route::get('/', [Front\HomeController::class, 'index_checkUser']);
Route::get('/about', [Front\CourseController::class, 'about_checkUser']);
Route::get('/contact', [Front\CourseController::class, 'contact']);
Route::get('/instructor', [Front\HomeController::class, 'instructor']);
/*Route::post('/contact', [Front\HomeController::class, 'subscribe']);*/
Route::get('/login', [Front\UserAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::post('check', [Front\UserAuthController::class, 'check'])->name('admin.checklogin');
Route::get('logout', [Front\UserAuthController::class, 'logout']);
Route::get('error', [Front\HomeController::class, 'error']);

//Son

Route::get('/student_profile', [Front\StudentController::class, 'studentProfile'])
    ->name('student.profile')
    ->middleware('isLoggedStudent');
Route::post('/student_profile', [Front\StudentController::class, 'postProfile']);
Route::post('/contact', [Front\HomeController::class, 'sendmail'])->name('contact_mail');


Route::get('/exams',[Front\StudentController::class,'exams'])->middleware('isLoggedCounselor');

Route::post('/exams',[Front\StudentController::class,'PostExams'])->middleware('isLoggedCounselor');

Route::get('exams/delete/{rowId}', [Front\StudentController::class, 'deleteExams']);


//Route::post('/contact', [Front\HomeController::class, 'subscribe'])->name('contact_subscribe');


Route::get('/teacher', [Front\HomeController::class, 'teacher'])
    ->name('teacher.home')
    ->middleware('isLoggedTeacher');
Route::post('/teacher', [Front\HomeController::class, 'postTeacher']);


// HIEU

Route::get('/faq', [Front\CourseController::class, 'faq']);
Route::get('/entrance_exam', [Front\CourseController::class, 'entrance_exam']);
Route::get('/search_exam', [Front\CourseController::class, 'search_exam']);

// DUC

//Route::get('/auth', [Front\HomeController::class, 'auth']);

//Route::get('/admin', [Front\AdminController::class, 'admin']);

// Admin

Route::get('/admin_staff', [Front\AdminController::class, 'adminStaff'])
    ->name('admin.staff')
    ->middleware('isLoggedAdmin');
Route::get('/admin_student', [Front\AdminController::class, 'adminStudent'])
    ->name('admin.student')
    ->middleware('isLoggedAdmin');

Route::get('/admin_grade', [Front\AdminController::class, 'adminGrade'])
    ->name('admin.grade')
    ->middleware('isLoggedAdmin');
Route::get('/admin_counselor', [Front\AdminController::class, 'adminCounselor'])
    ->name('admin.counselor')
    ->middleware('isLoggedAdmin');
Route::get('/admin_addstudent', [Front\AdminController::class, 'addStudent']);
Route::post('/admin_addstudent', [Front\AdminController::class, 'addStudent1'])->name('admin.addstudent');
Route::get('/admin_addgrade', [Front\AdminController::class, 'addGrade']);
Route::post('/admin_addgrade', [Front\AdminController::class, 'addGrade1'])->name('admin.addgrade');
Route::get('/admin_addprofessor', [Front\AdminController::class, 'addProfessor']);
Route::post('/admin_addprofessor', [Front\AdminController::class, 'addProfessor1'])->name('admin.addprofessor');
Route::get('/admin_addcounselor', [Front\AdminController::class, 'addCounselor']);
Route::post('/admin_addcounselor', [Front\AdminController::class, 'addCounselor1'])->name('admin.addcounselor');
Route::get('admin_profile', [Front\AdminController::class, 'adminProfile'])->middleware('isLoggedAdmin');

// Counselor

Route::get('/visitor', [Front\AdminController::class, 'visitor'])
    ->name('counselor.home')
    ->middleware('isLoggedCounselor');

//Phong

Route::post('/courses', [Front\CourseController::class, 'new_course']);
Route::get('/courses', [Front\CourseController::class, 'course']);


Route::get('admin_staff/delete/{rowId}', [Front\AdminController::class, 'deleteStaff']);

Route::get('admin_counselor/delete/{rowId}', [Front\AdminController::class, 'deleteCounselor']);

Route::get('visitor/delete/{rowId}', [Front\AdminController::class, 'deleteVisitor']);

Route::get('admin_student/delete/{rowId}', [Front\AdminController::class, 'deleteStudent']);

Route::get('admin_grade/delete/{rowId}', [Front\AdminController::class, 'deleteGrade']);




