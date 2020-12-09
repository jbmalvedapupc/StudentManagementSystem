@extends('layouts.master_layout')

@section('page_level_css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    {{-- Page Heading --}}
    <h1 class="h3 mb-4 text-gray-800">Sections</h1>
    {{-- /Page Heading --}}
    
    <div class="row">
        <div class="col-12">
            <form action="#" method="post">
                @csrf
                <div class="form-group col-12">
                    <input class="form-control" type="text" placeholder="Section Name">
                </div>
                <div class="form-group col-4">
                    <button class="btn btn-primary" type="submit">Add Section</button>
                </div>
            </form>
        </div>
    </div>
    <hr>    

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="section-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Section Name</th>
                            <th>Number of Students</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sections as $section)
                        <tr>
                            <td>{{ $section->id }}</td>
                            <td>{{ $section->section_name }}</td>
                            <td>{{ $section->students->count() }}</td>
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
            $('#section-table').DataTable();
        });
    </script>
@endsection