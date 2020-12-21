@extends('layouts.master_layout')

@section('content')
    {{-- Page Heading --}}
    <h1 class="h3 mb-4 text-gray-800">New Student</h1>
    {{-- /Page Heading --}}
    
    {{-- Error Messages --}}
    @if($errors->any())
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
    
    
    <div class="row">
        <div class="col-12">
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input class="form-control" type="text" name="last_name" id="lname" placeholder="Last Name" value="{{ old('last_name') }}">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="first_name" id="fname" placeholder="First Name" value="{{ old('first_name') }}">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="middle_name" id="mname" placeholder="Middle Name" value="{{ old('middle_name') }}">
                </div>
                <div class="form-group">
                    <select class="form-control" name="section_id" id="section_id">
                        @foreach($sections as $section)
                            <option value="{{ $section->id }}">{{ $section->section_name }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Register</button>
            </form>
        </div>
    </div>
@endsection