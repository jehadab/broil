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
            output: {
                assetFileNames: (assetInfo) => {
                    const ext = assetInfo.name.split('.').pop();
                    if (/(ttf|woff2?|eot|otf)$/.test(ext)) {
                        return 'fonts/[name]-[hash][extname]';
                    }
                    return 'assets/[name]-[hash][extname]';
                },
            },
        },
    },
    // Make sure Vite knows to treat .ttf/.woff as assets
    assetsInclude: ['**/*.ttf', '**/*.woff', '**/*.woff2', '**/*.otf'],
});
