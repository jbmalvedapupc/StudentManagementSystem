<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::with('students')->get();
        return view('sections.index', compact('sections'));
    }
}
