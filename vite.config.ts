import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import { defineConfig } from 'vite';
import fs from 'fs';

export default defineConfig({
    server: {
        https: {
            key: fs.readFileSync('./certs/hris.test-key.pem'),
            cert: fs.readFileSync('./certs/hris.test-cert.pem'),
        },
        host: 'hris.test',
        port: 5173,
        strictPort: true,
        hmr: {
            host: 'hris.test',
        },
        headers: {
            'Access-Control-Allow-Origin': '*',
        },
    },
    plugins: [
        laravel({
            input: ['resources/js/app.ts'],
            ssr: 'resources/js/ssr.ts',
            refresh: true,
        }),
        tailwindcss(),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
});
