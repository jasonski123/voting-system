<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentLoginRequest;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function studentLogin(StudentLoginRequest $request)
    {
        $credentials = [
            'username' => $request->student_id,
            'password' => $request->student_id,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')
            ->withSuccess('You have Successfully loggedin');
        }

        return redirect()->back()->withErrors([
            'student_id' => 'Invalid Student ID',
        ]);
    }
}
