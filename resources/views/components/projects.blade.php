<section id="projects" class="py-5 bg-white">
    <div class="container py-lg-5 px-4">
        <div class="max-w-6xl mx-auto">
            
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-slate-900 mb-3">Featured Projects</h2>
                <div class="title-underline bg-cyan-500 mx-auto rounded-pill mb-4"></div>
                <p class="lead text-slate-600 max-w-2xl mx-auto">
                    A selection of projects that showcase my skills and passion for
                    creating exceptional web experiences
                </p>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @forelse($projects as $project)
                <div class="col">
                    <div class="project-card soft-transition h-100 bg-white rounded-4 overflow-hidden shadow-sm transition-all">
                        <div class="project-image-wrapper position-relative overflow-hidden">
                            <img src="{{ $project->cover_image ?? 'https://upload.wikimedia.org/wikipedia/commons/a/a3/Image-not-found.png?20210521171500' }}" 
                                 alt="{{ $project->title }}" 
                                 class="project-img w-100 h-100 object-fit-cover">
                            
                            <div class="project-overlay d-flex align-items-end justify-content-center pb-4 gap-3">
                                <button type="button" 
                                    class="btn-project-icon bg-transparent text-white border-0" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#projectModal"
                                    data-bs-title="{{ $project->title }}"
                                    data-bs-description="{{ $project->description }}"
                                    data-bs-image="{{ $project->cover_image ?? 'https://upload.wikimedia.org/wikipedia/commons/a/a3/Image-not-found.png?20210521171500' }}"
                                    aria-label="View Details">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                                </button>
                            </div>
                        </div>

                        <div class="p-4">
                            <h3 class="h5 fw-bold text-slate-900 mb-3 project-title-hover">{{ $project->title }}</h3>
                            <p class="text-slate-600 mb-4 small leading-relaxed">
                                {{ $project->description }}
                            </p>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <p class="text-muted">No projects found. Stay tuned!</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 overflow-hidden">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 p-md-5 pt-2">
                <img src="" id="modalImage" class="w-100 rounded-4 mb-4 object-fit-cover" style="max-height: 400px;" alt="Project Cover">
                <h2 class="fw-bold text-slate-900 mb-3" id="modalTitle"></h2>
                <div class="title-underline bg-cyan-500 rounded-pill mb-4" style="width: 60px; height: 4px;"></div>
                <p class="text-slate-600 lead mb-4" id="modalDescription"></p>
                
            </div>
        </div>
    </div>
</div>