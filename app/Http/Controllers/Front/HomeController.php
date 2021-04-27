<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Visitor;
use Illuminate\Http\Request;

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
}
