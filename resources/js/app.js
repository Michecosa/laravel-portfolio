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