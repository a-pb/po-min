import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js'
            ],
            refresh: false,
            publicDirectory: 'public',
            detectTls: 'pomin.loc',
        }),

        viteStaticCopy({
            targets: [

                // COPY DEPENDENCIES
                {
                    src: 'node_modules/font-awesome/fonts/*',
                    dest: '../assets/vendor/fonts'
                },{
                    src: 'node_modules/moment/min/*',
                    dest: '../assets/vendor/moment'
                },{
                    src: 'node_modules/bootstrap/*',
                    dest: '../assets/vendor/bootstrap'
                },

                // COPY RESOURCES
                {
                    src: 'resources/files/*',
                    dest: '../assets/files'
                },{
                    src: 'resources/fonts/*',
                    dest: '../assets/fonts'
                },{
                    src: 'resources/images/*',
                    dest: '../build/assets/images'
                }
            ]
        })
    ],
    build: {
        // assetsInlineLimit: 0,
        // manifest: true,
        // copyPublicDir: false,
        // outDir: 'public/',
        assetsDir: '',
        // ssrManifest: false
    }
});
