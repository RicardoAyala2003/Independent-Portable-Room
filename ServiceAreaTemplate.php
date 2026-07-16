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

    $total_cities = count($or_cities) + count($wa_cities);

    $area_stats = [
      ['value' => '15+', 'label' => 'Years In The Region'],
      ['value' => (string) $total_cities, 'label' => 'Cities Served'],
      ['value' => '2', 'label' => 'States Licensed'],
      ['value' => '24/7', 'label' => 'Emergency Response'],
    ];

    if (!function_exists('ipr_area_maps_embed_src')) {
      function ipr_area_maps_embed_src($city, $state) {
        return 'https://www.google.com/maps?q=' . rawurlencode("$city, $state") . '&output=embed';
      }
    }

    if (!function_exists('ipr_area_maps_link')) {
      function ipr_area_maps_link($city, $state) {
        return 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode("$city, $state");
      }
    }

    if (!function_exists('ipr_area_city_card')) {
    function ipr_area_city_card($city, $state_label) {
      ?>
      <article class="ipr-city-card">
        <div class="ipr-city-card__map">
          <iframe
            src="<?php echo esc_url(ipr_area_maps_embed_src($city['name'], $state_label)); ?>"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Map of <?php echo esc_attr($city['name']); ?>, <?php echo esc_attr($state_label); ?>"
          ></iframe>
          <a
            href="<?php echo esc_url(ipr_area_maps_link($city['name'], $state_label)); ?>"
            target="_blank"
            rel="noopener noreferrer"
            class="ipr-city-card__maps-link"
          >
            Open in Maps ↗
          </a>
        </div>
        <div class="ipr-city-card__body">
          <p class="ipr-city-card__state"><?php echo esc_html(strtoupper($state_label)); ?></p>
          <h3 class="ipr-city-card__name">
            <?php echo esc_html($city['name']); ?>
            <?php if (!empty($city['hq'])) : ?>
              <span class="ipr-area-row__hq">HQ</span>
            <?php endif; ?>
          </h3>
          <p class="ipr-city-card__meta">Restroom &amp; handwash rentals · 24/7 emergency</p>
          <div class="ipr-city-card__actions">
            <a href="/contact" class="ipr-tab ipr-tab-yellow ipr-tab-sm">Request a Quote</a>
            <a href="tel:+15417017369" class="ipr-city-card__call">
              <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" aria-hidden="true">
                <path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.8 21 3 13.2 3 3.9c0-.6.4-1 1-1h3.4c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8Z" />
              </svg>
              Call Now
            </a>
          </div>
        </div>
      </article>
      <?php
    }
    }
  ?>

  <!-- 01 · HERO + TABS + STATS — una sola sección navy continua
       (antes eran dos <section> azules separadas por una barra de acento,
       lo que se leía como dos bloques pegados en vez de uno). -->
  <section class="relative overflow-hidden bg-[var(--ipr-ink)]">
    <div class="ipr-stamped-area absolute inset-0"></div>

    <div class="ipr-ticket-stub" aria-hidden="true">
      <span>MANIFEST NO.</span>
      <strong><?php echo esc_html(date('ymd')); ?>-AREA</strong>
    </div>

    <div class="relative z-10 mx-auto w-full max-w-3xl px-4 pt-16 pb-10 text-center">
      <p class="ipr-reveal-up ipr-stencil-eyebrow">Coverage Manifest · 11 Stops On File</p>

      <h1 class="ipr-reveal-up mt-5 font-[var(--ipr-display)] text-4xl font-bold uppercase leading-[1.05] tracking-[-0.01em] text-[var(--ipr-white)] md:text-5xl">
        Service Area
      </h1>

      <p class="ipr-reveal-up mx-auto mt-6 max-w-2xl text-base leading-7 text-[var(--ipr-white)]/82">
        Independent Portable Restrooms is based in Boardman, Oregon, and delivers across Eastern Oregon and the Washington Tri-Cities. Our regular routes cover Hermiston, Pendleton, Umatilla, Irrigon, Stanfield, Echo, Heppner, and Ione on the Oregon side, and Kennewick, Pasco, and Richland in Washington. Because we run these roads every week, delivery is fast and service days are consistent.
      </p>
    </div>

    <div class="relative z-10 mx-auto max-w-6xl px-4 pb-12 lg:pb-14">
      <div class="ipr-reveal-up ipr-area-tablist" role="tablist" aria-label="Service area regions">
        <button type="button" class="ipr-area-tab is-active" data-panel="or" role="tab" aria-selected="true">
          Oregon <span class="ipr-area-tab__count">(<?php echo count($or_cities); ?> cities)</span>
        </button>
        <button type="button" class="ipr-area-tab" data-panel="wa" role="tab" aria-selected="false">
          Washington <span class="ipr-area-tab__count">(<?php echo count($wa_cities); ?> cities)</span>
        </button>
        <button type="button" class="ipr-area-tab" data-panel="all" role="tab" aria-selected="false">
          All <?php echo esc_html($total_cities); ?> Cities
        </button>
      </div>

      <div class="ipr-area-stats mt-10 grid grid-cols-2 gap-x-6 gap-y-8 sm:grid-cols-4">
        <?php foreach ($area_stats as $i => $stat) : ?>
          <div class="ipr-reveal-stagger ipr-area-stat">
            <div class="ipr-area-stat__value-slot">
              <?php if ($stat['value'] === '15+') : ?>
                <div class="ipr-holo" aria-hidden="true">
                  <span class="ipr-holo__layer ipr-holo__layer--back">15+</span>
                  <span class="ipr-holo__layer ipr-holo__layer--mid">15+</span>
                  <span class="ipr-holo__layer ipr-holo__layer--front">15+</span>
                </div>
                <span class="sr-only">15+</span>
              <?php else : ?>
                <div class="ipr-area-stat__value"><?php echo esc_html($stat['value']); ?></div>
              <?php endif; ?>
            </div>
            <div class="ipr-area-stat__label"><?php echo esc_html($stat['label']); ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 03 · CITY CARDS -->
  <section class="bg-[var(--ipr-paper)] py-16 lg:py-20">
    <div class="mx-auto max-w-6xl px-4">

      <div class="ipr-area-panel" data-panel="or">
        <div class="ipr-area-panel__head">
          <h2 class="font-[var(--ipr-display)] text-2xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)] md:text-3xl">
            Oregon
          </h2>
          <span class="ipr-area-panel__pill">📍 <?php echo count($or_cities); ?> Cities</span>
        </div>
        <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
          <?php foreach ($or_cities as $city) : ipr_area_city_card($city, 'Oregon'); ?>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="ipr-area-panel" data-panel="wa" hidden>
        <div class="ipr-area-panel__head">
          <h2 class="font-[var(--ipr-display)] text-2xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)] md:text-3xl">
            Washington
          </h2>
          <span class="ipr-area-panel__pill">📍 <?php echo count($wa_cities); ?> Cities</span>
        </div>
        <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
          <?php foreach ($wa_cities as $city) : ipr_area_city_card($city, 'Washington'); ?>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="ipr-area-panel" data-panel="all" hidden>
        <div class="ipr-area-panel__head">
          <h2 class="font-[var(--ipr-display)] text-2xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)] md:text-3xl">
            All Cities
          </h2>
          <span class="ipr-area-panel__pill">📍 <?php echo esc_html($total_cities); ?> Cities</span>
        </div>
        <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
          <?php foreach ($or_cities as $city) : ipr_area_city_card($city, 'Oregon'); ?>
          <?php endforeach; ?>
          <?php foreach ($wa_cities as $city) : ipr_area_city_card($city, 'Washington'); ?>
          <?php endforeach; ?>
        </div>
      </div>

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
    --ipr-ink: #1A1A1A;
    --ipr-yellow: #D0161C;
    --ipr-wheat: #6E6E73;
    --ipr-paper: #EDEDED;
    --ipr-steel: #5B5B5F;
    --ipr-rust: #7A0E12;
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
    border-bottom: 1px dashed rgba(208, 22, 28, 0.5);
    padding-bottom: 0.1rem;
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
    text-shadow: 1.5px 1.5px 0 rgba(110, 110, 115, 0.4);
  }

  .ipr-stencil-eyebrow--dark {
    color: var(--ipr-wheat);
    border-bottom-color: rgba(26, 26, 26, 0.25);
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
    vertical-align: middle;
  }

  /* ── Region tabs (Oregon / Washington / All cities) ── */
  .ipr-area-tablist {
    display: flex;
    align-items: center;
    gap: 2rem;
    border-bottom: 1px solid rgba(254, 254, 254, 0.16);
    overflow-x: auto;
    overflow-y: hidden;
  }

  .ipr-area-tab {
    position: relative;
    padding: 0 0 0.9rem;
    background: none;
    border: none;
    cursor: pointer;
    font-family: "IBM Plex Mono", monospace;
    font-size: 0.85rem;
    font-weight: 600;
    letter-spacing: 0.02em;
    text-transform: uppercase;
    color: rgba(254, 254, 254, 0.5);
    white-space: nowrap;
    transition: color .2s ease, transform .2s ease;
  }

  .ipr-area-tab::after {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    bottom: -1px;
    height: 2px;
    background: var(--ipr-yellow);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform .3s cubic-bezier(.22, 1, .36, 1);
  }

  .ipr-area-tab:hover {
    color: rgba(254, 254, 254, 0.85);
    transform: translateY(-1px);
  }

  .ipr-area-tab:hover::after {
    transform: scaleX(1);
    background: rgba(208, 22, 28, 0.35);
  }

  .ipr-area-tab.is-active {
    color: var(--ipr-white);
  }

  .ipr-area-tab.is-active::after {
    transform: scaleX(1);
    background: var(--ipr-yellow);
  }

  .ipr-area-tab__count {
    color: rgba(254, 254, 254, 0.45);
    font-weight: 500;
  }

  /* ── Stats ── */
  .ipr-area-stat {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    transition: transform .3s ease;
  }

  .ipr-area-stat:hover {
    transform: translateY(-3px);
  }

  /* Altura fija compartida por el valor normal y el holo, para que las
     etiquetas ("YEARS IN THE REGION", "CITIES SERVED"...) queden todas
     alineadas en la misma línea sin importar cuál stat es más alto. */
  .ipr-area-stat__value-slot {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 2.6rem;
  }

  .ipr-area-stat__value {
    font-family: var(--ipr-display);
    font-size: 2.25rem;
    font-weight: 700;
    color: var(--ipr-yellow);
    line-height: 1;
  }

  /* ── Efecto holográfico 3D — reservado para el stat "15+" ── */
  .ipr-holo {
    position: relative;
    width: 76px;
    height: 100%;
    margin: 0 auto;
    transform-style: preserve-3d;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: ipr-holo-wobble 6.2s ease-in-out infinite;
  }

  @keyframes ipr-holo-wobble {
    0%   { transform: rotateX(16deg) rotateY(-18deg); }
    50%  { transform: rotateX(18deg) rotateY(18deg); }
    100% { transform: rotateX(16deg) rotateY(-18deg); }
  }

  .ipr-holo__layer {
    position: absolute;
    font-family: var(--ipr-display);
    font-weight: 800;
    font-size: 2.25rem;
    letter-spacing: -0.03em;
    line-height: 1;
    -webkit-text-stroke: 1px rgba(208, 22, 28, 0.7);
    background: linear-gradient(
      90deg,
      rgba(208, 22, 28, 0.18) 0%,
      rgba(208, 22, 28, 0.95) 35%,
      rgba(255, 214, 102, 0.8) 60%,
      rgba(208, 22, 28, 0.22) 100%
    );
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    filter: drop-shadow(0 6px 12px rgba(0, 0, 0, 0.5));
    opacity: 0.95;
    transform-style: preserve-3d;
  }

  .ipr-holo__layer--back {
    opacity: 0.18;
    filter: blur(1px);
    transform: translateZ(-36px);
    -webkit-text-stroke: 1px rgba(208, 22, 28, 0.45);
  }

  .ipr-holo__layer--mid {
    opacity: 0.42;
    filter: blur(0.4px);
    transform: translateZ(-18px);
    -webkit-text-stroke: 1px rgba(208, 22, 28, 0.55);
  }

  .ipr-holo__layer--front {
    opacity: 0.98;
    transform: translateZ(0);
    -webkit-text-stroke: 1px rgba(208, 22, 28, 0.78);
  }

  @media (prefers-reduced-motion: reduce) {
    .ipr-holo { animation: none !important; }
  }

  .ipr-area-stat__label {
    margin-top: 0.5rem;
    font-family: "IBM Plex Mono", monospace;
    font-size: 0.68rem;
    font-weight: 600;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: rgba(254, 254, 254, 0.65);
  }

  @media (min-width: 640px) {
    .ipr-area-stat { align-items: flex-start; text-align: left; }
    .ipr-area-stat__value-slot { justify-content: flex-start; }
  }

  /* ── Region panels ── */
  .ipr-area-panel + .ipr-area-panel {
    margin-top: 3rem;
  }

  .ipr-area-panel__head {
    display: flex;
    align-items: center;
    gap: 0.9rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid rgba(26, 26, 26, 0.16);
    animation: ipr-card-pop .5s cubic-bezier(.22, 1, .36, 1) both;
  }

  @media (prefers-reduced-motion: reduce) {
    .ipr-area-panel__head { animation: none !important; }
  }

  .ipr-area-panel__pill {
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
    padding: 0.3rem 0.75rem;
    background: rgba(26, 26, 26, 0.08);
    transition: background .2s ease, transform .2s ease;
    border-radius: 999px;
    font-family: "IBM Plex Mono", monospace;
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    color: var(--ipr-ink);
  }

  /* ── City cards ──
     La animación de entrada usa @keyframes (no transition) para que se
     vuelva a disparar cada vez que un panel pasa de hidden a visible al
     cambiar de tab — togglear [hidden] recrea el layout y reinicia
     cualquier animation en curso. */
  .ipr-city-card {
    background: var(--ipr-white);
    border: 2px solid var(--ipr-ink);
    overflow: hidden;
    animation: ipr-card-pop .5s cubic-bezier(.22, 1, .36, 1) both;
    transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
  }

  .ipr-city-card:hover {
    transform: translateY(-5px);
    border-color: var(--ipr-yellow);
    box-shadow: 0 16px 30px rgba(26, 26, 26, 0.18);
  }

  @keyframes ipr-card-pop {
    from { opacity: 0; transform: translateY(18px) scale(.96); }
    to   { opacity: 1; transform: translateY(0) scale(1); }
  }

  .ipr-area-panel .ipr-city-card:nth-child(1) { animation-delay: 0ms; }
  .ipr-area-panel .ipr-city-card:nth-child(2) { animation-delay: 70ms; }
  .ipr-area-panel .ipr-city-card:nth-child(3) { animation-delay: 140ms; }
  .ipr-area-panel .ipr-city-card:nth-child(4) { animation-delay: 210ms; }
  .ipr-area-panel .ipr-city-card:nth-child(5) { animation-delay: 280ms; }
  .ipr-area-panel .ipr-city-card:nth-child(6) { animation-delay: 350ms; }
  .ipr-area-panel .ipr-city-card:nth-child(n+7) { animation-delay: 420ms; }

  @media (prefers-reduced-motion: reduce) {
    .ipr-city-card { animation: none !important; }
  }

  .ipr-city-card__map {
    position: relative;
    height: 170px;
    overflow: hidden;
  }

  .ipr-city-card__map iframe {
    width: 100%;
    height: 100%;
    border: 0;
    display: block;
    transition: transform .4s ease;
  }

  .ipr-city-card:hover .ipr-city-card__map iframe {
    transform: scale(1.06);
  }

  .ipr-city-card__maps-link {
    position: absolute;
    top: 0.6rem;
    left: 0.6rem;
    z-index: 2;
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
    padding: 0.35rem 0.6rem;
    background: var(--ipr-white);
    color: var(--ipr-ink);
    font-family: "IBM Plex Mono", monospace;
    font-size: 0.68rem;
    font-weight: 700;
    text-decoration: none;
    box-shadow: 0 2px 8px rgba(26, 26, 26, 0.25);
    transition: background .2s ease;
  }

  .ipr-city-card__maps-link:hover {
    background: var(--ipr-yellow);
  }

  .ipr-city-card__body {
    padding: 1.25rem 1.5rem 1.5rem;
  }

  .ipr-city-card__state {
    font-family: "IBM Plex Mono", monospace;
    font-size: 0.66rem;
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: var(--ipr-wheat);
  }

  .ipr-city-card__name {
    margin-top: 0.3rem;
    font-family: var(--ipr-display);
    font-size: 1.3rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: -0.01em;
    color: var(--ipr-ink);
  }

  .ipr-city-card__meta {
    margin-top: 0.5rem;
    font-size: 0.82rem;
    line-height: 1.5;
    color: var(--ipr-steel);
  }

  .ipr-city-card__actions {
    margin-top: 1.1rem;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 0.75rem;
  }

  .ipr-city-card__call {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    font-family: "IBM Plex Mono", monospace;
    font-size: 0.78rem;
    font-weight: 700;
    color: var(--ipr-ink);
    text-decoration: none;
    border-bottom: 1px solid var(--ipr-ink);
    padding-bottom: 0.1rem;
    transition: color .2s ease, border-color .2s ease;
  }

  .ipr-city-card__call:hover {
    color: var(--ipr-wheat);
    border-color: var(--ipr-wheat);
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

    // Region tabs (Oregon / Washington / All cities)
    var tabs = document.querySelectorAll(".ipr-area-tab");
    var panels = document.querySelectorAll(".ipr-area-panel");

    tabs.forEach(function (tab) {
      tab.addEventListener("click", function () {
        var target = tab.getAttribute("data-panel");

        tabs.forEach(function (otherTab) {
          var isActive = otherTab === tab;
          otherTab.classList.toggle("is-active", isActive);
          otherTab.setAttribute("aria-selected", String(isActive));
        });

        panels.forEach(function (panel) {
          panel.hidden = panel.getAttribute("data-panel") !== target;
        });
      });
    });
  });
</script>

<?php get_footer(); ?>
