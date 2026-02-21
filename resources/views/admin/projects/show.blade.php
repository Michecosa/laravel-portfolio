@extends('layouts.admin')

@section('title', 'Project Details')
@section('page_title', 'Project: ' . $project->title)

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <img src="{{ $project->cover_image ?? 'https://upload.wikimedia.org/wikipedia/commons/a/a3/Image-not-found.png' }}" 
                     class="img-fluid w-100 object-fit-cover" 
                     style="max-height: 300px;" 
                     alt="{{ $project->title }}">
                <div class="card-body text-center">
                    <span class="badge rounded-pill {{ $project->is_completed ? 'bg-success' : 'bg-warning text-dark' }} mb-3">
                        {{ $project->status_label }}
                    </span>
                    <h5 class="text-muted small text-uppercase fw-bold mb-0">Project ID: #{{ $project->id }}</h5>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 p-4">
                <div class="d-flex justify-content-between align-items-start mb-4">
                    <div>
                        <h2 class="fw-bold text-dark mb-1">{{ $project->title }}</h2>
                        <p class="text-muted">Last updated: {{ $project->updated_at->format('d/m/Y H:i') }}</p>
                        <div class="mb-3">
                            <span class="badge rounded-pill bg-info border border-info px-3 py-2">
                                <i class="fas fa-tag me-1"></i>
                                {{ $project->category?->name ?? 'No Category' }}
                            </span>
                            <span class="badge rounded-pill text-info border px-3 py-2">
                                <i class="fas fa-tag me-1"></i>
                                {{ $project->type?->name ?? 'No Type' }}
                            </span>
                        </div>
                    </div>
                    
                    <div class="d-flex gap-2">
                        <a href="{{ route('projects.edit', $project) }}" class="btn btn-outline-dark rounded-pill px-4">
                            <i class="bi bi-pencil me-1"></i> Edit
                        </a>
                        <button type="button" class="btn btn-danger rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="bi bi-trash me-1"></i> Delete
                        </button>
                    </div>
                </div>

                <hr class="text-muted opacity-25">

                <div class="mt-4">
                    <h5 class="fw-bold mb-3">Description</h5>
                    <p class="text-secondary leading-relaxed" style="white-space: pre-wrap;">
                        {{ $project->description ?? 'No description provided for this project.' }}
                    </p>
                </div>

                <div class="mt-5">
                    <a href="{{ route('projects.index') }}" class="btn btn-light text-muted">
                        <i class="bi bi-arrow-left me-1"></i> Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header border-0 pt-4 px-4">
                <h5 class="modal-title fw-bold text-danger" id="deleteModalLabel">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>Danger Zone
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4">
                <p class="text-muted mb-0">Are you sure you want to delete <strong>{{ $project->title }}</strong>? This action is permanent and cannot be undone.</p>
            </div>
            <div class="modal-footer border-0 pb-4 px-4">
                <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Cancel</button>
                <form action="{{ route('projects.destroy', $project) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger rounded-pill px-4">Delete Permanently</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection