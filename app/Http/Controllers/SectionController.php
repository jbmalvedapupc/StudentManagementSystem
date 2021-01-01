<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewSectionRequest;
use Illuminate\Http\Request;
use App\Section;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::with('students')->get();
        return view('sections.index', compact('sections'));
    }

    public function store(NewSectionRequest $request) 
    {
        Section::create(
            $request->all()
        );
        return redirect()->route('sections.index')->with('success', 'Section added successfully.');
    }

    public function show(Section $section)
    {
        $section = $section->with('students')->findOrFail($section->id);
        return view('sections.show', compact('section'));
    }
}
