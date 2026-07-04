<?php
/**
 * Template Name: Home Template
 *
 * Homepage — Independent Portable Restrooms
 * Navbar y footer vienen de header.php / footer.php.
 * Dirección visual: lenguaje de tag de servicio / manifiesto de despacho de campo.
 * Prioridad de mensaje: agricultura primero (según brief).
 *
 * Nota: este archivo es self-contained (todos sus estilos viven en su propio
 * <style> al final) para que no dependa de que index.css esté reconstruido/
 * desplegado. Si index.css ya está actualizado en tu build, hay clases
 * duplicadas a propósito (no rompe nada, solo es redundante).
 */

get_header(); ?>

<main class="ipr-home bg-[var(--ipr-white)] text-[var(--ipr-ink)] overflow-hidden">

  <?php
    // [FOTO/VIDEO — Pend. #D] Placeholder temporal (Unsplash License, libre de uso).
    // Reemplazar por material real de campo cuando el cliente lo entregue.
    $hero_image = 'https://images.unsplash.com/photo-1723530934765-063453910f35?fm=jpg&q=80&w=1800&auto=format&fit=crop';

    $manifest_stats = [
      ['label' => 'Route', 'value' => 'Eastern OR + WA Tri-Cities'],
      ['label' => 'Dispatch', 'value' => '24/7'],
      ['label' => 'In Service', 'value' => '15+ Years'],
      ['label' => 'Language', 'value' => 'EN / ES'],
    ];

    $services = [
      ['tag' => '01', 'title' => 'Standard Restrooms', 'copy' => 'Clean, well-stocked units for daily use on farms, job sites, and events.', 'anchor' => '/services#standard-portable-restrooms'],
      ['tag' => '02', 'title' => 'ADA Units', 'copy' => 'Ground-level, wheelchair-accessible units for inclusive events and compliant job sites.', 'anchor' => '/services#ada-accessible-units'],
      ['tag' => '03', 'title' => 'Handwash Stations', 'copy' => 'Internal, external, and standalone stations for crews and guests.', 'anchor' => '/services#handwash-stations'],
      ['tag' => '04', 'title' => 'Restroom Trailers & Doubles', 'copy' => 'Trailer-mounted units and two-stall doubles for weddings and larger events.', 'anchor' => '/services#restroom-trailers-doubles'],
      ['tag' => '05', 'title' => 'Emergency Service', 'copy' => 'Need a unit now? Our 24/7 line gets you covered fast, any day of the year.', 'anchor' => '/services#emergency-service'],
      ['tag' => '06', 'title' => 'Flexible Rental Terms', 'copy' => 'Daily, weekly, and monthly rentals — delivery, service, and pickup handled for you.', 'anchor' => '/services#flexible-rental-terms'],
    ];

    // Orden = prioridad real del brief: agricultura encabeza la ruta.
    $industries = [
      ['title' => 'Agriculture & Ranching', 'copy' => 'Clean units and handwash stations to keep crews going through the season — reliable service and fast response when it matters most.', 'priority' => true, 'image' => 'https://images.unsplash.com/photo-1761839257961-4dce65b72d99?fm=jpg&q=80&w=1200&auto=format&fit=crop'],
      ['title' => 'Construction', 'copy' => 'Job-site restrooms, ADA units, and recurring service with simple monthly billing.', 'priority' => false],
      ['title' => 'Events', 'copy' => 'Weddings, sporting events, graduations, and parties — presentable units, trailers, and handwash stations for any crowd.', 'priority' => false],
      ['title' => 'School Districts', 'copy' => 'Extra capacity and event support for campuses and activities.', 'priority' => false],
    ];

    $why_values = [
      ['title' => '15+ Yrs Local', 'copy' => 'We know the region and its seasons.'],
      ['title' => '24/7 Dispatch', 'copy' => 'Call any time; we answer and show up.'],
      ['title' => 'Full Fleet', 'copy' => 'Standard, ADA, handwash, trailers.'],
      ['title' => 'Flexible Terms', 'copy' => 'Daily, weekly, or monthly.'],
      ['title' => 'EN / ES', 'copy' => 'Bilingual service, start to finish.'],
    ];

    $service_cities = [
      'or' => ['Arlington', 'Boardman', 'Heppner', 'Irrigon', 'Umatilla', 'Hermiston', 'Pendleton'],
      'wa' => ['Plymouth', 'Kennewick', 'Pasco', 'Richland'],
    ];

    // Pend. #F — no publicar reseñas inventadas. Activar solo con reseñas reales de Google Business Profile.
    $ipr_show_reviews = false;
  ?>

  <!-- 01 · HERO — encabezado de manifiesto de despacho -->
  <section class="ipr-bleed-under-nav relative flex min-h-[620px] w-full items-center overflow-hidden lg:min-h-[720px]">
    <div class="absolute inset-0">
      <!-- Cuando el cliente entregue video real, reemplazar este <img> por <video autoplay muted loop playsinline poster="..."><source src="..." type="video/mp4"></video> -->
      <img
        src="<?php echo esc_url($hero_image); ?>"
        alt="Wheat field in the Columbia Basin, Eastern Oregon"
        class="h-full w-full object-cover"
      >
    </div>
    <div class="absolute inset-0 bg-[var(--ipr-ink)]/78"></div>

    <div class="ipr-ticket-stub" aria-hidden="true">
      <span>TICKET NO.</span>
      <strong><?php echo esc_html(date('ymd')); ?>-IPR</strong>
    </div>

    <div class="relative z-10 mx-auto w-full max-w-5xl px-4 py-20 text-center">
      <p class="ipr-reveal-up ipr-stencil-eyebrow">
        Dispatch Notice — Columbia Basin Service Route
      </p>

      <p class="ipr-reveal-up ipr-location-pin">
        <span aria-hidden="true">📍</span> 207 NW First Street, Boardman, OR 97818
      </p>

      <h1 class="ipr-reveal-up mt-6 font-[var(--ipr-display)] text-4xl font-bold uppercase leading-[1.04] tracking-[-0.01em] text-[var(--ipr-white)] md:text-6xl">
        Clean Restrooms.<br>
        <span class="ipr-stencil-tilt">Delivered On Time.</span>
      </h1>

      <p class="ipr-reveal-up mx-auto mt-6 max-w-2xl text-base leading-7 text-[var(--ipr-white)]/82">
        Locally trusted for 15+ years, serving farms, ranches, job sites, and events across Eastern Oregon and the Washington Tri-Cities.
      </p>

      <div class="ipr-reveal-up mt-9 flex flex-col items-center justify-center gap-4 sm:flex-row">
        <a href="/contact" class="ipr-tab ipr-tab-yellow">Request a Quote</a>
        <a href="tel:+15417017369" class="ipr-tab ipr-tab-outline">
          <span class="ipr-tab-outline__inner">Call 24/7 · 541-701-7369</span>
        </a>
      </div>
    </div>
  </section>


  <!-- 02 · DISPATCH MANIFEST STRIP — marquee, el contenido rueda en loop -->
  <section class="ipr-marquee ipr-stamped-bg relative bg-[var(--ipr-ink)]">
    <div class="relative z-10 ipr-marquee__track">
      <?php for ($g = 0; $g < 2; $g++) : ?>
        <div class="ipr-marquee__group" <?php echo $g === 1 ? 'aria-hidden="true"' : ''; ?>>
          <?php foreach ($manifest_stats as $stat) : ?>
            <span class="ipr-marquee__item">
              <span class="ipr-marquee__dot"></span>
              <strong><?php echo esc_html($stat['label']); ?>:</strong>
              <?php echo esc_html($stat['value']); ?>
            </span>
          <?php endforeach; ?>
        </div>
      <?php endfor; ?>
    </div>
  </section>

  <!-- 03 · SERVICES — tags de servicio -->
  <section class="bg-[var(--ipr-white)] py-20 lg:py-24" style="--sec-bg: var(--ipr-white);">
    <div class="mx-auto max-w-7xl px-4">
      <div class="ipr-reveal-up mx-auto max-w-3xl text-center">
        <p class="ipr-stencil-eyebrow ipr-stencil-eyebrow--dark">Service Tags</p>
        <h2 class="mt-4 font-[var(--ipr-display)] text-3xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)] md:text-5xl">
          Our Services
        </h2>
        <p class="mt-5 text-base leading-8 text-[var(--ipr-steel)]">
          From a single unit for a weekend event to full sanitation for a job site or harvest crew.
        </p>
      </div>

      <div class="mt-14 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
        <?php foreach ($services as $service) : ?>
          <a href="<?php echo esc_url($service['anchor']); ?>" class="ipr-tag group block">
            <span class="ipr-tag__eyelet"></span>
            <span class="font-mono text-[11px] font-bold uppercase tracking-[0.18em] text-[var(--ipr-wheat)]">
              Tag No. <?php echo esc_html($service['tag']); ?>
            </span>
            <h3 class="mt-3 font-[var(--ipr-display)] text-xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)]">
              <?php echo esc_html($service['title']); ?>
            </h3>
            <p class="mt-3 text-[15px] leading-7 text-[var(--ipr-steel)]">
              <?php echo esc_html($service['copy']); ?>
            </p>
            <span class="mt-5 inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.14em] text-[var(--ipr-ink)] transition group-hover:gap-3">
              Learn more →
            </span>
          </a>
        <?php endforeach; ?>
      </div>

      <div class="ipr-reveal-up mt-12 text-center">
        <a href="/services" class="ipr-tab ipr-tab-ink">See All Services →</a>
      </div>
    </div>
  </section>

  <!-- 04 · INDUSTRIES — hoja de ruta / manifiesto de items -->
  <section class="border-y-4 border-[var(--ipr-ink)] bg-[var(--ipr-paper)] py-20 lg:py-24" style="--sec-bg: var(--ipr-paper);">
    <div class="mx-auto max-w-5xl px-4">
      <div class="ipr-reveal-up mx-auto max-w-3xl text-center">
        <p class="ipr-stencil-eyebrow ipr-stencil-eyebrow--dark">Route Manifest</p>
        <h2 class="mt-4 font-[var(--ipr-display)] text-3xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)] md:text-5xl">
          Industries We Serve
        </h2>
      </div>

      <div class="mt-14 border-t-2 border-dashed border-[var(--ipr-steel)]/40">
        <?php foreach ($industries as $i => $industry) : ?>
          <?php if ($industry['priority']) : ?>
            <article class="ipr-reveal-left ipr-manifest-row ipr-manifest-row--priority">
              <div class="ipr-manifest-row__lead">
                <span class="ipr-tab ipr-tab-yellow ipr-tab-sm">★ Priority Route</span>
              </div>
              <div class="grid gap-6 md:grid-cols-[1.1fr_0.9fr] md:items-center">
                <div>
                  <h3 class="mt-3 font-[var(--ipr-display)] text-2xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)] md:text-3xl">
                    <?php echo esc_html($industry['title']); ?>
                  </h3>
                  <p class="mt-3 max-w-md text-[15px] leading-7 text-[var(--ipr-steel)]">
                    <?php echo esc_html($industry['copy']); ?>
                  </p>
                </div>
                <div class="h-48 w-full overflow-hidden border-2 border-[var(--ipr-ink)] md:h-56">
                  <img src="<?php echo esc_url($industry['image']); ?>" alt="Agriculture and ranching service" class="h-full w-full object-cover">
                </div>
              </div>
            </article>
          <?php else : ?>
            <article class="ipr-reveal-stagger ipr-manifest-row">
              <span class="font-mono text-xs font-bold text-[var(--ipr-wheat)]"><?php printf('%02d', $i + 1); ?></span>
              <div class="ipr-manifest-row__leader"></div>
              <div>
                <h3 class="font-[var(--ipr-display)] text-lg font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)]">
                  <?php echo esc_html($industry['title']); ?>
                </h3>
                <p class="mt-1.5 text-sm leading-6 text-[var(--ipr-steel)]">
                  <?php echo esc_html($industry['copy']); ?>
                </p>
              </div>
            </article>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 05 · WHY US — sellos de aprobación -->
  <section class="ipr-stamped-bg relative bg-[var(--ipr-ink)] py-20 lg:py-24">
    <div class="relative z-10 mx-auto max-w-7xl px-4">
      <div class="ipr-reveal-up mx-auto max-w-3xl text-center">
        <p class="ipr-stencil-eyebrow">Approval Stamps</p>
        <h2 class="mt-4 font-[var(--ipr-display)] text-3xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-white)] md:text-5xl">
          Why Independent Portable Restrooms
        </h2>
      </div>

      <div class="mt-14 flex flex-wrap justify-center gap-8">
        <?php foreach ($why_values as $i => $value) : ?>
          <div class="ipr-reveal-stagger ipr-stamp" style="--tilt: <?php echo esc_attr($i % 2 === 0 ? '-3deg' : '2.5deg'); ?>;">
            <h3 class="font-[var(--ipr-display)] text-sm font-bold uppercase tracking-[-0.01em] text-[var(--ipr-white)]">
              <?php echo esc_html($value['title']); ?>
            </h3>
            <p class="mt-1.5 text-xs leading-5 text-[var(--ipr-white)]/70">
              <?php echo esc_html($value['copy']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php if ($ipr_show_reviews) : ?>
  <!-- 06 · REVIEWS (activar solo con reseñas reales — Pend. #F) -->
  <section class="border-y-2 border-[var(--ipr-ink)] bg-[var(--ipr-paper)] py-20">
    <div class="mx-auto max-w-7xl px-4">
      <h2 class="ipr-reveal-up text-center font-[var(--ipr-display)] text-3xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)] md:text-5xl">
        What Our Customers Say
      </h2>
      <div class="mt-12 ipr-reveal-up">
        <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- 07 · SERVICE AREA — hoja de ruta -->
  <section class="bg-[var(--ipr-white)] py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="grid gap-12 lg:grid-cols-2 lg:items-start">
        <div class="ipr-reveal-left">
          <p class="ipr-stencil-eyebrow ipr-stencil-eyebrow--dark">Delivery Route</p>
          <h2 class="mt-4 font-[var(--ipr-display)] text-3xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)] md:text-5xl">
            Where We Serve
          </h2>
          <p class="mt-5 text-base leading-8 text-[var(--ipr-steel)]">
            Based in Boardman, OR — dispatching across Eastern Oregon and the Washington Tri-Cities.
          </p>

          <div class="mt-8 grid grid-cols-2 gap-8">
            <div>
              <p class="font-mono text-[11px] font-bold uppercase tracking-[0.18em] text-[var(--ipr-wheat)]">OR — Stops</p>
              <ul class="mt-3 space-y-1.5">
                <?php foreach ($service_cities['or'] as $city) : ?>
                  <li class="ipr-manifest-city"><?php echo esc_html($city); ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div>
              <p class="font-mono text-[11px] font-bold uppercase tracking-[0.18em] text-[var(--ipr-wheat)]">WA — Stops</p>
              <ul class="mt-3 space-y-1.5">
                <?php foreach ($service_cities['wa'] as $city) : ?>
                  <li class="ipr-manifest-city"><?php echo esc_html($city); ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>

          <p class="mt-8 text-sm font-bold uppercase tracking-[0.02em] text-[var(--ipr-steel)]">
            Don't see your town? Call us — we may still cover you.
          </p>
        </div>

        <div class="ipr-reveal-right ipr-route-map h-[360px] w-full border-2 border-[var(--ipr-ink)] bg-[var(--ipr-paper)]">
          <!-- [MAP — Pend. #G] Ilustración de ruta, no es un mapa geográfico real.
               Reemplazar por embed real de Google Maps cuando el cliente confirme (207 NW First St, Boardman, OR). -->
          <svg viewBox="0 0 600 360" class="h-full w-full" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Illustrated dispatch route across the Columbia Basin">
            <defs>
              <pattern id="ipr-grid" width="30" height="30" patternUnits="userSpaceOnUse">
                <path d="M 30 0 L 0 0 0 30" fill="none" stroke="#10263B" stroke-opacity="0.06" stroke-width="1"/>
              </pattern>
            </defs>
            <rect width="600" height="360" fill="url(#ipr-grid)" />

            <!-- Ruta de despacho (trazo punteado, forma ilustrativa) -->
            <path d="M 90 260 C 150 200, 170 150, 230 140 S 320 170, 360 120 S 470 90, 520 70"
                  fill="none" stroke="#C68A3D" stroke-width="2.5" stroke-dasharray="7 7" />

            <!-- HQ · Boardman, OR -->
            <circle cx="90" cy="260" r="9" fill="#F3B200" stroke="#10263B" stroke-width="2" />
            <text x="106" y="257" font-family="IBM Plex Mono, monospace" font-size="12" font-weight="700" fill="#10263B">HQ · BOARDMAN, OR</text>
            <text x="106" y="272" font-family="IBM Plex Mono, monospace" font-size="10" fill="#59636B">207 NW First Street</text>

            <!-- Stops OR -->
            <circle cx="230" cy="140" r="5" fill="#10263B" />
            <text x="240" y="137" font-family="IBM Plex Mono, monospace" font-size="11" fill="#10263B">HERMISTON</text>

            <circle cx="360" cy="120" r="5" fill="#10263B" />
            <text x="370" y="117" font-family="IBM Plex Mono, monospace" font-size="11" fill="#10263B">PENDLETON</text>

            <circle cx="170" cy="150" r="4" fill="#59636B" />
            <text x="145" y="185" font-family="IBM Plex Mono, monospace" font-size="10" fill="#59636B">IRRIGON</text>

            <!-- Stops WA (Tri-Cities) -->
            <circle cx="470" cy="90" r="5" fill="#10263B" />
            <text x="480" y="87" font-family="IBM Plex Mono, monospace" font-size="11" fill="#10263B">KENNEWICK, WA</text>

            <circle cx="520" cy="70" r="5" fill="#10263B" />
            <text x="500" y="52" font-family="IBM Plex Mono, monospace" font-size="11" fill="#10263B">RICHLAND, WA</text>

            <!-- Marca de rumbo -->
            <g transform="translate(540, 300)">
              <circle r="22" fill="none" stroke="#10263B" stroke-width="1.5" stroke-dasharray="3 4" />
              <text x="0" y="-28" text-anchor="middle" font-family="IBM Plex Mono, monospace" font-size="11" font-weight="700" fill="#10263B">N</text>
              <path d="M0 -14 L5 4 L0 -1 L-5 4 Z" fill="#F3B200" />
            </g>

            <text x="16" y="24" font-family="IBM Plex Mono, monospace" font-size="10" font-weight="700" letter-spacing="2" fill="#C68A3D">ROUTE MAP · ILLUSTRATIVE</text>
          </svg>
        </div>
      </div>
    </div>
  </section>

  <!-- 08 · CTA BAND (componente React reutilizable) -->
  <div
    class="ipr-cta-mount"
    data-heading="Need coverage for your farm, job site, or event?"
    data-subtext="Get a fast quote or call our dispatch line any time."
    data-cta1-text="Request a Quote"
    data-cta1-href="/contact"
    data-cta2-text="Call 24/7 · 541-701-7369"
    data-cta2-href="tel:+15417017369"
  ></div>

</main>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=IBM+Plex+Sans:wght@400;500;600&family=IBM+Plex+Mono:wght@500;700&display=swap" rel="stylesheet">

<style>
  .ipr-home {
    --ipr-ink: #10263B;
    --ipr-yellow: #F3B200;
    --ipr-wheat: #C68A3D;
    --ipr-paper: #EAD9AF;
    --ipr-steel: #59636B;
    --ipr-rust: #8B3A2B;
    --ipr-white: #FEFEFE;
    --ipr-display: 'Oswald', 'Segoe UI', Arial, sans-serif;
    --sec-bg: var(--ipr-white);

    font-family: "IBM Plex Sans", "Segoe UI", Arial, sans-serif;
  }

  .ipr-location-pin {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    margin-top: 0.9rem;
    font-family: "IBM Plex Mono", monospace;
    font-size: 0.78rem;
    font-weight: 500;
    letter-spacing: 0.04em;
    color: rgba(254, 254, 254, 0.82);
  }

  /* ── Stamped diagonal pattern with parallax scroll ── */
  .ipr-stamped-bg {
    overflow: hidden;
  }

  .ipr-stamped-bg::before {
    content: "";
    position: absolute;
    inset: 0;
    background-image: repeating-linear-gradient(
      135deg,
      var(--ipr-yellow) 0,
      var(--ipr-yellow) 3px,
      transparent 3px,
      transparent 34px
    );
    background-attachment: fixed;
    opacity: 0.12;
    mix-blend-mode: overlay;
    pointer-events: none;
  }

  /* ── Marquee de manifest stats — el contenido rueda en loop ── */
  .ipr-marquee {
    overflow: hidden;
    padding: 0;
  }

  .ipr-marquee__track {
    display: flex;
    width: max-content;
    animation: ipr-marquee-scroll 20s linear infinite;
  }

  .ipr-marquee:hover .ipr-marquee__track {
    animation-play-state: paused;
  }

  .ipr-marquee__group {
    display: flex;
    align-items: center;
    flex-shrink: 0;
    gap: 3rem;
    padding: 1.5rem 2rem;
  }

  .ipr-marquee__item {
    display: inline-flex;
    align-items: center;
    gap: 0.6rem;
    white-space: nowrap;
    font-family: "IBM Plex Mono", monospace;
    font-size: 0.82rem;
    font-weight: 600;
    letter-spacing: 0.02em;
    text-transform: uppercase;
    color: var(--ipr-white);
  }

  .ipr-marquee__item strong {
    color: var(--ipr-yellow);
    font-weight: 700;
  }

  .ipr-marquee__dot {
    display: inline-block;
    width: 8px;
    height: 8px;
    flex: 0 0 auto;
    background: var(--ipr-wheat);
    transform: rotate(45deg);
  }

  @keyframes ipr-marquee-scroll {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }

  @media (prefers-reduced-motion: reduce) {
    .ipr-marquee__track {
      animation: none !important;
    }
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

  .ipr-stencil-tilt {
    display: inline-block;
    transform: rotate(-0.8deg);
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

  .ipr-route-map {
    display: block;
  }

  /* ── Tear-off tab buttons ── */
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

  .ipr-tab:hover {
    transform: translateX(3px);
  }

  .ipr-tab-sm {
    padding: 0.5rem 1.5rem 0.5rem 1rem;
    font-size: 0.7rem;
  }

  .ipr-tab-yellow {
    background: var(--ipr-yellow);
    color: var(--ipr-ink);
  }

  .ipr-tab-yellow:hover { filter: brightness(1.08); }

  .ipr-tab-ink {
    background: var(--ipr-ink);
    color: var(--ipr-white);
  }

  .ipr-tab-ink:hover { filter: brightness(1.25); }

  /* El outline usa doble capa para que el borde siga la punta del clip-path
     completa (un border normal no sigue el corte diagonal, se ve incompleto). */
  .ipr-tab-outline {
    position: relative;
    background: rgba(254, 254, 254, 0.42);
    padding: 0;
  }

  .ipr-tab-outline:hover {
    background: rgba(254, 254, 254, 0.65);
  }

  .ipr-tab-outline__inner {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    margin: 1px;
    padding: calc(1rem - 1px) calc(2rem - 1px) calc(1rem - 1px) calc(1.5rem - 1px);
    background: rgba(8, 26, 44, 0.55);
    backdrop-filter: blur(3px);
    color: var(--ipr-white);
    clip-path: polygon(0 0, calc(100% - 15px) 0, 100% 50%, calc(100% - 15px) 100%, 0 100%);
  }

  /* ── Service tag cards ── */
  .ipr-tag {
    position: relative;
    background: var(--sec-bg);
    border: 1px solid rgba(16, 38, 59, 0.16);
    border-bottom-style: dashed;
    padding: 2.25rem 1.75rem 1.75rem;
    transition: transform .22s ease, box-shadow .22s ease;
  }

  .ipr-tag:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 30px rgba(16, 38, 59, 0.10);
  }

  .ipr-tag__eyelet {
    position: absolute;
    top: -1px;
    left: 1.75rem;
    width: 14px;
    height: 14px;
    border-radius: 50%;
    border: 2px solid var(--ipr-steel);
    background: var(--sec-bg);
    transform: translateY(-50%);
  }

  /* ── Manifest / route rows ── */
  .ipr-manifest-row {
    display: flex;
    align-items: flex-start;
    gap: 1.25rem;
    padding: 1.5rem 0;
    border-bottom: 2px dashed rgba(16, 38, 59, 0.22);
  }

  .ipr-manifest-row--priority {
    display: block;
    padding: 2rem 1.75rem;
    margin-bottom: 0.5rem;
    background: var(--ipr-ink);
    color: var(--ipr-white);
    border: 2px solid var(--ipr-ink);
    border-bottom-style: solid;
  }

  .ipr-manifest-row--priority h3 { color: var(--ipr-white); }
  .ipr-manifest-row--priority p { color: rgba(254, 254, 254, 0.78); }

  .ipr-manifest-row__lead { margin-bottom: 0.25rem; }

  .ipr-manifest-row__leader {
    flex: 1 1 auto;
    display: none;
  }

  .ipr-manifest-city {
    font-size: 0.92rem;
    color: var(--ipr-ink);
    border-bottom: 1px dotted rgba(16, 38, 59, 0.25);
    padding-bottom: 0.3rem;
  }

  /* ── Approval stamps ── */
  .ipr-stamp {
    width: 180px;
    text-align: center;
    padding: 1.25rem 0.75rem;
    border: 2px dashed var(--ipr-wheat);
    border-radius: 50%;
    aspect-ratio: 1 / 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    transform: rotate(var(--tilt, 0deg));
  }

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

  @media (max-width: 640px) {
    .ipr-stamp { width: 140px; }
  }

  @media (prefers-reduced-motion: reduce) {
    .ipr-reveal-up, .ipr-reveal-left, .ipr-reveal-right, .ipr-reveal-stagger,
    .ipr-tab, .ipr-tag {
      opacity: 1 !important;
      transform: none !important;
      transition: none !important;
    }

    .ipr-marquee__track {
      animation: none !important;
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