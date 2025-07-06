import './bootstrap';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

// Bootstrap Carousel Initialization
document.addEventListener('DOMContentLoaded', function () {
    if (typeof bootstrap !== 'undefined') {
        // console.error('Bootstrap not loaded!');

        const carousels = document.querySelectorAll('.carousel');
        carousels.forEach(carousel => {
            new bootstrap.Carousel(carousel, {
                interval: 3000,
                wrap: true,
                keyboard: true,
                pause: 'hover',
                touch: true // Enable touch/swipe on mobile
            });
        });
        console.log("hto")
    }

    // Navbar scroll behavior
    const navbar = document.querySelector('.navbar');
    let lastScrollTop = 0;
    // console.log("hto")

    window.addEventListener('scroll', function () {
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

    // Back to top functionality
    const backToTopButton = document.querySelectorAll('.back-to-top');
    // const backToTopContainer = document.querySelector('.back-to-top').parentElement;

    if (backToTopButton) {
        // Initially hide the button
        // backToTopContainer.style.opacity = '0';
        // backToTopContainer.style.pointerEvents = 'none';
        //
        // // Show/hide button based on scroll position
        // window.addEventListener('scroll', function() {
        //     let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        //
        //     if (scrollTop > 300) {
        //         backToTopContainer.style.opacity = '1';
        //         backToTopContainer.style.pointerEvents = 'auto';
        //     } else {
        //         backToTopContainer.style.opacity = '0';
        //         backToTopContainer.style.pointerEvents = 'none';
        //     }
        // });

        if (backToTopButton.length > 0) {
            for (let i = 0; i < backToTopButton.length; i++) {
                backToTopButton[i].addEventListener('click', function (e) {
                    e.preventDefault();
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }
        }
    }

});
    document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.mobile-slider');
    const track  = document.querySelector('.mobile-slider__track');
    const items  = track.querySelectorAll('.mobile-slider__item');
    const middleIndex = Math.floor(items.length / 2);
    const middleItem  = items[middleIndex];

    // Center the middle item:
    const itemCenter = middleItem.offsetLeft + middleItem.clientWidth / 2;
    const sliderCenter = slider.clientWidth / 2;
    slider.scrollLeft = itemCenter - sliderCenter;
});

// Wait for everything (images, fonts, etc.) to finish loading
window.addEventListener('load', function () {
    const preloader = document.getElementById('preloader');
    // Add class to fade it out
    preloader.classList.add('loaded');
    // Remove it from the DOM after transition finishes
    preloader.addEventListener('transitionend', () => {
        preloader.remove();
    });
});


