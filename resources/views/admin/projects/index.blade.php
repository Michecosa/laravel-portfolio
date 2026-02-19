@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="text-muted fw-light">Manage your works</h4>
    <a href="{{ route('projects.create') }}" class="btn btn-purple shadow-sm">
        <i class="bi bi-plus-lg me-1"></i> Add New Project
    </a>
</div>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    @forelse($projects as $project)
    <div class="col">
        <div class="card h-100 border-0 shadow-sm overflow-hidden transition-all">
            <div class="position-relative">
                <img src="{{ $project->cover_image ?? 'https://upload.wikimedia.org/wikipedia/commons/a/a3/Image-not-found.png' }}" 
                     class="card-img-top object-fit-cover" 
                     style="height: 200px;" 
                     alt="{{ $project->title }}">
                
                <span class="position-absolute top-0 end-0 m-3 badge rounded-pill {{ $project->is_completed ? 'bg-success' : 'bg-warning text-dark' }}">
                    {{ $project->status_label }}
                </span>
            </div>

            <div class="card-body p-4 d-flex flex-column">
                <div class="flex-grow-1">
                  <h5 class="card-title fw-bold text-dark mb-2">{{ $project->title }}</h5>
                  <p class="card-text text-muted small mb-4 text-truncate-2">
                      {{ Str::limit($project->description, 100) }}
                  </p>
                </div>
                
                <div class="d-flex justify-content-between align-items-baseline">
                    <a href="{{ route('projects.show', $project->id) }}" class="btn btn-outline-primary btn-sm px-3 rounded-pill">
                        View Details
                    </a>
                    
                    <div class="btn-group gap-1">
                        <div>
                          <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-light btn-sm text-secondary">
                              <i class="bi bi-pencil"></i>
                          </a>
                        </div>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Sei sicuro?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-light btn-sm text-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12 text-center py-5">
        <div class="p-5 bg-white rounded-4 shadow-sm">
            <i class="bi bi-folder-x fs-1 text-muted"></i>
            <p class="mt-3 text-muted">No projects found in your database.</p>
        </div>
    </div>
    @endforelse
</div>
@endsection

<style>
  .transition-all { transition: transform 0.2s ease-in-out, shadow 0.2s ease-in-out; }
  .transition-all:hover { transform: translateY(-5px); box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1)!important; }
  .text-truncate-2 {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;  
      overflow: hidden;
  }
</style>