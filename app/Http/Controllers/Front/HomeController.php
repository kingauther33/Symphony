<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Counselor;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Visitor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    // Main (AN)

    public function index()
    {
        $teachers = Teacher::all();

        return view('front.index', compact('teachers'));
    }

    public function instructor() {
        $teachers = Teacher::all();

        return view('front.instructor.instructor', compact('teachers'));
    }

    // DUC

//    public function login()
//    {
//        return view('front.auth.login');
//    }

    public function admin()
    {
        return view('front.admin.admin');
    }

    public function staff()
    {
        return view('front.admin.staff');
    }

    public function student()
    {
        return view('front.admin.student');
    }

    public function class()
    {
        return view('front.admin.class');
    }

    public function addStudent()
    {
        return view('front.admin.add.addstudent');
    }

    public function addCourse()
    {
        return view('front.admin.add.addcourse');
    }
    public function teacher(){
        $teacher = Student::all();
        return view('front.teacher.teacher',compact('teacher'));

    }

    public function postTeacher(Request $request){
        $teacher = new Teacher();

        $teacher->id = $request->id;
        $teacher->fname = $request->fname;
        $teacher->lname = $request->lname;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->status = $request->status;

        $teacher->save();

        $class = new Grade();

        $class->name = $request->name;
        $class->year = $request->year;

        $class->save();

    }

    public function counselor()
    {
        $counselors = Visitor::all();
        return view('front.counselor.counselor',compact('counselors'));
    }

    public function addProfessor()
    {
        return view('front.admin.add.addprofessor');
    }

    public function subscribe(Request $request) {
        $subcribe = new Visitor();
        $subcribe->fname = $request->fname;
        $subcribe->lname = $request->lname;
        $subcribe->email = $request->email;
        $subcribe->phone = $request->phone;
        $subcribe->address = $request->address;

        $subcribe->save();

        return redirect()->back();
    }
    //email
    public function sendmail(Request $request){
        Mail::send('front.email.email',[
            'fname' => $request->fname,

        ],function ($mail) use ($request){
            $mail->to('riven1707@gmail.com',$request->fname);
            $mail->from($request->email);
            $mail->subject('OnlineEdu');

        });
        return "success";
    }
    public function postCounselor(Request  $request){

        $counselors = new Counselor();
        $counselors->fname = $request->fname;
        $counselors->lname = $request->lname;
        $counselors->email = $request->email;
        $counselors->password = $request->password;
        $counselors->dob = $request->dob;
        $counselors->phone = $request->phone;

        $counselors->save();

    }
}
