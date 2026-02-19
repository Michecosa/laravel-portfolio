@extends('layouts.admin')

@section('title', 'Admin Profile')
@section('page_title', 'User Profile')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm rounded-4 text-center p-4">
                <div class="position-relative d-inline-block mx-auto mb-3">
                    <img src="https://i.pinimg.com/736x/35/c2/83/35c2838e747ae32b1ed326fd4444f760.jpg" 
                         alt="Admin Avatar" 
                         class="rounded-circle shadow-sm border border-4 border-white" 
                         width="120" height="120" style="object-fit: cover;">
                    <span class="position-absolute bottom-0 end-0 bg-success border border-2 border-white rounded-circle p-2" title="Online"></span>
                </div>
                <h4 class="fw-bold mb-1">{{ Auth::user()?->name }}</h4>
                <p class="text-muted small mb-3">{{ Auth::user()?->email }}</p>
                
                <div class="d-grid shadow-sm rounded-3 overflow-hidden">
                    <div class="bg-light p-2 border-bottom">
                        <small class="text-uppercase fw-bold text-muted" style="font-size: 0.65rem;">Role</small>
                        <p class="mb-0 fw-semibold text-dark">Administrator</p>
                    </div>
                    <div class="bg-light p-2">
                        <small class="text-uppercase fw-bold text-muted" style="font-size: 0.65rem;">Member Since</small>
                        <p class="mb-0 fw-semibold text-dark">{{ Auth::user()?->created_at->format('M Y') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                <h5 class="fw-bold mb-4">Account Settings</h5>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold text-muted small text-uppercase">Full Name</label>
                        <div class="p-3 bg-light rounded-3 border-0">
                            {{ Auth::user()?->name }}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold text-muted small text-uppercase">Email Address</label>
                        <div class="p-3 bg-light rounded-3 border-0">
                            {{ Auth::user()?->email }}
                        </div>
                    </div>

                    <div class="col-12 mt-4">
                        <div class="d-flex align-items-center p-3 rounded-4" style="background-color: rgba(111, 66, 193, 0.05); border: 1px dashed #6f42c1;">
                            <div class="flex-shrink-0">
                                <i class="bi bi-shield-check fs-2 text-primary" style="color: #6f42c1 !important;"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1 fw-bold">Security & Privacy</h6>
                                <p class="mb-0 text-muted small">Your account is currently protected by standard Laravel authentication.</p>
                            </div>
                            <a href="{{ route('profile.edit') }}" class="btn btn-primary rounded-pill btn-sm px-4" style="background-color: #6f42c1; border-color: #6f42c1;">
                                Edit Profile
                            </a>
                        </div>
                    </div>
                </div>

                <hr class="my-5 opacity-25">

                <div class="p-4 rounded-4" style="background-color: rgba(220, 53, 69, 0.05);">
                    <h6 class="text-danger fw-bold mb-2">Delete Account</h6>
                    <p class="text-muted small mb-3">Once you delete your account, all of your resources and data will be permanently deleted.</p>
                    <button class="btn btn-outline-danger btn-sm rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">
                        Delete Account...
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection