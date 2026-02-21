@extends('layouts.admin')

@section('title', 'Edit Project')
@section('page_title', 'Edit: ' . $project->title)

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4 p-md-5">
                    <div class="d-flex align-items-center mb-4">
                        <a href="{{ route('projects.show', $project) }}" class="btn btn-light btn-sm rounded-circle me-3">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                        <h4 class="fw-bold mb-0">Project Details</h4>
                    </div>

                    <form action="{{ route('projects.update', $project) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="title" class="form-label fw-semibold text-muted small text-uppercase">Project Title</label>
                            <input type="text" name="title" id="title" 
                                   class="form-control form-control-lg bg-light border-0 rounded-3" 
                                   value="{{ old('title', $project->title) }}" 
                                   placeholder="Enter project name..." required>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="form-label fw-semibold text-muted small text-uppercase">Description</label>
                            <textarea name="description" id="description" rows="6" 
                                      class="form-control bg-light border-0 rounded-3" 
                                      placeholder="Describe your work...">{{ old('description', $project->description) }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="category_id" class="form-label fw-semibold text-muted small text-uppercase">Project Category</label>
                            <select name="category_id" id="category_id" 
                                    class="form-select form-select-lg bg-light border-0 rounded-3 @error('category_id') is-invalid @enderror">
                                <option value="">No Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" 
                                        {{ old('category_id', $project->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="type_id" class="form-label fw-semibold text-muted small text-uppercase">Project type</label>
                            <select name="type_id" id="type_id" 
                                    class="form-select form-select-lg bg-light border-0 rounded-3 @error('type_id') is-invalid @enderror">
                                <option value="" selected disabled>Select a type</option>
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>
                                        {{ $type->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('type_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-8 mb-4">
                                <label for="cover_image" class="form-label fw-semibold text-muted small text-uppercase">Cover Image URL</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0"><i class="bi bi-link-45deg"></i></span>
                                    <input type="text" name="cover_image" id="cover_image" 
                                           class="form-control bg-light border-0" 
                                           value="{{ old('cover_image', $project->cover_image) }}" 
                                           placeholder="https://example.com/image.jpg">
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <label class="form-label fw-semibold text-muted small text-uppercase d-block">Project Status</label>
                                <div class="form-check form-switch pt-2">
                                    <input class="form-check-input custom-switch" type="checkbox" role="switch" 
                                           name="is_completed" id="is_completed" value="1" 
                                           {{ old('is_completed', $project->is_completed) ? 'checked' : '' }}>
                                    <label class="form-check-label ms-2" for="is_completed">Completed</label>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4 opacity-25">

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('projects.index') }}" class="btn btn-light px-4 rounded-pill">Cancel</a>
                            <button type="submit" class="btn btn-primary px-5 rounded-pill shadow-sm" style="background-color: #6f42c1; border-color: #6f42c1;">
                                <i class="bi bi-check2-all me-2"></i> Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .form-control:focus, 
    .form-select:focus {
        background-color: #fff !important;
        border-color: #6f42c1 !important;
        box-shadow: 0 0 0 0.25rem rgba(111, 66, 193, 0.15);
        outline: 0;
    }

    .form-select {
        cursor: pointer;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .form-select-lg {
        font-size: 1rem;
    }

    .custom-switch {
        width: 3rem !important;
        height: 1.5rem !important;
        cursor: pointer;
    }

    .is-invalid {
        border: 1px solid #dc3545 !important;
        background-color: #fff !important;
    }
</style>
@endsection