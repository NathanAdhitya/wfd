import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import flowbite from 'flowbite/plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/flowbite-theme-toggle.js', "./node_modules/flowbite/**/*.js"],
            refresh: true,
        }),
        flowbite,
    ],
});
