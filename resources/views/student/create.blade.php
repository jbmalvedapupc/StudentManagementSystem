@extends('layouts.master_layout')

@section('content')
    {{-- Page Heading --}}
    <h1 class="h3 mb-4 text-gray-800">New Student</h1>
    {{-- /Page Heading --}}
    
    
    <div class="row">
        <div class="col-12">
            <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <input class="form-control" type="text" name="lname" id="lname" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="fname" id="fname" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="mname" id="mname" placeholder="Middle Name">
                </div>
                <div class="form-group">
                    <select class="form-control" name="section_id" id="section_id">
                        @foreach($sections as $section)
                            <option value="">{{ $section }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Register</button>
            </form>
        </div>
    </div>
@endsection