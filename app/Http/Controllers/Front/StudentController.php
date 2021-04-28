<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models;

class StudentController extends Controller
{
    public function result() {
        return view('front.student.student');
    }

    public function profile() {
        $profile = Student::all();
        return view('front.profile.students',compact($profile));
    }
//    public function postProfile(Request $request) {
//        $profile = new profile();
//
//        $profile->id = $request->id;
//        $profile->fname = $request->fname;
//        $profile->lname = $request->lname;
//        $profile->email = $request->email;
//        $profile->dob = $request->dob;
//        $profile->phone = $request->phone;
//        $profile->date_of_join = $request->date_of_join;
//
//        $profile->save();
//
//
//    }
}
