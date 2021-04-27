<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function result() {
        return view('front.student.student');
    }

    public function profile() {
        return view('front.profile.students');
    }
}
