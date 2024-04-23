import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";
const plugin = require("tailwindcss/plugin");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
    ],
    darkMode: "class",
    theme: {
        extend: {
            backgroundImage: {
                fondo_mobile: "url('../../public/images/img/fondo_mobile.png')",
                imagen_header:
                    "url('../../public/build/assets/imagen_header-jw40j6_R.png')",
                imagen_form_fondo:
                    "url('../../public/images/img/imagen_form_fondo.png')",
                header_mobile:
                    "url('../../public/images/img/header_mobile_1.png')",
                header_principal:
                    "url('../../public/images/img/header_principal.png')",
                header_principal_1:
                    "url('../../public/images/img/header_principal_1.png')",
                diferenciales_banner:
                    "url('../../public/images/img/diferenciales_banner.png')",
                banner_3: "url('../../public/images/img/banner_3.png')",
                banner_2: "url('../../public/images/img/banner_2.png')",
                header_image: "url('../../public/images/img/Frame 37752.png')",
                header_mobile_5:
                    "url('../../public/images/img/Frame 37752.png')",
                fondo2: "url('../../public/images/img/Fondo 2.png')",
                fondomobile2: "url('../../public/images/img/FondoMobile2.png')",
                HeaderMobile2:
                    "url('../../public/images/img/HeaderMobile2.png')",
                HeaderMobile2_1:
                    "url('../../public/images/img/FondoMobile2_1.png')",
            },
            fontWeight: {
                medium: "500",
                regular: "400",
                semibold: "600",
            },
            boxShadow: {
                DEFAULT:
                    "0 1px 3px 0 rgba(0, 0, 0, 0.08), 0 1px 2px 0 rgba(0, 0, 0, 0.02)",
                md: "0 4px 6px -1px rgba(0, 0, 0, 0.08), 0 2px 4px -1px rgba(0, 0, 0, 0.02)",
                lg: "0 10px 15px -3px rgba(0, 0, 0, 0.08), 0 4px 6px -2px rgba(0, 0, 0, 0.01)",
                xl: "0 20px 25px -5px rgba(0, 0, 0, 0.08), 0 10px 10px -5px rgba(0, 0, 0, 0.01)",
            },
            outline: {
                blue: "2px solid rgba(0, 112, 244, 0.5)",
            },
            fontFamily: {
                corbel_400: "corbelregular",
                corbel_700: "corbelbold",
                corbel_italic: "corbelitalic",
                corbel_300: "corbellight",
                corbel_700_italic: "corbelbold_italic",
            },
            fontSize: {
                xs: ["0.75rem", { lineHeight: "1.5" }],
                sm: ["0.875rem", { lineHeight: "1.5715" }],
                base: ["1rem", { lineHeight: "1.5", letterSpacing: "-0.01em" }],
                lg: [
                    "1.125rem",
                    { lineHeight: "1.5", letterSpacing: "-0.01em" },
                ],
                xl: [
                    "1.25rem",
                    { lineHeight: "1.5", letterSpacing: "-0.01em" },
                ],
                "2xl": [
                    "1.5rem",
                    { lineHeight: "1.33", letterSpacing: "-0.01em" },
                ],
                "3xl": [
                    "1.88rem",
                    { lineHeight: "1.33", letterSpacing: "-0.01em" },
                ],
                "4xl": [
                    "2.25rem",
                    { lineHeight: "1.25", letterSpacing: "-0.02em" },
                ],
                "5xl": [
                    "3rem",
                    { lineHeight: "1.25", letterSpacing: "-0.02em" },
                ],
                "6xl": [
                    "3.75rem",
                    { lineHeight: "1.2", letterSpacing: "-0.02em" },
                ],
                mediumSize: "56px",
                regularSize: "18px",
                basicSize: "16px",
                basic: "14px",
                basicLittle: "12px",
                subtitle: "48px",
                littleTitle: "24px",
                middleTitle: "40px",
                middle: "32px",

                text12: "12px",
                text14: "14px",
                text16: "16px",
                text18: "18px",
                text20: "20px",
                text22: "22px",
                text24: "24px",
                text28: "28px",
                text32: "32px",
                text36: "36px",
                text40: "40px",
                text44: "44px",
                text48: "48px",
                text52: "52px",
                text56: "56px",
                text60: "60px",
                text64: "68px",
                text72: "72px",
                text76: "76px",
            },

            backgroundColor: {
                colorButton: "#173525",
                colorBackground: "#2D694B",
                colorFooter: "#173525",
                colorCombo: "#F9FCFB",
                bgGray: "#505977",
                bgGrayStrong: "#393F53",
                bgOrangeStrong: "#E38533",
                bgPurpose: "#EFF1FB",
                bgYellow: "#FCF0E7",
            },
            textColor: {
                colorSubtitle: "#113E55",
                colorSubtitleLittle: "#173525",
                colorAdd: "#2D694B",
                textWhiteWeak: "#FCFBFA",
                textWhite: "#FFFFFF",
                textGray: "#505977",
                textGrayWeak: "#EFF1FB",
                textGrayStrong: "#393F53",
                textOrange: "#E38533",
            },
            borderColor: {
                selectCheck: "#173525",
                borderOrange: "#E38533",
            },

            screens: {
                xs: "320px",
                "2xs": "370px",
                sm: "640px",
                md: "768px",
                "2md": "950px",
                lg: "1024px",
                xl: "1280px",
                "2xl": "1536px",
            },
            borderWidth: {
                3: "3px",
            },
            minWidth: {
                36: "9rem",
                44: "11rem",
                56: "14rem",
                60: "15rem",
                72: "18rem",
                80: "20rem",
            },
            maxWidth: {
                "8xl": "88rem",
                "9xl": "96rem",
            },
            zIndex: {
                60: "60",
            },
        },
    },

    plugins: [
        forms,
        typography,
        // add custom variant for expanding sidebar
        plugin(({ addVariant, e }) => {
            addVariant("sidebar-expanded", ({ modifySelectors, separator }) => {
                modifySelectors(
                    ({ className }) =>
                        `.sidebar-expanded .${e(
                            `sidebar-expanded${separator}${className}`
                        )}`
                );
            });
        }),
    ],
};
