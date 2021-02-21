module.exports = {
    purge: [],
    darkMode: false,
    theme: {
        fontFamily: {
            sans: ['Montserrat', 'sans-serif'],
        },
        extend: {
            letterSpacing: {
                two: '2px',
                two1: '2.25px',
                three: '3px',
            },
            screens: {
                '3xl': '1820px',
            },
            maxWidth: {
                'max-w-screen-3xl': '1820px',
            },
            colors: {
                'brand': '',
                'accent': '#b69670',
                'secondary': '#efe0c3',
                'third': '#3c3c3c',
                'quad': '#efe0c3',
            },
            backgroundColors: {
                'accent': '#b69670',
                'secondary': '#efe0c3',
                'third': '#3c3c3c',
                'quad': '#efe0c3',
            },

        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
