import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
const host = 'dev.local';

export default defineConfig({
    server: {
        hmr: { host },
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
