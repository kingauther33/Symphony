<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function result() {
        return view('front.student.student');
    }

    public function profile() {
        $profiles = Student::all();

        if (session()->has('LoggedUser')) {
            $user = Student::where('user_id', '=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo' => $user
            ];
        }
        return view('front.profile.students',compact('profiles'), $data);
    }

    public function exams(){
        $exams = Exam::all();

        return view('front.counselor.exams',compact('exams'));
    }
    public function PostExams(Request $request){

        $exams = new Exam();

        $exams->id = $request->id;
        $exams->name = $request->name;
        $exams->start_date = $request->start_date;
    }
    public function deleteExams($rowId){
       Exam::where('id', $rowId)->delete();
        DB::table('exams')->where('id', $rowId)->update(['isDeleted' => 1]);

        return back();
    }
}
