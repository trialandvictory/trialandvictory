import { defineConfig } from "vite"
import laravel from "laravel-vite-plugin"
import tailwindcss from "@tailwindcss/vite"

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.scss", "resources/js/app.ts"],
            refresh: true,
        }),
        tailwindcss(),
    ],
})

// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: ['resources/scss/app.scss', 'resources/ts/app.ts'],
//             refresh: true,
//         }),
//     ],
// });
