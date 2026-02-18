@php
    $skills = [
        [
            'category' => 'Frontend',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 16V4a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12"/><path d="M2 20h20"/><path d="M4 16v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2"/></svg>',
            'color' => 'bg-blue-500',
            'techs' => ['React', 'Next.js', 'JavaScript', 'Bootstrap', 'Blade (Templating)']
        ],
        [
            'category' => 'Backend',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="8" x="2" y="2" rx="2" ry="2"/><rect width="20" height="8" x="2" y="14" rx="2" ry="2"/><line x1="6" x2="6.01" y1="6" y2="6"/><line x1="6" x2="6.01" y1="18" y2="18"/></svg>',
            'color' => 'bg-emerald-500',
            'techs' => ['PHP / Laravel', 'Node.js', 'Express', 'REST APIs']
        ],
        [
            'category' => 'Database',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="800px" width="800px" version="1.1" id="_x32_" viewBox="0 0 512 512" xml:space="preserve"> <style type="text/css"> .st0{fill:white;} </style> <g> <path class="st0" d="M459.991,82.262c-5.818-13.388-15.866-24.916-28.61-34.854c-19.179-14.896-44.758-26.522-74.674-34.691   C326.789,4.575,292.498,0,256,0c-55.622,0.036-106.071,10.548-143.848,28.374c-18.889,8.959-34.692,19.76-46.31,32.713   c-5.791,6.48-10.52,13.542-13.832,21.176c-3.304,7.634-5.146,15.866-5.138,24.29V405.44c-0.008,8.423,1.834,16.665,5.138,24.29   c5.818,13.388,15.866,24.915,28.61,34.863c19.18,14.896,44.757,26.523,74.675,34.692C185.211,507.425,219.503,511.992,256,512   c55.632-0.046,106.07-10.546,143.848-28.383c18.888-8.958,34.691-19.751,46.309-32.712c5.792-6.472,10.52-13.534,13.833-21.176   c3.304-7.624,5.146-15.867,5.137-24.29V106.552C465.137,98.128,463.295,89.896,459.991,82.262z M436.282,405.44   c-0.009,4.293-0.889,8.478-2.768,12.843c-3.268,7.597-9.849,15.766-19.861,23.545c-14.967,11.7-37.369,22.257-64.526,29.626   c-27.158,7.388-59.054,11.709-93.128,11.7c-51.909,0.046-98.818-10.084-131.503-25.606c-16.357-7.715-29.064-16.774-37.142-25.86   c-4.066-4.538-6.989-9.058-8.868-13.406c-1.88-4.366-2.76-8.55-2.769-12.843v-49.36c16.684,15.25,40.111,27.43,68.13,36.435   c32.304,10.32,70.789,16.247,112.152,16.256c55.16-0.027,105.164-10.493,142.306-28.029c14.931-7.08,27.693-15.368,37.976-24.798   V405.44z M436.282,321.198c-2.051,4.402-4.983,8.814-8.94,13.27c-12.78,14.396-35.917,27.948-65.77,37.442   c-29.844,9.548-66.287,15.23-105.572,15.222c-52.372,0.027-99.726-10.14-133.046-25.95c-16.674-7.87-29.763-17.137-38.294-26.714   c-3.958-4.456-6.89-8.868-8.942-13.26v-64.754c16.684,15.249,40.111,27.43,68.13,36.434   c32.304,10.311,70.789,16.238,112.152,16.248c55.16-0.028,105.164-10.492,142.306-28.03c14.931-7.08,27.693-15.357,37.976-24.788   V321.198z M436.282,221.572c-2.051,4.402-4.983,8.813-8.94,13.261c-12.78,14.395-35.917,27.956-65.77,37.441   c-29.844,9.549-66.287,15.231-105.572,15.222c-52.372,0.028-99.726-10.138-133.046-25.941   c-16.674-7.87-29.763-17.146-38.294-26.722c-3.958-4.448-6.89-8.859-8.942-13.261v-64.754c16.684,15.258,40.111,27.43,68.13,36.443   c32.304,10.32,70.789,16.247,112.152,16.247c55.16-0.027,105.164-10.484,142.306-28.029c14.931-7.08,27.693-15.358,37.976-24.789   V221.572z M436.282,121.936c-2.051,4.403-4.983,8.823-8.94,13.271c-12.78,14.405-35.917,27.956-65.77,37.451   c-29.844,9.548-66.287,15.23-105.572,15.222c-52.372,0.027-99.726-10.14-133.046-25.95c-16.674-7.879-29.763-17.147-38.294-26.722   c-3.958-4.448-6.89-8.868-8.942-13.262v-15.394c0.01-4.294,0.89-8.469,2.769-12.835c3.268-7.607,9.848-15.766,19.86-23.554   c14.968-11.7,37.369-22.256,64.526-29.617c27.158-7.398,59.053-11.709,93.127-11.7c51.91-0.046,98.819,10.085,131.504,25.606   c16.356,7.706,29.054,16.765,37.142,25.86c4.066,4.538,6.988,9.05,8.868,13.406c1.878,4.366,2.758,8.541,2.768,12.835V121.936z"/></g></svg>',
            'color' => 'bg-yellow-500',
            'techs' => ['MySQL', 'Oracle SQL']
        ],
        [
            'category' => 'Tools & Others',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 16 4-4-4-4"/><path d="m6 8-4 4 4 4"/><path d="m14.5 4-5 16"/></svg>',
            'color' => 'bg-orange-500',
            'techs' => ['Git', 'Vite', 'Apache Tomcat']
        ],
        [
            'category' => 'UI/UX',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>',
            'color' => 'bg-pink-500',
            'techs' => ['Responsive Design', 'Accessibility', 'Animation']
        ],
        [
            'category' => 'Mobile',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"/><path d="M12 18h.01"/></svg>',
            'color' => 'bg-violet-500',
            'techs' => ['React Native', 'Mobile-First Design']
        ],
    ];
@endphp

<section id="skills" class="py-5 bg-body-tertiary">
    <div class="container py-5 px-4">
        <div class="max-w-6xl mx-auto">
            
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-slate-900 mb-3">Skills & Technologies</h2>
                <div class="title-underline bg-cyan-500 mx-auto rounded-pill mb-4"></div>
                <p class="lead text-slate-600 max-w-2xl mx-auto">
                    A comprehensive toolkit of modern technologies and frameworks to
                    build robust, scalable applications
                </p>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-flex align-items-stretch">
                @foreach($skills as $skill)
                <div class="col d-flex"> <div class="skill-card soft-transition w-100 h-100 bg-white rounded-4 p-4 p-xl-5 shadow-sm transition-all d-flex flex-column">
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div class="skill-icon-container {{ $skill['color'] }} rounded-3 p-2 text-white d-flex align-items-center justify-content-center">
                                {!! $skill['icon'] !!}
                            </div>
                            <h3 class="h4 fw-bold text-slate-900 mb-0">{{ $skill['category'] }}</h3>
                        </div>

                        <div class="d-flex flex-wrap gap-2"> @foreach($skill['techs'] as $tech)
                                <span class="badge-tech px-3 py-2 rounded-3 text-slate-700 fw-medium bg-light">
                                    {{ $tech }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>