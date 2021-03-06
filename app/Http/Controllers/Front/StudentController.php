<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Counselor;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Exam;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function studentProfile() {

        if (session()->has('LoggedUser')) {
            $user = Student::where('user_id', '=', session('LoggedUser'))->first();
            $email = User::where('id', session('LoggedUser'))->first()->email;
            $data = [
                'LoggedUserInfo' => $user
            ];
        }
        return view('front.profile.students',compact('email'), $data);
    }

    public function exams(){
        $exams = Exam::all();

        if (session()->has('LoggedUser')) {
            $user = Counselor::where('user_id', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo' => $user
            ];
        }

        return view('front.counselor.exams',compact('exams'), $data);
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
