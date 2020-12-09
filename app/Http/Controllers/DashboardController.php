<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Section;

class DashboardController extends Controller
{
    public function index()
    {
        $studentCount = Student::count();
        $sectionCount = Section::count();
        return view('dashboard.index', compact('studentCount', 'sectionCount'));
    }
}
