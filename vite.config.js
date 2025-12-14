import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        cors: true,
    },
    build: {
        // Code splitting and chunk optimization
        rollupOptions: {
            output: {
                manualChunks: undefined,
            }
        },
        // Use esbuild for minification (faster and included by default)
        minify: 'esbuild',
        // Reduce chunk size warnings threshold
        chunkSizeWarningLimit: 1000,
    },
});