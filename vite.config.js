import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        assetsDir: 'assets',
        rollupOptions: {
            output: {
                assetFileNames: ({name}) => {
                    if (/\.(woff2?|eot|ttf|otf)$/.test(name ?? '')) {
                        return 'fonts/[name].[hash][extname]'
                    }
                    return 'assets/[name].[hash][extname]'
                }
            }
        }
    }
});
