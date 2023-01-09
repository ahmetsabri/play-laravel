<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __invoke()
    {

        $students = Student::selectRaw('name, score,
        DENSE_RANK() OVER(ORDER BY score DESC) as position')->orderBy('score','desc')->get();

        return view('student', compact('students'));
    }
}
