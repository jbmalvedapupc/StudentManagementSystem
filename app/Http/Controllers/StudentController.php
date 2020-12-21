<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Section;
use App\Http\Requests\NewStudentRequest;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('section')->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $sections = Section::get();
        return view('students.create', compact('sections'));
    }

    public function store(NewStudentRequest $request)
    {
        Student::create(
            $request->all()
        );
        return redirect()->route('students.index');
    }
}
