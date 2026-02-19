<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | @yield('title', 'Dashboard')</title>
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <style>
        body { 
            font-family: 'Inter', sans-serif; 
            background: linear-gradient(to right,#e9e9e9,#ffffff 95%);
        }
        .sidebar { 
            min-height: 100vh; 
            background-color: #212529; 
            color: white; width: 250px; 
            position: fixed; 
        }
        .sidebar .nav-link { 
            color: rgba(255,255,255,0.8); 
            margin-bottom: 5px; 
            border-radius: 5px; 
        }
        .sidebar .nav-pills .nav-link.active, 
        .sidebar .nav-pills .show > .nav-link {
            background-color: #6f42c1 !important;
            color: white;
        }

        .sidebar .nav-link:hover {
            background-color: rgba(111, 66, 193, 0.2); 
            color: white;
        }
        .main-content { 
            margin-left: 250px; 
            padding: 20px; 
            transition: all 0.3s; 
        }
        .navbar-custom { 
            background: white; 
            border-bottom: 1px solid #dee2e6; 
        }

        input[type="checkbox"]:checked {
            background-color: #6f42c1;
            border: 1px solid #6f42c1;
        }
        
        @media (max-width: 768px) {
            .sidebar { margin-left: -250px; }
            .main-content { margin-left: 0; }
            .sidebar.active { margin-left: 0; }
        }
    </style>
</head>
<body>
    <nav class="sidebar d-flex flex-column p-3">
        <div class="d-flex align-items-center mb-4 px-2">
            <i class="bi bi-stack fs-4 me-2" style="color: #6f42c1"></i>
            <span class="fs-5 fw-bold tracking-tight" style="letter-spacing: -0.5px;">Core<span style="color: #6f42c1">Admin</span></span>
        </div>
        
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('admin.index') }}" 
                class="nav-link {{ request()->routeIs('admin.index') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.profile') }}" 
                class="nav-link {{ request()->routeIs('admin.profile') ? 'active' : '' }}">
                    <i class="bi bi-person me-2"></i> Profile
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('projects.index') }}" 
                class="nav-link {{ request()->routeIs('projects.*') ? 'active' : '' }}">
                    <i class="bi bi-folder me-2"></i> Projects
                </a>
            </li>
        </ul>
        
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                <img src="https://i.pinimg.com/736x/35/c2/83/35c2838e747ae32b1ed326fd4444f760.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>{{ Auth::user()?->name ?? 'Admin' }}</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">Profilo</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form></li>
            </ul>
        </div>
    </nav>

    <main class="main-content">
        <nav class="navbar navbar-expand-lg navbar-custom mb-4 px-3 rounded shadow-sm">
            <div class="container-fluid">
                <div class="d-flex flex-column">
                    <span class="navbar-brand mb-0 h1 text-dark fw-bold">@yield('page_title', 'Overview')</span>
                    <small class="text-muted" style="font-size: 0.75rem;">
                        <i class="bi bi-circle-fill text-lime me-1" style="font-size: 0.5rem;"></i> 
                        System Ready — 
                        @auth
                            Welcome back, {{ Auth::user()->name }}
                        @else
                            Please log in to continue
                        @endauth
                    </small>
                </div>
                
                <div class="ms-auto d-flex align-items-center">
                    <button class="btn btn-light btn-sm rounded-circle shadow-sm position-relative me-2">
                        <i class="bi bi-bell-fill text-muted"></i>
                        <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
                    </button>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            @yield('content')
        </div>
    </main>
</body>
</html>