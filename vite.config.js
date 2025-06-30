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
    build: {
        rollupOptions: {
            // Put font files into a “fonts” folder under /build
            manifest: true,
            rollupOptions: {
                output: {
                    entryFileNames: `assets/[name].[hash].js`,
                    assetFileNames: `assets/[name].[hash].[ext]`
                }
            },

        },
    },
    // Make sure Vite knows to treat .ttf/.woff as assets
    assetsInclude: ['**/*.ttf', '**/*.woff', '**/*.woff2', '**/*.otf'],
});
