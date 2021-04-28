<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Counselor;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Training_department;
use App\Models\Visitor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class   CourseController extends Controller
{
    //
    public function course() {
        if (session()->has('LoggedUser')) {
            switch (session('LoggedRole')) {
                case 1:
                    $user = Counselor::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
                case 2:
                    $user = Training_department::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
                case 3:
                    $user = Teacher::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
                case 4:
                    $user = Student::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
            }
        }
        else {
            $data = [
                'LoggedUserInfo' => null
            ];
        }

        return view('front.course.courses', $data);
    }

    public function about_checkUser() {
        $teachers = Teacher::all();

        if (session()->has('LoggedUser')) {
            switch (session('LoggedRole')) {
                case 1:
                    $user = Counselor::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
                case 2:
                    $user = Training_department::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
                case 3:
                    $user = Teacher::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
                case 4:
                    $user = Student::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
            }
        }
        else {
            $data = [
                'LoggedUserInfo' => null
            ];
        }

        return view('front.about.about', compact('teachers'), $data);
    }

    public function contact() {
        if (session()->has('LoggedUser')) {
            switch (session('LoggedRole')) {
                case 1:
                    $user = Counselor::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
                case 2:
                    $user = Training_department::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
                case 3:
                    $user = Teacher::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
                case 4:
                    $user = Student::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
            }
        }
        else {
            $data = [
                'LoggedUserInfo' => null
            ];
        }

        return view('front.contact.contact', $data);
    }
    public function faq() {
        if (session()->has('LoggedUser')) {
            switch (session('LoggedRole')) {
                case 1:
                    $user = Counselor::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
                case 2:
                    $user = Training_department::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
                case 3:
                    $user = Teacher::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
                case 4:
                    $user = Student::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
            }
        }
        else {
            $data = [
                'LoggedUserInfo' => null
            ];
        }

        return view('front.faq.faq', $data);
    }
    public function entrance_exam() {
        if (session()->has('LoggedUser')) {
            switch (session('LoggedRole')) {
                case 1:
                    $user = Counselor::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
                case 2:
                    $user = Training_department::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
                case 3:
                    $user = Teacher::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
                case 4:
                    $user = Student::where('user_id', '=', session('LoggedUser'))->first();
                    $data = [
                        'LoggedUserInfo' => $user
                    ];
                    break;
            }
        }
        else {
            $data = [
                'LoggedUserInfo' => null
            ];
        }

        return view('front.entrance_exam.entrance_exam', $data);
    }
    public function search_exam(Request $request) {
        $search = $request->search;

        $entrance_exam_results = Visitor::where('id','LIKE', '%' . $search . '%')
            ->get()->first();


        return view('front.entrance_exam.search_exam',compact('entrance_exam_results'));
    }

    public function new_course(Request $request) {

        $subcribe = new Visitor();
        $subcribe->fname = $request->fname;
        $subcribe->lname = $request->lname;
        $subcribe->email = $request->email;
        $subcribe->course_id = $request->course_id;
        $subcribe->phone = $request->phone;
        $subcribe->address = $request->address;

        $subcribe->save();

        return redirect()->back();
    }


}
