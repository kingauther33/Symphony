<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserAuthController extends Controller
{
    //
    public function login() {
        return view('front.auth.login');
    }

    public function check(Request $request) {
        //Validate Request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);

        // If Form validated successfully, process login

        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if ($request->password === $user->password) {

                // Password true -> redirect profile
                $request->session()->put('LoggedUser', $user->id);
                $request->session()->put('LoggedRole', $user->role_id);

                switch ($user->role_id) {
                    case 1:
                        dd(session('LoggedUser'));
                        return redirect()->route('counselor.home'); // Counselor
                    case 2:
                        return redirect()->route('admin.staff'); // Training Department / ADMIN
                    case 3:
                        return redirect()->route('teacher.home'); // Teacher
                    case 4:
                        return redirect()->route('student.profile'); // Student
                }
                return redirect()->route('admin.staff');

            } else {
                return back()->with('fail', 'Password is wrong');
            }
        } else {
            return back()->with('fail', 'No account found for this email');
        }
    }

    public function logout() {
        if(session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            session()->pull('LoggedRole');
            return redirect('login');
        }
    }
}
