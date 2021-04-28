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
use Illuminate\Support\Facades\Mail;

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

        $grade = new Grade();

        $grade->name = $request->name;
        $grade->year = $request->year;

        $grade->save();

    }

//    public function subscribe(Request $request) {
//
//        $request->validate([
//            'fname'=>'required',
//            'lname'=>'required',
//            'email'=>'required|email',
//            'phone number'=>'required|regex:/(0)[0-9]{9}/',
//            'address'=>'required'
//        ]);
//
//        $subcribe = new Visitor();
//        $subcribe->fname = $request->input('fname');
//        $subcribe->lname = $request->input('lname');
//        $subcribe->email = $request->email;
//        $subcribe->phone = $request->input('phone number');
//        $subcribe->address = $request->address;
//
//        $subcribe->save();
//
//
//        return redirect()->back();
//    }

    //email

    public function sendmail(Request $request){
        Mail::send('front.email.email',[

            'fname' => $request-> fname,

            'fname' => $request->fname,


        ],function ($mail) use ($request){
            $mail->to('riven1707@gmail.com');
            $mail->from($request->email);
            $mail->subject('OnlineEdu');

        });
        return "success";
    }

    public function error() {
        return view('front.error.error');
    }
}
