<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function index() {
        $students = Student::all();
        return view('student', compact('students'));
    }

    public function deleteStudent($id) {
        $student = Student::find($id); 

        if ($student) {
            $student->delete();
        }
    }
}
