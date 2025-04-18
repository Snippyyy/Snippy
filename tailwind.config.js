import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import { start } from "alpinejs";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                funnel: ['"Funnel Display"', "sans-serif"],
                boldonse: ['"boldonse"', "sans-serif"],
                bytesized: ['"bytesized"', "sans-serif"],
                inconsolata: ['"inconsolata"', "monospace"],
                pressstart: ['"press-start-2p"', "cursive"],
            },
        },
    },

    plugins: [forms],
};
