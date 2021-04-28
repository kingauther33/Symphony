<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Counselor;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Training_department;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Builder\Class_;

class AdminController extends Controller
{
    // DUC

    public function login()
    {
        return view('front.login.login');
    }

    public function adminStaff()
    {
        $professors = Teacher::all();

        // Session when logged in
        if (session()->has('LoggedUser')) {
            $user = Training_department::where('user_id', '=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo' => $user
            ];
        }

        return view('front.admin.staff', compact('professors'), $data);
    }

    public function adminStudent()
    {
        $students = Student::all();

        // Session when logged in
        if (session()->has('LoggedUser')) {
            $user = Training_department::where('user_id', '=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo' => $user
            ];
        }

        return view('front.admin.student', compact('students'), $data);
    }

    public function adminGrade()
    {
        $grades = Grade::all();

        // Session when logged in
        if (session()->has('LoggedUser')) {
            $user = Training_department::where('user_id', '=', session('LoggedUser'))->first();
            $users = DB::table('users')->where('role_id', 1)->get();

            $data = [
                'LoggedUserInfo' => $user
            ];
        }

        return view('front.admin.grade', compact('grades'), $data);
    }

    public function addStudent()
    {
        if (session()->has('LoggedUser')) {
            $user = Training_department::where('user_id', '=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo' => $user
            ];
        }

        return view('front.admin.add.addstudent', $data);
    }

    public function addStudent1(Request $request) {

        $request->validate([
           'first name'=>'required',
           'last name'=>'required',
           'email'=>'required|email',
           'registration date'=>'date_format:Y-m-d|nullable',
           'grade id'=>'required|numeric',
           'password'=>'required|min:6|max:14',
           'phone number'=>'required|regex:/(0)[0-9]{9}/',
           'birth date'=>'date_format:Y-m-d|before:today|nullable',
           'status'=>'required|numeric',
           'address'=>'required|max:255'
        ]);

        $addstudent = new Student();
        $addstudent->grade_id = $request->input('grade id');
        $addstudent->avatar = $request->avatar;
        $addstudent->email = $request->email;
        $addstudent->password = $request->password;
        $addstudent->fname = $request->input('first name');
        $addstudent->lname = $request->input('last name');
        $addstudent->dob = $request->input('birth date');
        $addstudent->phone = $request->input('phone number');
        $addstudent->address = $request->address;
        $addstudent->date_of_join = $request->input('registration date');
        $addstudent->status = $request->status;

        $addstudent->save();

        return redirect('student')
            ->with('message', '<div class="alert alert-success">Student Added Successfully!</div>');
    }

    public function addCourse()
    {
        if (session()->has('LoggedUser')) {
            $user = Training_department::where('user_id', '=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo' => $user
            ];
        }

        return view('front.admin.add.addcourse', $data);
    }

    public function addCourse1(Request $request) {

        $request->validate([
            'course name'=>'required',
            'course id'=>'required|numeric',
            'course details'=>'required|max:255',
            'starting year'=>'required|regex:{4}',
            'professor id'=>'required|numeric'
        ]);

        $addcourse = new Grade();
        $addcourse->year = $request->input('starting year');
        $addcourse->name = $request->input('course name');
        $addcourse->description = $request->input('course details');
        $addcourse->teacher_id = $request->input('professor id');
        $addcourse->course_id = $request->input('course id');

        $addcourse->save();

        return redirect('grade')
            ->with('message', '<div class="alert alert-success">Course Added Successfully!</div>');
    }

    public function addProfessor()
    {
        if (session()->has('LoggedUser')) {
            $user = Training_department::where('user_id', '=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo' => $user
            ];
        }

        return view('front.admin.add.addprofessor', $data);
    }

