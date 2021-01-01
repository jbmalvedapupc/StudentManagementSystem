@extends('layouts.master_layout')

@section('page_level_css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    {{-- Page Heading --}}
    <h1 class="h3 mb-4 text-gray-800">{{ $section->section_name }}</h1>
    {{-- /Page Heading --}}
    
    @if(Session::has('success'))
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
    
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
            <div class="table-responsive">
                <table class="table table-bordered" id="student-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($section->students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->last_name }}</td>
                                <td>{{ $student->first_name }}</td>
                                <td>{{ $student->middle_name }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="#">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('page_level_scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#student-table').DataTable();
        });
    </script>
@endsection