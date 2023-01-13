import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                    'resources/css/perso.css',
                    'resources/js/app.js',
                    'resources/js/petition_share.js',
                    'resources/js/main_page.js'

                ],
            refresh: true,
        }),
    ],
});
