import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',

                // css file paths
                'resources/auth/assets/css/argon-dashboard-tailwind.min.css',
                'resources/auth/assets/css/argon-dashboard-tailwind.css',
                'resources/auth/assets/css/nucleo-icons.css',
                'resources/auth/assets/css/nucleo-svg.css',
                'resources/auth/assets/css/perfect-scrollbar.css',
                'resources/auth/assets/css/tooltips.css',

                // js file paths
                'resources/auth/assets/js/argon-dashboard-tailwind.js',
                'resources/auth/assets/js/charts.js',
                'resources/auth/assets/js/perfect-scrollbar.js'
            ],
            refresh: true,
        }),
    ],
    // server:{
    //     https:true,
    //     host:'https://student.xyscoempire.com'
    // }
});
