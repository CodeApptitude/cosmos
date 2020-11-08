module.exports = {
    experimental: {
        applyComplexClasses: true,
    },
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
    },
    purge: [
        './*.php',
        './templates/**/*.php',
    ],
    theme: {
        extend: {},
    },
    variants: {},
    plugins: [],
}
