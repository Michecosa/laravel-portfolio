<header id="main-header" class="navbar navbar-expand-md fixed-top transition-all py-4 bg-white"> <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2 group" href="#" id="brand-logo">
            <div class="logo-icon-container d-flex align-items-center justify-content-center p-2 rounded-3 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-code2">
                    <path d="m18 16 4-4-4-4"/>
                    <path d="m6 8-4 4 4 4"/>
                    <path d="m14.5 4-5 16"/>
                </svg>
            </div>
            <span class="fw-bold fs-4 logo-text">Portfolio</span>
        </a>

        <button class="d-none navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon-custom">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="menu-icon"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-md-center gap-md-4 py-3 py-md-0 w-100 justify-content-end">
                @php
                    $links = [
                        ['href' => '#about', 'label' => 'About'],
                        ['href' => '#skills', 'label' => 'Skills'],
                        ['href' => '#projects', 'label' => 'Projects'],
                        ['href' => '#contact', 'label' => 'Contact'],
                    ];
                @endphp

                @foreach($links as $link)
                    <li class="nav-item text-center text-md-start">
                        <a class="nav-link custom-nav-link fw-semibold" href="{{ $link['href'] }}">{{ $link['label'] }}</a>
                    </li>
                @endforeach

                <li class="nav-item ms-md-2 text-center text-md-start mt-3 mt-md-0">
                    <a href="#contact" class="btn btn-purple px-4 py-2 fw-semibold shadow-sm w-100 w-md-auto">
                        Hire Me
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>