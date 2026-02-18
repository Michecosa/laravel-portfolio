<section id="contact" class="py-5 bg-slate-50">
    <div class="container py-lg-5 px-4">
        <div class="max-w-6xl mx-auto">
            
            <div class="text-center mb-5 pb-lg-4">
                <h2 class="display-5 fw-bold text-slate-900 mb-3">Get In Touch</h2>
                <div class="title-underline bg-cyan-500 mx-auto rounded-pill mb-4"></div>
                <p class="lead text-slate-600 max-w-2xl mx-auto">
                    Have a project in mind or want to collaborate? I'd love to hear
                    from you. Let's create something amazing together!
                </p>
            </div>

            <div class="row g-5">
                <div class="col-lg-6">
                    <h3 class="h2 fw-bold text-slate-900 mb-4">Let's Talk</h3>
                    <p class="text-slate-600 mb-5 fs-5 leading-relaxed">
                        Whether you have a question, want to discuss a project, or just
                        want to say hi, feel free to reach out. I'm always open to
                        discussing new projects, creative ideas, or opportunities to be
                        part of your vision.
                    </p>

                    <div class="d-flex flex-column gap-4">
                        <div class="d-flex align-items-start gap-3">
                            <div class="contact-icon-box btn-purple text-white rounded-3 p-3 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                            </div>
                            <div>
                                <h4 class="h6 fw-bold text-slate-900 mb-1 text-uppercase small tracking-wider">Email</h4>
                                <a href="mailto:michedellagatta@gmail.com" class="text-slate-900 text-decoration-none contact-link">
                                    michedellagatta@gmail.com
                                </a>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3">
                            <div class="contact-icon-box btn-purple text-white rounded-3 p-3 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                            <div>
                                <h4 class="h6 fw-bold text-slate-900 mb-1 text-uppercase small tracking-wider">Location</h4>
                                <p class="text-slate-600 mb-0">Remote / Available Worldwide</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="bg-white rounded-4 p-4 p-md-5 shadow-sm border border-light">
                        <form action="#" method="POST" class="contact-form">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold text-slate-900">Name</label>
                                <input type="text" class="form-control custom-input" id="name" name="name" placeholder="Your name" required>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold text-slate-900">Email</label>
                                <input type="email" class="form-control custom-input" id="email" name="email" placeholder="your.email@example.com" required>
                            </div>

                            <div class="mb-4">
                                <label for="message" class="form-label fw-bold text-slate-900">Message</label>
                                <textarea class="form-control custom-input" id="message" name="message" rows="5" placeholder="Tell me about your project..." required></textarea>
                            </div>

                            <button type="submit" class="btn btn-purple btn-transition-base btn-lg w-100 py-3 fw-bold d-flex align-items-center justify-content-center gap-2 shadow-sm transition-all">
                                Send Message
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" x2="11" y1="2" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>