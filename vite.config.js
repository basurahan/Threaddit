import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [`resources/views/**/*`],
        }),
        tailwindcss(),
    ],
    server: {
        cors: true,
        host: true,
        hmr: {
            host: '192.168.0.103'
        }
    },
    resolve: {
        alias: {
            '@livewire': '/vendor/livewire/livewire/dist/livewire.esm.js'
        }
    }
});