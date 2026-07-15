/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scripts/CTABand.js"
/*!********************************!*\
  !*** ./src/scripts/CTABand.js ***!
  \********************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


function CTABand({
  heading,
  subtext,
  cta1Text,
  cta1Href,
  cta2Text,
  cta2Href
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("section", {
    className: "ipr-ctaband",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "ipr-ctaband__pattern",
      "aria-hidden": "true"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "ipr-ctaband__inner",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
        className: "ipr-ctaband__eyebrow",
        children: "Dispatch Ready"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h2", {
        className: "ipr-ctaband__heading",
        children: heading
      }), subtext ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
        className: "ipr-ctaband__subtext",
        children: subtext
      }) : null, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "ipr-ctaband__actions",
        children: [cta1Text && cta1Href ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
          href: cta1Href,
          className: "ipr-ctaband__tab ipr-ctaband__tab--yellow",
          children: cta1Text
        }) : null, cta2Text && cta2Href ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
          href: cta2Href,
          className: "ipr-ctaband__tab ipr-ctaband__tab--ink",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            className: "ipr-ctaband__tab-inner",
            children: cta2Text
          })
        }) : null]
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("style", {
      children: `
        .ipr-ctaband {
          position: relative;
          overflow: hidden;
          background: var(--ipr-ink, #10263B);
          padding: 4rem 1.5rem;
          text-align: center;
          border-top: 5px solid transparent;
          border-bottom: 5px solid transparent;
          border-image: linear-gradient(90deg, var(--ipr-yellow, #F3B200) 0%, var(--ipr-wheat, #C68A3D) 100%) 1;
        }

        /* Estampado cruzado (rombos), mismo lenguaje visual que las demás
           franjas oscuras del sitio (Marquee / Why Us) para que la banda
           se lea como parte de la familia y no como un bloque suelto. */
        .ipr-ctaband__pattern {
          position: absolute;
          inset: 0;
          background-image:
            repeating-linear-gradient(45deg, var(--ipr-yellow, #F3B200) 0, var(--ipr-yellow, #F3B200) 1.5px, transparent 1.5px, transparent 24px),
            repeating-linear-gradient(-45deg, var(--ipr-yellow, #F3B200) 0, var(--ipr-yellow, #F3B200) 1.5px, transparent 1.5px, transparent 24px);
          opacity: 0.1;
          mix-blend-mode: overlay;
          pointer-events: none;
        }

        .ipr-ctaband__inner {
          position: relative;
          z-index: 1;
          max-width: 720px;
          margin: 0 auto;
        }

        .ipr-ctaband__eyebrow {
          display: inline-block;
          font-family: "IBM Plex Mono", monospace;
          font-size: 0.68rem;
          font-weight: 700;
          letter-spacing: 0.22em;
          text-transform: uppercase;
          color: var(--ipr-yellow, #F3B200);
          padding-bottom: 0.4rem;
          border-bottom: 1px dashed rgba(254, 254, 254, 0.35);
        }

        .ipr-ctaband__heading {
          margin-top: 1.1rem;
          font-family: 'Oswald', 'Segoe UI', Arial, sans-serif;
          font-size: 2rem;
          font-weight: 700;
          text-transform: uppercase;
          letter-spacing: -0.01em;
          line-height: 1.15;
          color: var(--ipr-white, #FEFEFE);
        }

        @media (min-width: 768px) {
          .ipr-ctaband__heading { font-size: 2.6rem; }
        }

        .ipr-ctaband__subtext {
          margin-top: 1rem;
          font-family: "IBM Plex Sans", "Segoe UI", Arial, sans-serif;
          font-size: 1rem;
          line-height: 1.6;
          color: rgba(254, 254, 254, 0.78);
        }

        .ipr-ctaband__actions {
          margin-top: 2rem;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          gap: 1rem;
        }

        @media (min-width: 640px) {
          .ipr-ctaband__actions { flex-direction: row; }
        }

        .ipr-ctaband__tab {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          gap: 0.5rem;
          padding: 1rem 2rem 1rem 1.5rem;
          font-family: "IBM Plex Mono", monospace;
          font-size: 0.82rem;
          font-weight: 700;
          letter-spacing: 0.08em;
          text-transform: uppercase;
          text-decoration: none;
          clip-path: polygon(0 0, calc(100% - 16px) 0, 100% 50%, calc(100% - 16px) 100%, 0 100%);
          transition: transform .2s ease, filter .2s ease;
        }

        .ipr-ctaband__tab:hover {
          transform: translateX(3px);
        }

        .ipr-ctaband__tab--yellow {
          background: var(--ipr-yellow, #F3B200);
          color: var(--ipr-ink, #10263B);
        }

        .ipr-ctaband__tab--yellow:hover { filter: brightness(1.08); }

        .ipr-ctaband__tab--ink {
          background: rgba(254, 254, 254, 0.12);
          padding: 0;
        }

        .ipr-ctaband__tab--ink:hover {
          background: rgba(254, 254, 254, 0.22);
        }

        .ipr-ctaband__tab-inner {
          display: flex;
          align-items: center;
          justify-content: center;
          gap: 0.5rem;
          margin: 2px;
          padding: calc(1rem - 2px) calc(2rem - 2px) calc(1rem - 2px) calc(1.5rem - 2px);
          border: 2px solid rgba(254, 254, 254, 0.45);
          color: var(--ipr-white, #FEFEFE);
          clip-path: polygon(0 0, calc(100% - 14px) 0, 100% 50%, calc(100% - 14px) 100%, 0 100%);
        }

        @media (prefers-reduced-motion: reduce) {
          .ipr-ctaband__tab { transition: none !important; }
        }
      `
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (CTABand);

/***/ },

/***/ "./src/scripts/ExampleReactComponent.js"
/*!**********************************************!*\
  !*** ./src/scripts/ExampleReactComponent.js ***!
  \**********************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


function ExampleReactComponent() {
  const [clickCount, setClickCount] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(0);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-4 rounded-md",
    onClick: () => setClickCount(prev => prev + 1),
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h1", {
      className: "text-xl",
      children: "Hello from React!"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
      className: "text-sm",
      children: ["You have clicked on this component", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        className: "text-yellow-200 font-bold",
        children: clickCount
      }), " times."]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ExampleReactComponent);

/***/ },

/***/ "./src/scripts/Footer.js"
/*!*******************************!*\
  !*** ./src/scripts/Footer.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


const QUICK_LINKS = [{
  label: "Home",
  href: "/"
}, {
  label: "Services",
  href: "/services"
}, {
  label: "Service Area",
  href: "/service-area"
}, {
  label: "About",
  href: "/about"
}, {
  label: "Contact",
  href: "/contact"
}];
const SERVICE_LINKS = [{
  label: "Standard Restrooms",
  href: "/services#standard-portable-restrooms"
}, {
  label: "ADA Units",
  href: "/services#ada-accessible-units"
}, {
  label: "Handwash Stations",
  href: "/services#handwash-stations"
}, {
  label: "Restroom Trailers & Doubles",
  href: "/services#restroom-trailers-doubles"
}, {
  label: "Emergency Service",
  href: "/services#emergency-service"
}, {
  label: "Flexible Rental Terms",
  href: "/services#flexible-rental-terms"
}];

// [REDES — Pend. #E] Completar href cuando el cliente confirme sus perfiles reales.
// Los que queden con href vacío no se renderizan.
const SOCIAL_LINKS = [{
  label: "Facebook",
  href: ""
}, {
  label: "Instagram",
  href: ""
}, {
  label: "Google",
  href: ""
}];
const LOCAL_BUSINESS_SCHEMA = {
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  name: "Independent Portable Restrooms",
  address: {
    "@type": "PostalAddress",
    streetAddress: "207 NW First Street",
    addressLocality: "Boardman",
    addressRegion: "OR",
    postalCode: "97818",
    addressCountry: "US"
  },
  telephone: "+1-541-481-3111",
  openingHours: "Mo-Fr 08:00-17:00",
  areaServed: ["Arlington OR", "Boardman OR", "Heppner OR", "Irrigon OR", "Umatilla OR", "Hermiston OR", "Pendleton OR", "Plymouth WA", "Kennewick WA", "Pasco WA", "Richland WA"]
};
function Footer() {
  const activeSocialLinks = SOCIAL_LINKS.filter(function hasHref(social) {
    return social.href && social.href.length > 0;
  });
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("footer", {
    className: "ipr-footer",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "ipr-footer__top",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "ipr-footer__col",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
          href: "/",
          className: "ipr-footer__brand",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            className: "ipr-nav__tag",
            children: "IPR"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            children: "Independent Portable Restrooms"
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
          className: "ipr-footer__tagline",
          children: "Clean, reliable portable restrooms across the Columbia Basin \u2014 farms, job sites, and events."
        }), activeSocialLinks.length > 0 && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "ipr-footer__social",
          children: activeSocialLinks.map(function renderSocial(social) {
            return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: social.href,
              target: "_blank",
              rel: "noopener noreferrer",
              className: "ipr-footer__social-link",
              children: social.label
            }, social.label);
          })
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "ipr-footer__col",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
          className: "ipr-footer__heading",
          children: "Quick Links"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("ul", {
          className: "ipr-footer__list",
          children: QUICK_LINKS.map(function renderQuickLink(link) {
            return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                href: link.href,
                children: link.label
              })
            }, link.href);
          })
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "ipr-footer__col",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
          className: "ipr-footer__heading",
          children: "Services"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("ul", {
          className: "ipr-footer__list",
          children: SERVICE_LINKS.map(function renderServiceLink(link) {
            return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                href: link.href,
                children: link.label
              })
            }, link.href);
          })
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "ipr-footer__col",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
          className: "ipr-footer__heading",
          children: "Contact"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("address", {
          className: "ipr-footer__address",
          children: ["207 NW First Street", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("br", {}), "Boardman, OR 97818"]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
          href: "tel:+15414813111",
          className: "ipr-footer__phone",
          children: ["Office: 541-481-3111", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            className: "ipr-footer__hours",
            children: "Mon\u2013Fri 8am\u20135pm"
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
          href: "tel:+15417017369",
          className: "ipr-footer__phone ipr-footer__phone--emergency",
          children: ["Emergency: 541-701-7369", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            className: "ipr-footer__hours",
            children: "24/7"
          })]
        })]
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "ipr-footer__bottom",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
        children: ["\xA9 ", new Date().getFullYear(), " Independent Portable Restrooms. All rights reserved."]
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("script", {
      type: "application/ld+json",
      dangerouslySetInnerHTML: {
        __html: JSON.stringify(LOCAL_BUSINESS_SCHEMA)
      }
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Footer);

/***/ },

/***/ "./src/scripts/Navbar.js"
/*!*******************************!*\
  !*** ./src/scripts/Navbar.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


const NAV_ITEMS = [{
  label: "Home",
  href: "/home"
}, {
  label: "Services",
  href: "/services"
}, {
  label: "Service Area",
  href: "/service-area"
}, {
  label: "About",
  href: "/about"
}, {
  label: "Contact",
  href: "/contact"
}];
const SOCIAL_LINKS = [{
  label: "Facebook",
  href: "#",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    viewBox: "0 0 24 24",
    width: "16",
    height: "16",
    fill: "currentColor",
    "aria-hidden": "true",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M22 12.06C22 6.5 17.52 2 12 2S2 6.5 2 12.06c0 5 3.66 9.16 8.44 9.94v-7.03H7.9v-2.91h2.54V9.85c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.23.2 2.23.2v2.45h-1.26c-1.24 0-1.63.77-1.63 1.56v1.87h2.78l-.44 2.91h-2.34v7.03C18.34 21.22 22 17.06 22 12.06Z"
    })
  })
}, {
  label: "Instagram",
  href: "#",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    viewBox: "0 0 24 24",
    width: "16",
    height: "16",
    fill: "none",
    stroke: "currentColor",
    strokeWidth: "1.7",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
      x: "3",
      y: "3",
      width: "18",
      height: "18",
      rx: "5"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
      cx: "12",
      cy: "12",
      r: "4.2"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
      cx: "17.3",
      cy: "6.7",
      r: "1",
      fill: "currentColor",
      stroke: "none"
    })]
  })
}, {
  label: "Google",
  href: "#",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    viewBox: "0 0 24 24",
    width: "16",
    height: "16",
    fill: "currentColor",
    "aria-hidden": "true",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M21.35 11.1h-9.17v2.98h5.27c-.23 1.36-1.6 4-5.27 4-3.17 0-5.76-2.62-5.76-5.85s2.59-5.85 5.76-5.85c1.8 0 3.01.77 3.7 1.43l2.53-2.44C16.94 3.66 14.7 2.7 12.18 2.7 6.98 2.7 2.77 6.9 2.77 12.1s4.21 9.4 9.41 9.4c5.43 0 9.03-3.81 9.03-9.18 0-.62-.07-1.09-.16-1.62Z"
    })
  })
}, {
  label: "LinkedIn",
  href: "#",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    viewBox: "0 0 24 24",
    width: "16",
    height: "16",
    fill: "currentColor",
    "aria-hidden": "true",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M6.94 8.5a1.94 1.94 0 1 1 0-3.88 1.94 1.94 0 0 1 0 3.88ZM5.1 20.4V9.9h3.68v10.5H5.1Zm6.02-10.5h3.53v1.44h.05c.49-.9 1.7-1.86 3.5-1.86 3.74 0 4.43 2.36 4.43 5.43v5.49h-3.68v-4.87c0-1.16-.02-2.65-1.65-2.65-1.66 0-1.91 1.25-1.91 2.56v4.96h-3.67V9.9Z"
    })
  })
}];
function Navbar() {
  const [isScrolled, setIsScrolled] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [isMenuOpen, setIsMenuOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const navRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  function handleScroll() {
    setIsScrolled(window.scrollY > 32);
  }
  function toggleMenu() {
    setIsMenuOpen(prev => !prev);
  }
  function closeMenu() {
    setIsMenuOpen(false);
  }
  function syncNavHeight() {
    if (!navRef.current) return;
    const height = navRef.current.offsetHeight;
    document.documentElement.style.setProperty("--ipr-nav-h", height + "px");
  }
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    window.addEventListener("scroll", handleScroll);
    window.addEventListener("resize", syncNavHeight);
    syncNavHeight();
    // Reintenta tras el primer paint (fonts/webfont swap pueden cambiar la altura real).
    const timeoutId = window.setTimeout(syncNavHeight, 300);
    return function cleanup() {
      window.removeEventListener("scroll", handleScroll);
      window.removeEventListener("resize", syncNavHeight);
      window.clearTimeout(timeoutId);
    };
  }, []);

  // Vuelve a medir cada vez que el menú móvil abre/cierra (cambia la altura del bloque).
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(syncNavHeight, [isMenuOpen]);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("header", {
    ref: navRef,
    className: "ipr-nav" + (isScrolled ? " is-scrolled" : ""),
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "ipr-topbar",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "ipr-topbar__inner",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "ipr-topbar__left",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
            href: "mailto:info@independentportablerestrooms.com",
            className: "ipr-topbar__link",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
              viewBox: "0 0 24 24",
              width: "14",
              height: "14",
              fill: "none",
              stroke: "currentColor",
              strokeWidth: "1.8",
              "aria-hidden": "true",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
                x: "2.5",
                y: "5",
                width: "19",
                height: "14",
                rx: "2"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                d: "M3 6.5 12 13l9-6.5"
              })]
            }), "info@independentportablerestrooms.com"]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
            href: "tel:+15414813111",
            className: "ipr-topbar__link",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              viewBox: "0 0 24 24",
              width: "14",
              height: "14",
              fill: "currentColor",
              "aria-hidden": "true",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                d: "M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.8 21 3 13.2 3 3.9c0-.6.4-1 1-1h3.4c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8Z"
              })
            }), "541-481-3111"]
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
          href: "https://www.google.com/maps/search/?api=1&query=207+NW+First+Street,+Boardman,+OR+97818",
          target: "_blank",
          rel: "noopener noreferrer",
          className: "ipr-topbar__address",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
            viewBox: "0 0 24 24",
            width: "14",
            height: "14",
            fill: "currentColor",
            "aria-hidden": "true",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
              d: "M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z"
            })
          }), "207 NW First Street, Boardman, OR 97818"]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "ipr-topbar__social",
          children: SOCIAL_LINKS.map(function renderSocialLink(social) {
            return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: social.href,
              className: "ipr-topbar__social-link",
              "aria-label": social.label,
              children: social.icon
            }, social.label);
          })
        })]
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "ipr-nav__inner",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
        href: "/home",
        className: "ipr-nav__brand",
        onClick: closeMenu,
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          className: "ipr-nav__tag",
          children: "IPR"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          className: "ipr-nav__brand-text",
          children: "Independent Portable Restrooms"
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("nav", {
        className: "ipr-nav__links",
        "aria-label": "Primary",
        children: NAV_ITEMS.map(function renderNavItem(item) {
          return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: item.href,
            className: "ipr-nav__link",
            children: item.label
          }, item.href);
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "ipr-nav__actions",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
          href: "tel:+15414813111",
          className: "ipr-nav__phone",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            className: "ipr-nav__phone-label",
            children: "Office"
          }), "541-481-3111"]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          className: "ipr-nav__es",
          children: "Se habla espa\xF1ol"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
          href: "/contact",
          className: "ipr-tab ipr-tab-yellow ipr-tab-sm",
          children: "Request a Quote"
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
        type: "button",
        className: "ipr-nav__burger",
        "aria-label": "Toggle menu",
        "aria-expanded": isMenuOpen,
        onClick: toggleMenu,
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {}), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {}), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {})]
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "ipr-nav__mobile" + (isMenuOpen ? " is-open" : ""),
      children: [NAV_ITEMS.map(function renderMobileItem(item) {
        return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
          href: item.href,
          className: "ipr-nav__mobile-link",
          onClick: closeMenu,
          children: item.label
        }, item.href);
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
        href: "tel:+15417017369",
        className: "ipr-nav__mobile-emergency",
        children: "Emergency 24/7 \xB7 541-701-7369"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
        href: "/contact",
        className: "ipr-tab ipr-tab-yellow ipr-nav__mobile-cta",
        onClick: closeMenu,
        children: "Request a Quote"
      })]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Navbar);

/***/ },

/***/ "./src/scripts/Person.js"
/*!*******************************!*\
  !*** ./src/scripts/Person.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class Person {
  constructor(name) {
    this.name = name;
    this.greet();
  }
  greet() {
    console.log(`Hello, my name is ${this.name}.`);
  }
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Person);

/***/ },

/***/ "react"
/*!************************!*\
  !*** external "React" ***!
  \************************/
(module) {

module.exports = window["React"];

/***/ },

/***/ "react-dom/client"
/*!***************************!*\
  !*** external "ReactDOM" ***!
  \***************************/
(module) {

module.exports = window["ReactDOM"];

/***/ },

/***/ "react/jsx-runtime"
/*!**********************************!*\
  !*** external "ReactJSXRuntime" ***!
  \**********************************/
(module) {

module.exports = window["ReactJSXRuntime"];

/***/ }

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	const __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		const cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		const module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			const e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			const getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter/value functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			if(Array.isArray(definition)) {
/******/ 				var i = 0;
/******/ 				while(i < definition.length) {
/******/ 					var key = definition[i++];
/******/ 					var binding = definition[i++];
/******/ 					if(!__webpack_require__.o(exports, key)) {
/******/ 						if(binding === 0) {
/******/ 							Object.defineProperty(exports, key, { enumerable: true, value: definition[i++] });
/******/ 						} else {
/******/ 							Object.defineProperty(exports, key, { enumerable: true, get: binding });
/******/ 						}
/******/ 					} else if(binding === 0) { i++; }
/******/ 				}
/******/ 			} else {
/******/ 				for(var key in definition) {
/******/ 					if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 						Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 					}
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.hasOwn(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
let __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scripts_Person__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scripts/Person */ "./src/scripts/Person.js");
/* harmony import */ var _scripts_ExampleReactComponent__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./scripts/ExampleReactComponent */ "./src/scripts/ExampleReactComponent.js");
/* harmony import */ var _scripts_Navbar__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/Navbar */ "./src/scripts/Navbar.js");
/* harmony import */ var _scripts_Footer__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scripts/Footer */ "./src/scripts/Footer.js");
/* harmony import */ var _scripts_CTABand__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./scripts/CTABand */ "./src/scripts/CTABand.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! react-dom/client */ "react-dom/client");
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(react_dom_client__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__);








const person1 = new _scripts_Person__WEBPACK_IMPORTED_MODULE_0__["default"]("Brad");
if (document.querySelector("#render-navbar-here")) {
  const navbarRoot = react_dom_client__WEBPACK_IMPORTED_MODULE_6___default().createRoot(document.querySelector("#render-navbar-here"));
  navbarRoot.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_scripts_Navbar__WEBPACK_IMPORTED_MODULE_2__["default"], {}));
}
if (document.querySelector("#render-footer-here")) {
  const footerRoot = react_dom_client__WEBPACK_IMPORTED_MODULE_6___default().createRoot(document.querySelector("#render-footer-here"));
  footerRoot.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_scripts_Footer__WEBPACK_IMPORTED_MODULE_3__["default"], {}));
}

// CTABand se repite en Home, Services, Service Area, About y Contact —
// cada mount trae su propio copy vía data-attributes en el PHP.
document.querySelectorAll(".ipr-cta-mount").forEach(function (mountEl) {
  const root = react_dom_client__WEBPACK_IMPORTED_MODULE_6___default().createRoot(mountEl);
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_scripts_CTABand__WEBPACK_IMPORTED_MODULE_4__["default"], {
    heading: mountEl.dataset.heading,
    subtext: mountEl.dataset.subtext,
    cta1Text: mountEl.dataset.cta1Text,
    cta1Href: mountEl.dataset.cta1Href,
    cta2Text: mountEl.dataset.cta2Text,
    cta2Href: mountEl.dataset.cta2Href
  }));
});
if (document.querySelector("#render-react-example-here")) {
  const root = react_dom_client__WEBPACK_IMPORTED_MODULE_6___default().createRoot(document.querySelector("#render-react-example-here"));
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_scripts_ExampleReactComponent__WEBPACK_IMPORTED_MODULE_1__["default"], {}));
}

// Reveal-on-scroll global — corre en cualquier página que tenga elementos
// .ipr-reveal-up/left/right/stagger, sin que cada template repita el observer.
document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(".ipr-reveal-up, .ipr-reveal-left, .ipr-reveal-right, .ipr-reveal-stagger");
  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry, idx) {
      if (entry.isIntersecting) {
        const delay = entry.target.classList.contains("ipr-reveal-stagger") ? idx % 6 * 60 : 0;
        setTimeout(function () {
          entry.target.classList.add("is-visible");
        }, delay);
      }
    });
  }, {
    threshold: 0.12
  });
  items.forEach(function (item) {
    observer.observe(item);
  });
});
})();

/******/ })()
;
//# sourceMappingURL=index.js.map