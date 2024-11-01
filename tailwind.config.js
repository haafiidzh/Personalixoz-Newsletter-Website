/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
        "./resources/**/*.vue",
        "./resources/views/components/**/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins: ['Poppins'],
              },
        },
    },
};
