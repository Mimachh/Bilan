import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/perso.css',
                'resources/js/app.js',
                'resources/js/main_page.js',
                'resources/js/petition_share.js',
                'resources/js/migration.js',
                'resources/js/economie.js',
                'resources/js/violence.js',
                'resources/js/testimonial.js',
                'resources/js/ruralite.js',
            ],
            refresh: true,
        }),
    ],
});
