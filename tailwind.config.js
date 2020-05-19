const plugin = require("tailwindcss");

module.exports = {
    variants: {
        opacity: ["responsive", "hover", "focus", "disabled"],
        cursor: ["responsive", "disabled"],
        borderWidth: ["responsive", "first", "hover", "focus"]
    },
    plugins: [
        plugin(function({ addVariant, e }) {
            addVariant("disabled", ({ modifySelectors, separator }) => {
                modifySelectors(({ className }) => {
                    return `.${e(`disabled${separator}${className}`)}:disabled`;
                });
            });
        })
    ]
};
