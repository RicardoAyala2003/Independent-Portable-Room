import React from "react";

const QUICK_LINKS = [
  { label: "Home", href: "/" },
  { label: "Services", href: "/services" },
  { label: "Service Area", href: "/service-area" },
  { label: "About", href: "/about" },
  { label: "Contact", href: "/contact" },
];

const SERVICE_LINKS = [
  { label: "Standard Restrooms", href: "/services#standard-portable-restrooms" },
  { label: "ADA Units", href: "/services#ada-accessible-units" },
  { label: "Handwash Stations", href: "/services#handwash-stations" },
  { label: "Restroom Trailers & Doubles", href: "/services#restroom-trailers-doubles" },
  { label: "Emergency Service", href: "/services#emergency-service" },
  { label: "Flexible Rental Terms", href: "/services#flexible-rental-terms" },
];

// [REDES — Pend. #E] Completar href cuando el cliente confirme sus perfiles reales.
// Los que queden con href vacío no se renderizan.
const SOCIAL_LINKS = [
  { label: "Facebook", href: "" },
  { label: "Instagram", href: "" },
  { label: "Google", href: "" },
];

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
    addressCountry: "US",
  },
  telephone: "+1-541-481-3111",
  openingHours: "Mo-Fr 08:00-17:00",
  areaServed: [
    "Arlington OR", "Boardman OR", "Heppner OR", "Irrigon OR",
    "Umatilla OR", "Hermiston OR", "Pendleton OR",
    "Plymouth WA", "Kennewick WA", "Pasco WA", "Richland WA",
  ],
};

function Footer() {
  const activeSocialLinks = SOCIAL_LINKS.filter(function hasHref(social) {
    return social.href && social.href.length > 0;
  });

  return (
    <footer className="ipr-footer">
      <div className="ipr-footer__top">
        <div className="ipr-footer__col">
          <a href="/" className="ipr-footer__brand">
            <img
              src="/wp-content/uploads/2026/07/IPR_Brand_Logo-e1784221669327.png"
              alt="Independent Portable Restrooms"
              className="ipr-footer__logo"
            />
          </a>
          <p className="ipr-footer__tagline">
            Clean, reliable portable restrooms across the Columbia Basin —
            farms, job sites, and events.
          </p>

          {activeSocialLinks.length > 0 && (
            <div className="ipr-footer__social">
              {activeSocialLinks.map(function renderSocial(social) {
                return (
                  <a
                    key={social.label}
                    href={social.href}
                    target="_blank"
                    rel="noopener noreferrer"
                    className="ipr-footer__social-link"
                  >
                    {social.label}
                  </a>
                );
              })}
            </div>
          )}
        </div>

        <div className="ipr-footer__col">
          <p className="ipr-footer__heading">Quick Links</p>
          <ul className="ipr-footer__list">
            {QUICK_LINKS.map(function renderQuickLink(link) {
              return (
                <li key={link.href}>
                  <a href={link.href}>{link.label}</a>
                </li>
              );
            })}
          </ul>
        </div>

        <div className="ipr-footer__col">
          <p className="ipr-footer__heading">Services</p>
          <ul className="ipr-footer__list">
            {SERVICE_LINKS.map(function renderServiceLink(link) {
              return (
                <li key={link.href}>
                  <a href={link.href}>{link.label}</a>
                </li>
              );
            })}
          </ul>
        </div>

        <div className="ipr-footer__col">
          <p className="ipr-footer__heading">Contact</p>
          <address className="ipr-footer__address">
            207 NW First Street<br />
            Boardman, OR 97818
          </address>
          <a href="tel:+15414813111" className="ipr-footer__phone">
            Office: 541-481-3111
            <span className="ipr-footer__hours">Mon–Fri 8am–5pm</span>
          </a>
          <a href="tel:+15417017369" className="ipr-footer__phone ipr-footer__phone--emergency">
            Emergency: 541-701-7369
            <span className="ipr-footer__hours">24/7</span>
          </a>
        </div>
      </div>

      <div className="ipr-footer__bottom">
        <p>© {new Date().getFullYear()} Independent Portable Restrooms. All rights reserved.</p>
      </div>

      <script
        type="application/ld+json"
        dangerouslySetInnerHTML={{ __html: JSON.stringify(LOCAL_BUSINESS_SCHEMA) }}
      />
    </footer>
  );
}

export default Footer;