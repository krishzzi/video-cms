import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import livewire from '@defstudio/vite-livewire-plugin';
export default defineConfig({


    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
            'public/css/bootstrap.min.css','public/css/style.css'
        ]),

        livewire({  // <-- add livewire plugin
            refresh: ['resources/css/app.css'],
            watch: [

                '**/domains/**/Livewire/**/*.php',
            ]
        }),
    ],



});
