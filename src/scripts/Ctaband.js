import React from "react";

function CTABand({
  heading,
  subtext,
  cta1Text,
  cta1Href,
  cta2Text,
  cta2Href,
}) {
  return (
    <section className="ipr-ctaband">
      <div className="ipr-ctaband__pattern" aria-hidden="true"></div>

      <div className="ipr-ctaband__inner">
        <p className="ipr-ctaband__eyebrow">Dispatch Ready</p>

        <h2 className="ipr-ctaband__heading">{heading}</h2>

        {subtext ? <p className="ipr-ctaband__subtext">{subtext}</p> : null}

        <div className="ipr-ctaband__actions">
          {cta1Text && cta1Href ? (
            <a href={cta1Href} className="ipr-ctaband__tab ipr-ctaband__tab--yellow">
              {cta1Text}
            </a>
          ) : null}

          {cta2Text && cta2Href ? (
            <a href={cta2Href} className="ipr-ctaband__tab ipr-ctaband__tab--ink">
              <span className="ipr-ctaband__tab-inner">{cta2Text}</span>
            </a>
          ) : null}
        </div>
      </div>

      {/* Self-contained a propósito: no depende de que index.css esté
          reconstruido/desplegado (mismo criterio que los templates PHP). */}
      <style>{`
        .ipr-ctaband {
          position: relative;
          overflow: hidden;
          background: var(--ipr-paper, #EAD9AF);
          padding: 4rem 1.5rem;
          text-align: center;
        }

        /* Estampado cruzado (rombos) — a propósito distinto del diagonal
           simple que ya usan Industries/FAQ/Map, para que se note que es
           una franja aparte aunque comparta el mismo tono de fondo. */
        .ipr-ctaband__pattern {
          position: absolute;
          inset: 0;
          background-image:
            repeating-linear-gradient(45deg, var(--ipr-ink, #10263B) 0, var(--ipr-ink, #10263B) 1.5px, transparent 1.5px, transparent 24px),
            repeating-linear-gradient(-45deg, var(--ipr-ink, #10263B) 0, var(--ipr-ink, #10263B) 1.5px, transparent 1.5px, transparent 24px);
          opacity: 0.07;
          mix-blend-mode: multiply;
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
          color: var(--ipr-wheat, #C68A3D);
          padding-bottom: 0.4rem;
          border-bottom: 1px dashed rgba(16, 38, 59, 0.28);
        }

        .ipr-ctaband__heading {
          margin-top: 1.1rem;
          font-family: 'Oswald', 'Segoe UI', Arial, sans-serif;
          font-size: 2rem;
          font-weight: 700;
          text-transform: uppercase;
          letter-spacing: -0.01em;
          line-height: 1.15;
          color: var(--ipr-ink, #10263B);
        }

        @media (min-width: 768px) {
          .ipr-ctaband__heading { font-size: 2.6rem; }
        }

        .ipr-ctaband__subtext {
          margin-top: 1rem;
          font-family: "IBM Plex Sans", "Segoe UI", Arial, sans-serif;
          font-size: 1rem;
          line-height: 1.6;
          color: var(--ipr-steel, #59636B);
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
          background: var(--ipr-ink, #10263B);
          padding: 0;
        }

        .ipr-ctaband__tab--ink:hover {
          filter: brightness(1.3);
        }

        .ipr-ctaband__tab-inner {
          display: flex;
          align-items: center;
          justify-content: center;
          gap: 0.5rem;
          padding: 1rem 2rem 1rem 1.5rem;
          color: var(--ipr-white, #FEFEFE);
        }

        @media (prefers-reduced-motion: reduce) {
          .ipr-ctaband__tab { transition: none !important; }
        }
      `}</style>
    </section>
  );
}

export default CTABand;