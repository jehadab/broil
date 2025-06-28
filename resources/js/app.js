import './bootstrap';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

// Bootstrap Carousel Initialization
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all carousels
    const carousels = document.querySelectorAll('.carousel');
    carousels.forEach(carousel => {
        new bootstrap.Carousel(carousel, {
            interval: 5000, // Auto-play every 5 seconds
            wrap: true, // Continuous loop
            keyboard: true, // Keyboard navigation
            pause: 'hover' // Pause on hover
        });
    });
});
