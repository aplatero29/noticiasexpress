module.exports = {
    purge: [
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        /* screens: {
            xs: "475px",
        }, */
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
