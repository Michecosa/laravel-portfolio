@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page_title', 'Admin Overview')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col">
            <div class="p-5 bg-white rounded-4 shadow-sm border-0 position-relative overflow-hidden">
                <div style="position: relative; z-index: 2;">
                    <h1 class="fw-bold text-dark">Welcome back, {{ Auth::user()?->name }}!</h1>
                    <p class="text-muted mb-4">Here's what's happening with your portfolio today.</p>
                    <a href="{{ route('projects.index') }}" class="btn btn-primary rounded-pill px-4" style="background-color: #6f42c1; border-color: #6f42c1;">
                        <i class="bi bi-eye me-2"></i> View Projects
                    </a>
                </div>
                <i class="bi bi-rocket-takeoff position-absolute end-0 bottom-0 m-4 text-light opacity-25" style="font-size: 8rem;"></i>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-3">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 p-3 rounded-3" style="background-color: rgba(111, 66, 193, 0.1);">
                        <i class="bi bi-collection fs-3" style="color: #6f42c1;"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="text-muted small text-uppercase fw-bold mb-1">Total Projects</h6>
                        <h3 class="mb-0 fw-bold">{{ \App\Models\Project::count() }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-3">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 p-3 rounded-3 bg-success bg-opacity-10">
                        <i class="bi bi-check-circle fs-3 text-success"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="text-muted small text-uppercase fw-bold mb-1">Completed</h6>
                        <h3 class="mb-0 fw-bold">{{ \App\Models\Project::where('is_completed', true)->count() }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-3">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 p-3 rounded-3 bg-info bg-opacity-10">
                        <i class="bi bi-clock-history fs-3 text-info"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="text-muted small text-uppercase fw-bold mb-1">In Progress</h6>
                        <h3 class="mb-0 fw-bold">{{ \App\Models\Project::where('is_completed', false)->count() }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm rounded-4 p-4 bg-dark text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="mb-1 fw-bold">Ready to showcase more?</h5>
                        <p class="text-white-50 mb-0 small">Add a new project to keep your portfolio fresh and engaging.</p>
                    </div>
                    <a href="{{ route('projects.create') }}" class="btn btn-outline-light rounded-pill px-4">
                        Quick Add <i class="bi bi-plus-lg ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection