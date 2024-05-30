/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                "black": "#060606"
            },
            fontFamily: {
                "henken-grotesk": ["Henken Grotesk", "sans-self"]
            },
            fontSize: {
                "2xs": ".625rem" // 10px
            }
        },
    },
    plugins: [],
}

