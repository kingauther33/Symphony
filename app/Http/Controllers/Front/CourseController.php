<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Visitor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function course() {
        return view('front.course.courses');
    }

    public function about() {
        $teachers = Teacher::all();


        return view('front.about.about', compact('teachers'));
    }

    public function contact() {
        return view('front.contact.contact');
    }
    public function faq() {
        return view('front.faq.faq');
    }
    public function entrance_exam() {
        return view('front.entrance_exam.entrance_exam');
    }
    public function search_exam(Request $request) {
        $search = $request->search;

        $entrance_exam_results = Visitor::where('id','LIKE', '%' . $search . '%')
            ->get()->first();


        return view('front.entrance_exam.search_exam',compact('entrance_exam_results'));
    }

    public function new_course(Request $request) {
        $request->validate([
            'email' => 'email',
            'course_id' => 'regex:/[1-3]{1}/'
        ]);

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
