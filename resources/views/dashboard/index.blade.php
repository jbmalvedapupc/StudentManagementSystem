@extends('layouts.master_layout')

@section('content')
    {{-- Page Heading --}}
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
    {{-- /Page Heading --}}
    
    
    <div class="row">
        {{-- Students --}}
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Students</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $studentCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- /Students --}}

        {{-- Sections --}}
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Sections</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $sectionCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-object-ungroup fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- /Sections --}}
    </div>
@endsection