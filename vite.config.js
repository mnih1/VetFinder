import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        watch: {
            usePolling: true,
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/mainNav.js'],
            refresh: true,
        }),
    ],
});
