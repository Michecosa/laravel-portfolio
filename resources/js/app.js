import './bootstrap';
import '~resources/scss/app.scss';
import '~icons/bootstrap-icons.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('main-header');
    const navLinks = document.querySelectorAll('a[href^="#"]');
    const navbarCollapse = document.getElementById('navbarNav');
    const bsCollapse = new bootstrap.Collapse(navbarCollapse, {toggle:false});

    // Handle Scroll
    const handleScroll = () => {
        if (window.scrollY > 20) {
            header.classList.add('scrolled');
            header.classList.remove('bg-transparent', 'py-4');
        } else {
            header.classList.remove('scrolled');
            header.classList.add('bg-transparent', 'py-4');
        }
    };

    window.addEventListener('scroll', handleScroll);
    handleScroll(); 
    
    // Smooth Scroll e chiusura menu mobile
    navLinks.forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            
            if (targetId === '#') {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            } else {
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            }

            // Chiude il menu mobile se aperto (Bootstrap)
            if (navbarCollapse.classList.contains('show')) {
                bsCollapse.hide();
            }
        });
    });
});




document.addEventListener('DOMContentLoaded', function () {
    const projectModal = document.getElementById('projectModal');
    
    projectModal.addEventListener('show.bs.modal', function (event) {
        // Il bottone che ha attivato il modale
        const button = event.relatedTarget;
        
        // Estraggo le info dagli attributi data-*
        const title = button.getAttribute('data-bs-title');
        const description = button.getAttribute('data-bs-description');
        const image = button.getAttribute('data-bs-image');
        const demo = button.getAttribute('data-bs-demo');

        // Popolp i campi del modale
        projectModal.querySelector('#modalTitle').textContent = title;
        projectModal.querySelector('#modalDescription').textContent = description;
        projectModal.querySelector('#modalImage').src = image;
        projectModal.querySelector('#modalDemoLink').href = demo;
    });
});