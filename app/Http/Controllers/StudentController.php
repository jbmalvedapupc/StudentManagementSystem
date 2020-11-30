<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        $sections = ['Section 1', 'Section 2', 'Section 3'];
        return view('students.create', compact('sections'));
    }
}
