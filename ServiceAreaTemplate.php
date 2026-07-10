<?php
/**
 * Template Name: Service Area Template
 *
 * Página Service Area — Independent Portable Restrooms
 * Brief: Hero + intro, Cities (OR/WA), Map, CTA.
 *
 * Nota Pend. #B resuelta aquí: el cuestionario original etiquetó todas las
 * ciudades de Oregon como "Umatilla County". Los condados reales son:
 *   - Arlington       → Gilliam County
 *   - Boardman (HQ)   → Morrow County
 *   - Heppner         → Morrow County
 *   - Irrigon         → Morrow County
 *   - Umatilla        → Umatilla County
 *   - Hermiston       → Umatilla County
 *   - Pendleton       → Umatilla County
 * Washington:
 *   - Plymouth, Kennewick, Richland → Benton County
 *   - Pasco                         → Franklin County
 * Confirmar con el cliente antes de publicar, pero son los condados
 * geográficos correctos según registros públicos.
 *
 * SEO (para el plugin de SEO, no se imprime en el template):
 * Title: Service Area — Eastern Oregon & Washington Tri-Cities │ Independent Portable Restrooms
 * Slug: /service-area
 *
 * Self-contained: todos los estilos viven en su propio <style> al final.
 */

get_header(); ?>

<main class="ipr-service-area bg-[var(--ipr-white)] text-[var(--ipr-ink)] overflow-hidden">

  <?php
    $or_cities = [
      ['name' => 'Arlington',  'county' => 'Gilliam County'],
      ['name' => 'Boardman',   'county' => 'Morrow County', 'hq' => true],
      ['name' => 'Heppner',    'county' => 'Morrow County'],
      ['name' => 'Irrigon',    'county' => 'Morrow County'],
      ['name' => 'Umatilla',   'county' => 'Umatilla County'],
      ['name' => 'Hermiston',  'county' => 'Umatilla County'],
      ['name' => 'Pendleton',  'county' => 'Umatilla County'],
    ];

    $wa_cities = [
      ['name' => 'Plymouth',   'county' => 'Benton County'],
      ['name' => 'Kennewick',  'county' => 'Benton County'],
      ['name' => 'Pasco',      'county' => 'Franklin County'],
      ['name' => 'Richland',   'county' => 'Benton County'],
    ];
  ?>

  <!-- 01 · HERO INTERNO -->
  <section class="relative flex min-h-[380px] w-full items-center overflow-hidden bg-[var(--ipr-ink)]">
    <div class="ipr-stamped-area absolute inset-0"></div>

    <div class="ipr-ticket-stub" aria-hidden="true">
      <span>MANIFEST NO.</span>
      <strong><?php echo esc_html(date('ymd')); ?>-AREA</strong>
    </div>

    <div class="relative z-10 mx-auto w-full max-w-3xl px-4 py-16 text-center">
      <p class="ipr-reveal-up ipr-stencil-eyebrow">Coverage Manifest · 11 Stops On File</p>

      <h1 class="ipr-reveal-up mt-5 font-[var(--ipr-display)] text-4xl font-bold uppercase leading-[1.05] tracking-[-0.01em] text-[var(--ipr-white)] md:text-5xl">
        Service Area
      </h1>

      <p class="ipr-reveal-up mx-auto mt-6 max-w-2xl text-base leading-7 text-[var(--ipr-white)]/82">
        Independent Portable Restrooms is based in Boardman, Oregon, and delivers across Eastern Oregon and the Washington Tri-Cities. Our regular routes cover Hermiston, Pendleton, Umatilla, Irrigon, Stanfield, Echo, Heppner, and Ione on the Oregon side, and Kennewick, Pasco, and Richland in Washington. Because we run these roads every week, delivery is fast and service days are consistent.
      </p>
    </div>
  </section>

  <div class="ipr-accent-bar" aria-hidden="true"></div>

  <!-- 02 · CITIES — manifiesto por condado -->
  <section class="bg-[var(--ipr-white)] py-16 lg:py-20">
    <div class="mx-auto max-w-4xl px-4">
      <div class="ipr-reveal-up mx-auto max-w-2xl text-center">
        <p class="ipr-stencil-eyebrow ipr-stencil-eyebrow--dark">Stops On Route</p>
        <h2 class="mt-4 font-[var(--ipr-display)] text-3xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)] md:text-4xl">
          Every Town We Cover
        </h2>
      </div>

      <div class="mt-14 grid gap-10 md:grid-cols-2">
        <div>
          <div class="ipr-area-col-header">
            <span class="ipr-area-flag">OR</span>
            <span>Oregon</span>
          </div>
          <ul class="mt-5">
            <?php foreach ($or_cities as $city) : ?>
              <li class="ipr-reveal-stagger ipr-area-row">
                <span class="ipr-area-row__name">
                  <?php echo esc_html($city['name']); ?>
                  <?php if (!empty($city['hq'])) : ?>
                    <span class="ipr-area-row__hq">HQ</span>
                  <?php endif; ?>
                </span>
                <span class="ipr-area-row__county"><?php echo esc_html($city['county']); ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div>
          <div class="ipr-area-col-header">
            <span class="ipr-area-flag">WA</span>
            <span>Washington · Tri-Cities</span>
          </div>
          <ul class="mt-5">
            <?php foreach ($wa_cities as $city) : ?>
              <li class="ipr-reveal-stagger ipr-area-row">
                <span class="ipr-area-row__name"><?php echo esc_html($city['name']); ?></span>
                <span class="ipr-area-row__county"><?php echo esc_html($city['county']); ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- 03 · MAP -->
  <section class="border-t-4 border-[var(--ipr-ink)] bg-[var(--ipr-paper)] py-16 lg:py-20">
    <div class="mx-auto max-w-5xl px-4">
      <div class="ipr-reveal-up mx-auto max-w-2xl text-center">
        <p class="ipr-stencil-eyebrow ipr-stencil-eyebrow--dark">Route Overview</p>
        <h2 class="mt-4 font-[var(--ipr-display)] text-3xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)] md:text-4xl">
          Where We Dispatch From
        </h2>
      </div>

      <div class="ipr-reveal-up mt-12 h-[420px] w-full border-2 border-[var(--ipr-ink)] bg-[var(--ipr-white)]">
        <!-- [MAP — Pend. #G] Ilustración de ruta, no es un mapa geográfico real.
             Reemplazar por embed real de Google Maps cuando el cliente confirme (207 NW First St, Boardman, OR). -->
        <svg viewBox="0 0 700 420" class="h-full w-full" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Illustrated service area map across the Columbia Basin">
          <defs>
            <pattern id="ipr-area-grid" width="30" height="30" patternUnits="userSpaceOnUse">
              <path d="M 30 0 L 0 0 0 30" fill="none" stroke="#10263B" stroke-opacity="0.06" stroke-width="1"/>
            </pattern>
          </defs>
          <rect width="700" height="420" fill="url(#ipr-area-grid)" />

          <!-- Divisoria OR / WA (ilustrativa) -->
          <line x1="0" y1="150" x2="700" y2="150" stroke="#59636B" stroke-width="1" stroke-dasharray="4 6" />
          <text x="16" y="30" font-family="IBM Plex Mono, monospace" font-size="11" font-weight="700" letter-spacing="2" fill="#59636B">WASHINGTON</text>
          <text x="16" y="170" font-family="IBM Plex Mono, monospace" font-size="11" font-weight="700" letter-spacing="2" fill="#59636B">OREGON</text>

          <!-- Ruta OR -->
          <path d="M 80 340 C 140 300, 160 260, 220 250 S 320 280, 380 230 S 480 210, 560 190"
                fill="none" stroke="#C68A3D" stroke-width="2.5" stroke-dasharray="7 7" />

          <!-- HQ · Boardman -->
          <circle cx="80" cy="340" r="9" fill="#F3B200" stroke="#10263B" stroke-width="2" />
          <text x="96" y="337" font-family="IBM Plex Mono, monospace" font-size="12" font-weight="700" fill="#10263B">HQ · BOARDMAN — MORROW CO.</text>

          <circle cx="220" cy="250" r="5" fill="#10263B" /><text x="230" y="247" font-family="IBM Plex Mono, monospace" font-size="10" fill="#10263B">IRRIGON — MORROW CO.</text>
          <circle cx="150" cy="290" r="4" fill="#59636B" /><text x="30" y="300" font-family="IBM Plex Mono, monospace" font-size="10" fill="#59636B">HEPPNER — MORROW CO.</text>
          <circle cx="380" cy="230" r="5" fill="#10263B" /><text x="390" y="227" font-family="IBM Plex Mono, monospace" font-size="10" fill="#10263B">HERMISTON — UMATILLA CO.</text>
          <circle cx="480" cy="210" r="4" fill="#59636B" /><text x="490" y="207" font-family="IBM Plex Mono, monospace" font-size="10" fill="#59636B">UMATILLA — UMATILLA CO.</text>
          <circle cx="560" cy="190" r="5" fill="#10263B" /><text x="570" y="187" font-family="IBM Plex Mono, monospace" font-size="10" fill="#10263B">PENDLETON — UMATILLA CO.</text>
          <circle cx="40" cy="380" r="4" fill="#59636B" /><text x="16" y="405" font-family="IBM Plex Mono, monospace" font-size="10" fill="#59636B">ARLINGTON — GILLIAM CO.</text>

          <!-- WA Tri-Cities -->
          <circle cx="360" cy="90" r="5" fill="#10263B" /><text x="370" y="87" font-family="IBM Plex Mono, monospace" font-size="10" fill="#10263B">PLYMOUTH — BENTON CO.</text>
          <circle cx="440" cy="70" r="5" fill="#10263B" /><text x="450" y="67" font-family="IBM Plex Mono, monospace" font-size="10" fill="#10263B">KENNEWICK — BENTON CO.</text>
          <circle cx="500" cy="55" r="5" fill="#10263B" /><text x="510" y="52" font-family="IBM Plex Mono, monospace" font-size="10" fill="#10263B">PASCO — FRANKLIN CO.</text>
          <circle cx="470" cy="90" r="4" fill="#59636B" /><text x="480" y="105" font-family="IBM Plex Mono, monospace" font-size="10" fill="#59636B">RICHLAND — BENTON CO.</text>

          <!-- Marca de rumbo -->
          <g transform="translate(650, 370)">
            <circle r="22" fill="none" stroke="#10263B" stroke-width="1.5" stroke-dasharray="3 4" />
            <text x="0" y="-28" text-anchor="middle" font-family="IBM Plex Mono, monospace" font-size="11" font-weight="700" fill="#10263B">N</text>
            <path d="M0 -14 L5 4 L0 -1 L-5 4 Z" fill="#F3B200" />
          </g>

          <text x="16" y="405" font-family="IBM Plex Mono, monospace" font-size="9" font-weight="700" letter-spacing="2" fill="#C68A3D" text-anchor="start" dx="0"></text>
        </svg>
      </div>

      <p class="ipr-reveal-up mt-4 text-center font-mono text-[11px] uppercase tracking-[0.06em] text-[var(--ipr-steel)]">
        Illustrative route map — not to scale.
      </p>
    </div>
  </section>

  <!-- 04 · CTA BAND (componente React reutilizado del Home) -->
  <div
    class="ipr-cta-mount"
    data-heading="Don't see your town on the route?"
    data-subtext="Call us anyway. Our coverage extends beyond the towns listed here, and if your site is reachable from our routes, we can likely serve it."
    data-cta1-text="Request a Quote"
    data-cta1-href="/contact"
    data-cta2-text="Call 24/7 · 541-701-7369"
    data-cta2-href="tel:+15417017369"
  ></div>

</main>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=IBM+Plex+Sans:wght@400;500;600&family=IBM+Plex+Mono:wght@500;700&display=swap" rel="stylesheet">

<style>
  .ipr-service-area {
    --ipr-ink: #10263B;
    --ipr-yellow: #F3B200;
    --ipr-wheat: #C68A3D;
    --ipr-paper: #EAD9AF;
    --ipr-steel: #59636B;
    --ipr-rust: #8B3A2B;
    --ipr-white: #FEFEFE;
    --ipr-display: 'Oswald', 'Segoe UI', Arial, sans-serif;

    font-family: "IBM Plex Sans", "Segoe UI", Arial, sans-serif;
  }

  .ipr-ticket-stub {
    position: absolute;
    top: 1.5rem;
    right: 1.5rem;
    z-index: 10;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    gap: 0.15rem;
    font-family: "IBM Plex Mono", monospace;
    color: rgba(254, 254, 254, 0.68);
    transform: rotate(1.5deg);
  }

  .ipr-ticket-stub span {
    font-size: 0.6rem;
    letter-spacing: 0.14em;
    text-transform: uppercase;
  }

  .ipr-ticket-stub strong {
    font-size: 0.82rem;
    font-weight: 700;
    color: var(--ipr-yellow);
    border-bottom: 1px dashed rgba(243, 180, 0, 0.5);
    padding-bottom: 0.1rem;
  }

  .ipr-accent-bar {
    height: 5px;
    width: 100%;
    background: linear-gradient(90deg, var(--ipr-yellow) 0%, var(--ipr-wheat) 100%);
  }

  .ipr-stamped-area {
    background-image: repeating-linear-gradient(
      135deg,
      var(--ipr-yellow) 0,
      var(--ipr-yellow) 3px,
      transparent 3px,
      transparent 34px
    );
    background-attachment: fixed;
    opacity: 0.08;
    mix-blend-mode: overlay;
    pointer-events: none;
  }

  .ipr-stencil-eyebrow {
    display: inline-block;
    font-family: "IBM Plex Mono", monospace;
    font-size: 0.68rem;
    font-weight: 700;
    letter-spacing: 0.22em;
    text-transform: uppercase;
    color: var(--ipr-yellow);
    padding-bottom: 0.4rem;
    border-bottom: 1px dashed rgba(254, 254, 254, 0.4);
    text-shadow: 1.5px 1.5px 0 rgba(198, 138, 61, 0.4);
  }

  .ipr-stencil-eyebrow--dark {
    color: var(--ipr-wheat);
    border-bottom-color: rgba(16, 38, 59, 0.25);
  }

  /* ── Columnas OR/WA con bandera de manifiesto ── */
  .ipr-area-col-header {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-family: var(--ipr-display);
    font-size: 1.1rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: -0.01em;
    color: var(--ipr-ink);
    padding-bottom: 0.85rem;
    border-bottom: 3px solid var(--ipr-ink);
  }

  .ipr-area-flag {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 34px;
    height: 26px;
    background: var(--ipr-yellow);
    color: var(--ipr-ink);
    font-family: "IBM Plex Mono", monospace;
    font-size: 0.72rem;
    font-weight: 700;
  }

  .ipr-area-row {
    display: flex;
    align-items: baseline;
    justify-content: space-between;
    gap: 1rem;
    padding: 0.85rem 0;
    border-bottom: 1px dashed rgba(16, 38, 59, 0.18);
  }

  .ipr-area-row__name {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-family: var(--ipr-display);
    font-size: 1.05rem;
    font-weight: 600;
    text-transform: uppercase;
    color: var(--ipr-ink);
  }

  .ipr-area-row__hq {
    display: inline-flex;
    background: var(--ipr-yellow);
    color: var(--ipr-ink);
    font-family: "IBM Plex Mono", monospace;
    font-size: 0.6rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    padding: 0.1rem 0.4rem;
  }

  .ipr-area-row__county {
    font-family: "IBM Plex Mono", monospace;
    font-size: 0.72rem;
    font-weight: 600;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    color: var(--ipr-wheat);
    white-space: nowrap;
  }

  /* ── Tabs (reutilizados de otras páginas) ── */
  .ipr-tab {
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

  .ipr-tab:hover { transform: translateX(3px); }

  .ipr-tab-yellow { background: var(--ipr-yellow); color: var(--ipr-ink); }
  .ipr-tab-yellow:hover { filter: brightness(1.08); }

  /* ── Reveal animations ── */
  .ipr-reveal-up, .ipr-reveal-left, .ipr-reveal-right, .ipr-reveal-stagger {
    opacity: 0;
    will-change: opacity, transform;
    transition: opacity .8s ease, transform .8s ease;
  }

  .ipr-reveal-up { transform: translateY(28px); }
  .ipr-reveal-left { transform: translateX(-30px); }
  .ipr-reveal-right { transform: translateX(30px); }
  .ipr-reveal-stagger { transform: translateY(22px); }

  .ipr-reveal-up.is-visible, .ipr-reveal-left.is-visible,
  .ipr-reveal-right.is-visible, .ipr-reveal-stagger.is-visible {
    opacity: 1;
    transform: translate(0, 0);
  }

  @media (prefers-reduced-motion: reduce) {
    .ipr-reveal-up, .ipr-reveal-left, .ipr-reveal-right, .ipr-reveal-stagger, .ipr-tab {
      opacity: 1 !important;
      transform: none !important;
      transition: none !important;
    }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    var items = document.querySelectorAll(
      ".ipr-reveal-up, .ipr-reveal-left, .ipr-reveal-right, .ipr-reveal-stagger"
    );

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry, idx) {
        if (entry.isIntersecting) {
          var delay = entry.target.classList.contains("ipr-reveal-stagger") ? (idx % 6) * 60 : 0;
          setTimeout(function () {
            entry.target.classList.add("is-visible");
          }, delay);
        }
      });
    }, { threshold: 0.12 });

    items.forEach(function (item) { observer.observe(item); });
  });
</script>

<?php get_footer(); ?>
