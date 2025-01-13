import defaultTheme from 'tailwindcss/defaultTheme';
import daisyui from "daisyui";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js'
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Onest', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'heading-medium': '24px',
                'heading-small': '20px',
                'paragraph-large': '16px',
                'paragraph-medium': '14px',
                'paragraph-small': '12px',
                'label-large': '16px',
                'label-medium': '14px',
                'label-small': '12px'
            },
            lineHeight: {
                'heading-medium': '32px',
                'heading-small': '24px',
                'paragraph-large': '20px',
                'paragraph-medium': '16px',
                'paragraph-small': '14px',
                'label-large': '20px',
                'label-medium': '16px',
                'label-small': '12px'
            },
            backgroundColor: {
                'primary': '#080807',
                'secondary': '#110F0E',
                'tertiary': '#1C1917',
                'blur': '#0B0A09, 1%',
                'orange': '#ED712E',
                'red': '#EB4B5B',
                'blue': '#55A1F2',
                'green': '#44CB93',
                'purple': '#9D8AFE'
            },
            colors: {
                'content-primary': '#FFFFFF',
                'content-secondary': '#A3A3A3',
                'content-tertiary': '#696663',
                'content-inverse': '#0A0908',
                'orange': '#ED712E'
            },
            borderColor: {
                'primary': '#161412',
                'orange': '#ED712E'
            },
              maxWidth: {
                '1192': '1192px',
              }
        },
    },
    plugins: [
        daisyui,
    ],
};
