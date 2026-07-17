import React, { useState, useEffect, useRef } from "react";

const NAV_ITEMS = [
  { label: "Home", href: "/home" },
  { label: "Services", href: "/services" },
  { label: "Service Area", href: "/service-area" },
  { label: "About", href: "/about" },
  { label: "Contact", href: "/contact" },
];

const SOCIAL_LINKS = [
  {
    label: "Facebook",
    href: "#",
    icon: (
      <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" aria-hidden="true">
        <path d="M22 12.06C22 6.5 17.52 2 12 2S2 6.5 2 12.06c0 5 3.66 9.16 8.44 9.94v-7.03H7.9v-2.91h2.54V9.85c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.23.2 2.23.2v2.45h-1.26c-1.24 0-1.63.77-1.63 1.56v1.87h2.78l-.44 2.91h-2.34v7.03C18.34 21.22 22 17.06 22 12.06Z" />
      </svg>
    ),
  },
  {
    label: "Instagram",
    href: "#",
    icon: (
      <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" strokeWidth="1.7" aria-hidden="true">
        <rect x="3" y="3" width="18" height="18" rx="5" />
        <circle cx="12" cy="12" r="4.2" />
        <circle cx="17.3" cy="6.7" r="1" fill="currentColor" stroke="none" />
      </svg>
    ),
  },
  {
    label: "Google",
    href: "#",
    icon: (
      <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" aria-hidden="true">
        <path d="M21.35 11.1h-9.17v2.98h5.27c-.23 1.36-1.6 4-5.27 4-3.17 0-5.76-2.62-5.76-5.85s2.59-5.85 5.76-5.85c1.8 0 3.01.77 3.7 1.43l2.53-2.44C16.94 3.66 14.7 2.7 12.18 2.7 6.98 2.7 2.77 6.9 2.77 12.1s4.21 9.4 9.41 9.4c5.43 0 9.03-3.81 9.03-9.18 0-.62-.07-1.09-.16-1.62Z" />
      </svg>
    ),
  },
  {
    label: "LinkedIn",
    href: "#",
    icon: (
      <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" aria-hidden="true">
        <path d="M6.94 8.5a1.94 1.94 0 1 1 0-3.88 1.94 1.94 0 0 1 0 3.88ZM5.1 20.4V9.9h3.68v10.5H5.1Zm6.02-10.5h3.53v1.44h.05c.49-.9 1.7-1.86 3.5-1.86 3.74 0 4.43 2.36 4.43 5.43v5.49h-3.68v-4.87c0-1.16-.02-2.65-1.65-2.65-1.66 0-1.91 1.25-1.91 2.56v4.96h-3.67V9.9Z" />
      </svg>
    ),
  },
];

function Navbar() {
  const [isScrolled, setIsScrolled] = useState(false);
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const navRef = useRef(null);

  function handleScroll() {
    setIsScrolled(window.scrollY > 32);
  }

  function toggleMenu() {
    setIsMenuOpen((prev) => !prev);
  }

  function closeMenu() {
    setIsMenuOpen(false);
  }

  function syncNavHeight() {
    if (!navRef.current) return;
    const height = navRef.current.offsetHeight;
    document.documentElement.style.setProperty("--ipr-nav-h", height + "px");
  }

  useEffect(() => {
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
  useEffect(syncNavHeight, [isMenuOpen]);

  return (
    <header ref={navRef} className={"ipr-nav" + (isScrolled ? " is-scrolled" : "")}>
      <div className="ipr-topbar">
        <div className="ipr-topbar__inner">
          <div className="ipr-topbar__left">
            <a href="mailto:info@independentportablerestrooms.com" className="ipr-topbar__link">
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" strokeWidth="1.8" aria-hidden="true">
                <rect x="2.5" y="5" width="19" height="14" rx="2" />
                <path d="M3 6.5 12 13l9-6.5" />
              </svg>
              info@independentportablerestrooms.com
            </a>
            <a href="tel:+15414813111" className="ipr-topbar__link">
              <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" aria-hidden="true">
                <path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.8 21 3 13.2 3 3.9c0-.6.4-1 1-1h3.4c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8Z" />
              </svg>
              541-481-3111
            </a>
          </div>

          <a
            href="https://www.google.com/maps/search/?api=1&query=207+NW+First+Street,+Boardman,+OR+97818"
            target="_blank"
            rel="noopener noreferrer"
            className="ipr-topbar__address"
          >
            <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" aria-hidden="true">
              <path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z" />
            </svg>
            207 NW First Street, Boardman, OR 97818
          </a>

          <div className="ipr-topbar__social">
            {SOCIAL_LINKS.map(function renderSocialLink(social) {
              return (
                <a
                  key={social.label}
                  href={social.href}
                  className="ipr-topbar__social-link"
                  aria-label={social.label}
                >
                  {social.icon}
                </a>
              );
            })}
          </div>
        </div>
      </div>

      <div className="ipr-nav__inner">
        <a href="/home" className="ipr-nav__brand" onClick={closeMenu}>
          <img
            src="/wp-content/uploads/2026/07/IPR_Brand_Logo-e1784221669327.png"
            alt="Independent Portable Restrooms"
            className="ipr-nav__logo"
          />
        </a>

        <nav className="ipr-nav__links" aria-label="Primary">
          {NAV_ITEMS.map(function renderNavItem(item) {
            return (
              <a key={item.href} href={item.href} className="ipr-nav__link">
                {item.label}
              </a>
            );
          })}
        </nav>

        <div className="ipr-nav__actions">
          <a href="tel:+15414813111" className="ipr-nav__phone">
            <span className="ipr-nav__phone-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="15" height="15" fill="currentColor">
                <path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.8 21 3 13.2 3 3.9c0-.6.4-1 1-1h3.4c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8Z" />
              </svg>
            </span>
            <span className="ipr-nav__phone-text">
              <span className="ipr-nav__phone-label">Office</span>
              541-481-3111
            </span>
          </a>

          <span className="ipr-nav__es">
            <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" strokeWidth="1.8" aria-hidden="true">
              <circle cx="12" cy="12" r="9" />
              <path d="M3 12h18M12 3c2.4 2.5 3.5 5.5 3.5 9s-1.1 6.5-3.5 9c-2.4-2.5-3.5-5.5-3.5-9s1.1-6.5 3.5-9Z" />
            </svg>
            Se habla español
          </span>

          <a href="/contact" className="ipr-tab ipr-tab-yellow ipr-tab-sm">
            <svg viewBox="0 0 24 24" width="13" height="13" fill="currentColor" aria-hidden="true">
              <path d="M3 11 21 3l-8 18-2-8-8-2Z" />
            </svg>
            Request a Quote
          </a>
        </div>

        <button
          type="button"
          className="ipr-nav__burger"
          aria-label="Toggle menu"
          aria-expanded={isMenuOpen}
          onClick={toggleMenu}
        >
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>

      <div className={"ipr-nav__mobile" + (isMenuOpen ? " is-open" : "")}>
        {NAV_ITEMS.map(function renderMobileItem(item) {
          return (
            <a
              key={item.href}
              href={item.href}
              className="ipr-nav__mobile-link"
              onClick={closeMenu}
            >
              {item.label}
            </a>
          );
        })}

        <a href="tel:+15417017369" className="ipr-nav__mobile-emergency">
          Emergency 24/7 · 541-701-7369
        </a>

        <a
          href="/contact"
          className="ipr-tab ipr-tab-yellow ipr-nav__mobile-cta"
          onClick={closeMenu}
        >
          Request a Quote
        </a>
      </div>
    </header>
  );
}

export default Navbar;