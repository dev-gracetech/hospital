import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/NiceAdmin/assets/css/style.css',
                'resources/NiceAdmin/assets/js/main.js',
            ],
            refresh: true,
        }),
    ],
});
