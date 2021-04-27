<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Counselor;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // DUC

    public function login()
    {
        return view('front.login.login');
    }

    public function staff()
    {
        $professors = Teacher::all();

        return view('front.admin.staff', compact('professors'));
    }

    public function student()
    {
        $students = Student::all();

        return view('front.admin.student', compact('students'));
    }

    public function class()
    {
        $grades = Grade::all();

        return view('front.admin.class', compact('grades'));
    }

    public function addStudent()
    {
        return view('front.admin.add.addstudent');
    }

    public function addStudent1(Request $request) {

        $request->validate([
           'fname'=>'required',
           'lname'=>'required',
           'email'=>'required|email',
           'date_of_join'=>'date_format:Y-m-d|nullable',
           'grade_id'=>'required|numeric',
           'password'=>'required|min:6|max:14',
           'phone'=>'required|regex:/(0)[0-9]{9}/',
           'dob'=>'date_format:Y-m-d|before:today|nullable',
           'status'=>'required|numeric',
           'address'=>'required|max:255'
        ]);

        $addstudent = new Student();
        $addstudent->grade_id = $request->grade_id;
        $addstudent->avatar = $request->avatar;
        $addstudent->email = $request->email;
        $addstudent->password = $request->password;
        $addstudent->fname = $request->fname;
        $addstudent->lname = $request->lname;
        $addstudent->dob = $request->dob;
        $addstudent->phone = $request->phone;
        $addstudent->address = $request->address;
        $addstudent->date_of_join = $request->date_of_join;
        $addstudent->status = $request->status;

        $addstudent->save();

        return redirect('student')
            ->with('message', '<div class="alert alert-success">Student Added Successfully!</div>');;
    }

    public function addCourse()
    {
        return view('front.admin.add.addcourse');
    }

    public function addCourse1(Request $request) {

        $request->validate([
            'name'=>'required',
            'course_id'=>'required|numeric',
            'description'=>'required|max:255',
            'year'=>'required|regex:{4}',
            'teacher_id'=>'required|numeric'
        ]);

        $addcourse = new Grade();
        $addcourse->year = $request->year;
        $addcourse->name = $request->name;
        $addcourse->description = $request->description;
        $addcourse->teacher_id = $request->teacher_id;
        $addcourse->course_id = $request->course_id;

        $addcourse->save();

        return redirect('class')
            ->with('message', '<div class="alert alert-success">Course Added Successfully!</div>');;
    }

    public function addProfessor()
    {
        return view('front.admin.add.addprofessor');
    }

    public function addProfessor1(Request $request) {

        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6|max:14',
            'specialty'=>'required',
            'phone'=>'required|regex:/(0)[0-9]{9}/',
            'dob'=>'date_format:Y-m-d|before:today|nullable',
            'address'=>'required|max:255',
            'comment'=>'max:255'
        ]);

        $addprofessor = new Teacher();
        $addprofessor->avatar = $request->avatar;
        $addprofessor->email = $request->email;
        $addprofessor->password = $request->password;
        $addprofessor->fname = $request->fname;
        $addprofessor->lname = $request->lname;
        $addprofessor->dob = $request->dob;
        $addprofessor->address = $request->address;
        $addprofessor->phone = $request->phone;
        $addprofessor->specialty = $request->specialty;
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

    public function counselor() {
        $counselors = Counselor::all();

        return view('front.admin.counselor', compact('counselors'));
    }

    public function addCounselor() {
        return view('front.admin.add.addcounselor');
    }

    public function addCounselor1(Request $request) {

        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6|max:14',
            'dob'=>'date_format:Y-m-d|before:today|nullable',
            'phone'=>'required|regex:/(0)[0-9]{9}/'
        ]);

        $counselors = new Counselor();
        $counselors->fname = $request->fname;
        $counselors->lname = $request->lname;
        $counselors->email = $request->email;
        $counselors->password = $request->password;
        $counselors->dob = $request->dob;
        $counselors->phone = $request->phone;

        $counselors->save();

        return redirect('counselor')
            ->with('message', '<div class="alert alert-success">Counselor Added Successfully!</div>');;
    }

    public function sssss() {
        return view('front.profile.students');
    }
}
