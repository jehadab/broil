import './bootstrap';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

// Bootstrap Carousel Initialization
document.addEventListener('DOMContentLoaded', function() {
    if (typeof bootstrap !== 'undefined') {
        // console.error('Bootstrap not loaded!');

    const carousels = document.querySelectorAll('.carousel');
    carousels.forEach(carousel => {
        new bootstrap.Carousel(carousel, {
            interval: 3000,
            wrap: true,
            keyboard: true,
            pause: 'hover'
        });
    });
    console.log("hto")
    }

    // Navbar scroll behavior
    const navbar = document.querySelector('.navbar');
    let lastScrollTop = 0;
    // console.log("hto")

    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        // console.log("hi" , scrollTop);
        // At the top of the page - always show navbar
        if (scrollTop <= 10) {
            navbar.classList.remove('navbar-hidden');
            navbar.classList.add('navbar-visible');
            return;
        }

        // Scrolling down - hide navbar
        if (scrollTop > lastScrollTop) {
            navbar.classList.remove('navbar-visible');
            navbar.classList.add('navbar-hidden');
        }
        // Scrolling up - show navbar
        else {
            navbar.classList.remove('navbar-hidden');
            navbar.classList.add('navbar-visible');
        }

        lastScrollTop = scrollTop;
    });
});
