@extends('layouts.master_layout')

@section('page_level_css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    {{-- Page Heading --}}
    <h1 class="h3 mb-4 text-gray-800">Search Student</h1>
    {{-- /Page Heading --}}
    
    
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
                            <th>Section</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>3</td>
                            <td>Tamad</td>
                            <td>Juan</td>
                            <td>Xavier</td>
                            <td>Section 01</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="#">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Magic</td>
                            <td>Mina</td>
                            <td>Gertrud</td>
                            <td>Section 02</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="#">View</a>
                            </td>
                        </tr>
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