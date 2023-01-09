import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import livewire from '@defstudio/vite-livewire-plugin';
export default defineConfig({


    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/css/filament.css',
            'resources/js/app.js',

        ]),

        livewire({  // <-- add livewire plugin
            refresh: ['resources/css/app.css'],
            watch: [

                '**/domains/**/Livewire/**/*.php',
            ]
        }),
    ],



});
