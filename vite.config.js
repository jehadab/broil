import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    // Make sure Vite knows to treat .ttf/.woff as assets
    assetsInclude: ['**/*.ttf', '**/*.woff', '**/*.woff2', '**/*.otf'],
    // server: {
    //     host: '0.0.0.0', // Listen on all network interfaces
    //     hmr: {
    //         host: 'broil.chromaccs.com' // Your actual domain
    //     }
    // },
});
