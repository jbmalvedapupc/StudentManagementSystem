<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('section')->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $sections = ['Section 1', 'Section 2', 'Section 3'];
        return view('students.create', compact('sections'));
    }
}