    public function addProfessor1(Request $request) {

        $request->validate([
            'first name'=>'required',
            'last name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6|max:14',
            'department'=>'required',
            'phone number'=>'required|regex:/(0)[0-9]{9}/',
            'birth date'=>'date_format:Y-m-d|before:today|nullable',
            'address'=>'required|max:255',
            'comment'=>'max:255'
        ]);

        $addprofessor = new Teacher();
        $addprofessor->avatar = $request->avatar;
        $addprofessor->email = $request->email;
        $addprofessor->password = $request->password;
        $addprofessor->fname = $request->input('first name');
        $addprofessor->lname = $request->input('last name');
        $addprofessor->dob = $request->input('birth date');
        $addprofessor->address = $request->address;
        $addprofessor->phone = $request->input('phone number');
        $addprofessor->specialty = $request->input('department');
        $addprofessor->comment = $request->comment;

        $query = $addprofessor->save();

        if($query) {
            return redirect('staff')
                ->with('message', '<div class="alert alert-success">Teacher Added Successfully!</div>');
        } else {
            return redirect('staff')
                ->with('message', '<div class="alert alert-danger">Something Went Wrong!</div>');
        }

    }

    public function adminCounselor() {
        $counselors = Counselor::all();


        // Session when logged in
        if (session()->has('LoggedUser')) {
            $user = Training_department::where('user_id', '=', session('LoggedUser'))->first();
            $users = User::where('role_id', 1)->get();
            $users = DB::table('users')->where('role_id', 1)->get();

            $data = [
                'LoggedUserInfo' => $user,
                'UsersInDatabase' => $users
            ];
        }

        return view('front.admin.counselor', compact('counselors'), $data);
    }

    public function addCounselor() {
        if (session()->has('LoggedUser')) {
            $user = Training_department::where('user_id', '=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo' => $user
            ];
        }

        return view('front.admin.add.addcounselor', $data);
    }

    public function addCounselor1(Request $request) {

        $request->validate([
            'first name'=>'required',
            'last name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6|max:14',
            'birth date'=>'date_format:Y-m-d|before:today|nullable',
            'phone number'=>'required|regex:/(0)[0-9]{9}/'
        ]);

        $counselors = new Counselor();
        $counselors->fname = $request->input('first name');
        $counselors->lname = $request->input('last name');
        $counselors->email = $request->email;
        $counselors->password = $request->password;
        $counselors->dob = $request->input('birth date');
        $counselors->phone = $request->input('phone number');

        $counselors->save();

        return redirect('counselor')
            ->with('message', '<div class="alert alert-success">Counselor Added Successfully!</div>');
    }


    public function visitor() {
        $visitors = Visitor::all();

        if (session()->has('LoggedUser')) {
            $user = Counselor::where('user_id', '=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo' => $user
            ];
        }

        return view('front.counselor.visitor', compact('visitors'), $data);
    }

    public function addVisitor(Request $request) {


        $visitors = new Visitor();
        $visitors->fname = $request->fname;
        $visitors->lname = $request->lname;
        $visitors->email = $request->email;
        $visitors->phone = $request->phone;
        $visitors->dob = $request->dob;
        $visitors->address = $request->address;
        $visitors->status = $request->status;
        $visitors->entrance_mark = $request->entrance_mark;

        $visitors->save();

        return redirect('visitor');
    }

    public function deleteStaff($rowId){
        Teacher::where('id', $rowId)->delete();
        DB::table('teachers')->where('id', $rowId)->update(['isDeleted' => 1]);

        return back();
    }

    public function deleteCounselor($rowId){
        Counselor::where('id', $rowId)->delete();
        DB::table('counselors')->where('id', $rowId)->update(['isDeleted' => 1]);

        return back();
    }

    public function deleteStudent($rowId){
        Student::where('id', $rowId)->delete();
        DB::table('students')->where('id', $rowId)->update(['isDeleted' => 1]);

        return back();
    }

    public function deleteVisitor($rowId)
    {

        Visitor::where('id', $rowId)->delete();
        DB::table('visitors')->where('id', $rowId)->update(['isDeleted' => 1]);

        return back();

    }

    public function deleteClass($rowId){


        return back();
    }

    public function deleteGrade($rowId){
        Grade::where('id', $rowId)->delete();
        DB::table('grades')->where('id', $rowId)->update(['isDeleted' => 1]);

        return back();
    }
}
