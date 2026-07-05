import React, { useState, useEffect, useRef } from "react";

const NAV_ITEMS = [
  { label: "Home", href: "/home" },
  { label: "Services", href: "/services" },
  { label: "Service Area", href: "/service-area" },
  { label: "About", href: "/about" },
  { label: "Contact", href: "/contact" },
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
      <div className="ipr-nav__inner">
        <a href="/home" className="ipr-nav__brand" onClick={closeMenu}>
          {/* [LOGO — Pend. #A] Reemplazar por logo real del cliente cuando lo entregue. */}
          <span className="ipr-nav__tag">IPR</span>
          <span className="ipr-nav__brand-text">
            Independent Portable Restrooms
          </span>
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
            <span className="ipr-nav__phone-label">Office</span>
            541-481-3111
          </a>
          <span className="ipr-nav__es">Se habla español</span>
          <a href="/contact" className="ipr-tab ipr-tab-yellow ipr-tab-sm">
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