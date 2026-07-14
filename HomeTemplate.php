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
    $hero_video  = '/wp-content/uploads/2026/07/IPRHeroVideo.mp4';
    $hero_poster = '/wp-content/uploads/2026/07/IPR1.jpg-scaled.jpeg';

    $manifest_stats = [
      ['label' => 'Route', 'value' => 'Eastern OR + WA Tri-Cities'],
      ['label' => 'Dispatch', 'value' => '24/7'],
      ['label' => 'In Service', 'value' => '15+ Years'],
      ['label' => 'Language', 'value' => 'EN / ES'],
    ];

    $services = [
      ['tag' => '01', 'title' => 'Standard Restrooms', 'copy' => 'Clean, fully stocked porta potty rentals for daily use on farms, job sites, and events.', 'anchor' => '/services#standard-portable-restrooms', 'image' => '/wp-content/uploads/2026/07/IMG_5611-e1784000646694.jpeg'],
      ['tag' => '02', 'title' => 'ADA Units', 'copy' => 'Ground-level, wheelchair-accessible restrooms with extra interior space and handrails.', 'anchor' => '/services#ada-accessible-units', 'image' => '/wp-content/uploads/2026/07/IMG_5610-e1784000682769.jpeg'],
      ['tag' => '03', 'title' => 'Handwash Stations', 'copy' => 'Portable handwash station rentals with soap, fresh water, and paper towels.', 'anchor' => '/services#handwash-stations', 'image' => '/wp-content/uploads/2026/07/IMG_5608-e1784000794154.jpeg'],
      ['tag' => '04', 'title' => 'Restroom Trailers & Doubles', 'copy' => 'Restroom trailers and two-stall doubles with running water, interior lighting, and a clean, comfortable experience.', 'anchor' => '/services#restroom-trailers-doubles', 'image' => '/wp-content/uploads/2026/07/IMG_5609-e1784000713881.jpeg'],
      ['tag' => '05', 'title' => 'Emergency Service', 'copy' => 'Our dispatch line runs 24/7 — call and a real person answers, with same-day delivery in most cases.', 'anchor' => '/services#emergency-service', 'image' => '/wp-content/uploads/2026/07/IMG_5611-e1784000646694.jpeg'],
      ['tag' => '06', 'title' => 'Flexible Rental Terms', 'copy' => 'Rent by the day, the weekend, the week, or the month — scale up or down as the job changes.', 'anchor' => '/services#flexible-rental-terms', 'image' => '/wp-content/uploads/2026/07/IMG_5610-e1784000682769.jpeg'],
    ];

    $industries_bg = '/wp-content/uploads/2026/07/IndustriesBackground-scaled.webp';

    // Orden = prioridad real del brief: agricultura encabeza la ruta.
    $industries = [
      ['title' => 'Agriculture & Ranching', 'copy' => 'Harvest does not wait, and neither do we. We provide field-ready restrooms and handwash stations that keep your crews covered and your operation compliant with field sanitation standards. We understand crew sizes change week to week during the season, so we make adding or moving units fast and simple.', 'image' => '/wp-content/uploads/2026/07/IPR2.jpg-scaled.jpeg'],
      ['title' => 'Construction', 'copy' => 'From single-home builds to commercial projects, we keep job sites compliant and crews taken care of. Standard units, ADA restrooms, and handwash stations delivered where the work is, serviced weekly, and billed monthly with simple invoicing your office will appreciate.', 'image' => '/wp-content/uploads/2026/07/IPR3.jpg-scaled.jpeg'],
      ['title' => 'Events', 'copy' => 'Weddings, sporting events, graduations, county fairs, and community festivals. We help you calculate the right number of units for your guest count and event length, deliver before your setup day, and pick up after the last guest leaves.', 'image' => '/wp-content/uploads/2026/07/IPR4.jpg-scaled.jpeg'],
      ['title' => 'School Districts', 'copy' => 'Athletic fields, campus renovations, graduation ceremonies, and outdoor school events. We work around school schedules, deliver during off-hours when needed, and keep every unit clean and stocked.', 'image' => '/wp-content/uploads/2026/07/IPR5.jpg-scaled.jpeg'],
    ];

    $why_values = [
      ['title' => '15+ Yrs Local', 'copy' => 'We are based in Boardman and have run these routes for more than 15 years. We know the region, its roads, its seasons, and what harvest week actually looks like.'],
      ['title' => '24/7 Dispatch', 'copy' => 'Call at 6am or 11pm. A real person answers, not a call center in another state, and a truck shows up.'],
      ['title' => 'Full Fleet', 'copy' => 'Standard units, ADA restrooms, handwash stations, doubles, and trailers. Whatever the job needs, we own it and maintain it ourselves.'],
      ['title' => 'Flexible Terms', 'copy' => 'Daily, weekly, or monthly rentals that flex with your project. No long contracts, no penalties for scaling down.'],
      ['title' => 'EN / ES', 'copy' => 'Bilingual service from the first call to the last pickup. Your crew leads can call us directly in Spanish. Se habla español.'],
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
      <video
        class="h-full w-full object-cover"
        poster="<?php echo esc_url($hero_poster); ?>"
        autoplay
        muted
        loop
        playsinline
      >
        <source src="<?php echo esc_url($hero_video); ?>" type="video/mp4">
      </video>
    </div>
    <div class="absolute inset-0 bg-[var(--ipr-ink)]/78"></div>

    <div class="ipr-ticket-stub" aria-hidden="true">
      <span>TICKET NO.</span>
      <strong><?php echo esc_html(date('ymd')); ?>-IPR</strong>
    </div>

    <div class="relative z-10 mx-auto w-full max-w-5xl px-4 py-20 text-center">
      <h1 class="ipr-reveal-up mt-6 font-[var(--ipr-display)] text-4xl font-bold uppercase leading-[1.04] tracking-[-0.01em] text-[var(--ipr-white)] md:text-6xl">
        Portable Restroom Rentals,<br>
        <span class="ipr-stencil-tilt">Delivered On Time.</span>
      </h1>

      <p class="ipr-reveal-up mx-auto mt-6 max-w-2xl text-base leading-7 text-[var(--ipr-white)]/82">
        Independent Portable Restrooms has served farms, ranches, job sites, and events across Eastern Oregon and the Washington Tri-Cities for more than 15 years. Clean units, scheduled service, and a 24/7 line answered by a local team that knows your area.
      </p>

      <div class="ipr-reveal-up mt-9 flex flex-col items-center justify-center gap-4 sm:flex-row">
        <a href="/contact" class="ipr-tab ipr-tab-yellow">Request a Quote</a>
        <a href="tel:+15417017369" class="ipr-tab ipr-tab-outline">
          <span class="ipr-tab-outline__inner">Call 24/7 · 541-701-7369</span>
        </a>
      </div>

      <p class="ipr-reveal-up mx-auto mt-8 max-w-2xl text-sm leading-6 text-[var(--ipr-white)]/70">
        Whether you need one restroom for a weekend wedding, a full setup for harvest season, or long-term units for a construction project, we handle delivery, weekly cleaning, and pickup so you never have to think about it. One call, one local company, no runaround.
      </p>
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
        <h2 class="mt-4 font-[var(--ipr-display)] text-3xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)] md:text-5xl">
          Our Services
        </h2>
        <p class="mt-5 text-base leading-8 text-[var(--ipr-steel)]">
          Portable sanitation for every job, from a single restroom for a weekend event to complete setups for construction sites and harvest crews. Every rental includes delivery, routine cleaning, and pickup — no hidden fees, no surprises, just clean units that show up on time.
        </p>
      </div>

      <div class="ipr-carousel mt-14">
        <div class="ipr-carousel__track">
          <?php for ($g = 0; $g < 2; $g++) : ?>
            <?php foreach ($services as $service) : ?>
              <div class="ipr-carousel__item" <?php echo $g === 1 ? 'aria-hidden="true"' : ''; ?>>
                <a href="<?php echo esc_url($service['anchor']); ?>" class="ipr-tag group block" tabindex="<?php echo $g === 1 ? '-1' : '0'; ?>">
                  <div class="ipr-tag__media">
                    <img src="<?php echo esc_url($service['image']); ?>" alt="<?php echo esc_attr($service['title']); ?>" loading="lazy">
                  </div>
                  <h3 class="mt-4 font-[var(--ipr-display)] text-xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)]">
                    <?php echo esc_html($service['title']); ?>
                  </h3>
                  <p class="mt-3 text-[15px] leading-7 text-[var(--ipr-steel)]">
                    <?php echo esc_html($service['copy']); ?>
                  </p>
                  <span class="ipr-tag__cta mt-5 inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.14em] text-[var(--ipr-ink)] transition group-hover:gap-3">
                    Learn more →
                  </span>
                </a>
              </div>
            <?php endforeach; ?>
          <?php endfor; ?>
        </div>
      </div>

      <div class="ipr-reveal-up mt-12 text-center">
        <a href="/services" class="ipr-tab ipr-tab-ink">See All Services →</a>
      </div>
    </div>
  </section>

  <!-- 04 · INDUSTRIES — hoja de ruta / manifiesto de items -->
  <section class="ipr-industries border-y-4 border-[var(--ipr-ink)] py-20 lg:py-24" style="--sec-bg: var(--ipr-paper); background-image: linear-gradient(rgba(16,38,59,0.5), rgba(16,38,59,0.5)), url('<?php echo esc_url($industries_bg); ?>'); background-size: cover; background-position: center;">
    <div class="mx-auto max-w-5xl px-4">
      <div class="ipr-reveal-up mx-auto max-w-3xl text-center">
        <p class="ipr-stencil-eyebrow">Route Manifest</p>
        <h2 class="mt-4 font-[var(--ipr-display)] text-3xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-white)] md:text-5xl">
          Industries We Serve
        </h2>
        <p class="mt-5 text-base leading-8 text-[var(--ipr-white)]/85" style="text-shadow: 0 1px 3px rgba(16,38,59,0.9), 0 2px 12px rgba(16,38,59,0.55);">
          Eastern Oregon runs on agriculture, construction, and community. We built our routes and our fleet around the industries that keep this region working.
        </p>
      </div>

      <div class="mt-14 space-y-6">
        <?php foreach ($industries as $i => $industry) : ?>
          <?php $imageOnRight = ($i % 2 === 0); ?>
          <article class="ipr-reveal-<?php echo $imageOnRight ? 'left' : 'right'; ?> ipr-manifest-row ipr-manifest-row--priority">
            <div class="grid gap-6 md:grid-cols-2 md:items-center">
              <div class="<?php echo $imageOnRight ? '' : 'md:order-2'; ?>">
                <h3 class="font-[var(--ipr-display)] text-2xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)] md:text-3xl">
                  <?php echo esc_html($industry['title']); ?>
                </h3>
                <p class="mt-3 max-w-md text-[15px] leading-7 text-[var(--ipr-steel)]">
                  <?php echo esc_html($industry['copy']); ?>
                </p>
              </div>
              <div class="h-48 w-full overflow-hidden border-2 border-[var(--ipr-ink)] md:h-56 <?php echo $imageOnRight ? '' : 'md:order-1'; ?>">
                <img src="<?php echo esc_url($industry['image']); ?>" alt="<?php echo esc_attr($industry['title']); ?> service" class="h-full w-full object-cover">
              </div>
            </div>
          </article>
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
        <p class="mt-5 text-base leading-8 text-[var(--ipr-white)]/75">
          Plenty of companies rent portable restrooms. Here is why farms, contractors, and event planners across two states keep calling us instead.
        </p>
      </div>

      <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-5">
        <?php foreach ($why_values as $i => $value) : ?>
          <div class="ipr-reveal-stagger ipr-stamp" style="--tilt: <?php echo esc_attr($i % 2 === 0 ? '-1.5deg' : '1.2deg'); ?>; --pulse-delay: <?php echo esc_attr($i * 350); ?>ms;">
            <h3 class="font-[var(--ipr-display)] text-base font-bold uppercase tracking-[-0.01em] text-[var(--ipr-white)]">
              <?php echo esc_html($value['title']); ?>
            </h3>
            <p class="mt-2.5 text-sm leading-6 text-[var(--ipr-white)]/70">
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
            Independent Portable Restrooms is based in Boardman, Oregon, and delivers across Eastern Oregon and the Washington Tri-Cities. Our regular routes cover Hermiston, Pendleton, Umatilla, Irrigon, Stanfield, Echo, Heppner, and Ione on the Oregon side, and Kennewick, Pasco, and Richland in Washington. Because we run these roads every week, delivery is fast and service days are consistent.
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

          <p class="mt-8 text-sm leading-6 text-[var(--ipr-steel)]">
            Don't see your town on the route? Call us anyway. Our coverage extends beyond the towns listed here, and if your site is reachable from our routes, we can likely serve it.
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
    data-heading="One Call. Clean Units. On Time."
    data-subtext="From a single porta potty to a full harvest-season setup, Independent Portable Restrooms delivers clean, reliable portable sanitation across Eastern Oregon and the Tri-Cities. Family-operated, locally based, and answering the phone 24/7 for over 15 years."
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

  /* ── Service tag cards — tilt 3D estilo "3D Card" (Aceternity), pero
     hecho en vanilla JS/CSS: el JS mueve rotateX/rotateY del card según el
     cursor, y los hijos (foto, título, CTA) "flotan" hacia adelante en
     translateZ vía :hover, aprovechando el transform-style: preserve-3d. ── */
  .ipr-tag {
    position: relative;
    background: var(--sec-bg);
    border: 1px solid rgba(16, 38, 59, 0.16);
    border-bottom-style: dashed;
    padding: 2.25rem 1.75rem 1.75rem;
    transform-style: preserve-3d;
    transform: perspective(900px) rotateX(0deg) rotateY(0deg) translateY(0px);
    transition: transform .4s cubic-bezier(.22, 1, .36, 1), box-shadow .3s ease;
    will-change: transform;
  }

  .ipr-tag:hover {
    box-shadow: 0 20px 40px rgba(16, 38, 59, 0.16);
  }

  .ipr-tag__media {
    width: 100%;
    height: 170px;
    overflow: hidden;
    border: 2px solid var(--ipr-ink);
    transition: transform .4s cubic-bezier(.22, 1, .36, 1);
  }

  .ipr-tag__media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .3s ease;
  }

  .ipr-tag:hover .ipr-tag__media img {
    transform: scale(1.08);
  }

  .ipr-tag h3,
  .ipr-tag__cta {
    transition: transform .4s cubic-bezier(.22, 1, .36, 1);
  }

  .ipr-tag:hover .ipr-tag__media { transform: translateZ(44px); }
  .ipr-tag:hover h3 { transform: translateZ(28px); }
  .ipr-tag:hover .ipr-tag__cta { transform: translateZ(18px); }

  @media (prefers-reduced-motion: reduce) {
    .ipr-tag,
    .ipr-tag__media,
    .ipr-tag h3,
    .ipr-tag__cta {
      transform: none !important;
      transition: none !important;
    }
  }

  /* ── Services carousel ── */
  .ipr-carousel {
    position: relative;
    overflow: hidden;
  }

  /* Marquee infinito (mismo truco que el Dispatch Manifest Strip): el
     track duplica las cards una vez y se desliza -50%, así el loop no
     tiene costura. La curva de cada card la calcula JS en tiempo real
     (ver script), independiente de este movimiento horizontal. */
  .ipr-carousel__track {
    display: flex;
    width: max-content;
    gap: 1.5rem;
    padding: 1.75rem 0.25rem 2.25rem;
    animation: ipr-services-scroll 32s linear infinite;
  }

  .ipr-carousel:hover .ipr-carousel__track {
    animation-play-state: paused;
  }

  @keyframes ipr-services-scroll {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }

  .ipr-carousel__item {
    flex: 0 0 auto;
    width: 78vw;
    max-width: 300px;
  }

  @media (min-width: 640px) {
    .ipr-carousel__item { width: 340px; max-width: none; }
  }

  @media (prefers-reduced-motion: reduce) {
    .ipr-carousel__track { animation: none !important; }
  }

  .ipr-industries h2 {
    text-shadow: 0 2px 12px rgba(16, 38, 59, 0.6);
  }

  /* ── Manifest / route rows (Industries) — todas usan el mismo tratamiento
     de tarjeta oscura que antes era exclusivo de la fila "priority",
     alternando imagen/texto en secuencia. ── */
  .ipr-manifest-row--priority {
    display: block;
    padding: 2rem 1.75rem;
    background: var(--ipr-ink);
    color: var(--ipr-white);
    border: 2px solid var(--ipr-ink);
  }

  .ipr-manifest-row--priority h3 { color: var(--ipr-white); }
  .ipr-manifest-row--priority p { color: rgba(254, 254, 254, 0.78); }

  .ipr-manifest-city {
    font-size: 0.92rem;
    color: var(--ipr-ink);
    border-bottom: 1px dotted rgba(16, 38, 59, 0.25);
    padding-bottom: 0.3rem;
  }

  /* ── Approval stamps ── */
  .ipr-stamp {
    text-align: center;
    padding: 1.75rem 1.5rem;
    border: 2px dashed var(--ipr-wheat);
    border-radius: 14px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    cursor: default;
    transition: transform .4s cubic-bezier(.34, 1.56, .64, 1), box-shadow .3s ease, border-style .2s ease, border-color .2s ease;
  }

  .ipr-stamp:hover {
    transform: rotate(0deg) scale(1.08);
    border-style: solid;
    border-color: var(--ipr-yellow);
    box-shadow: 0 16px 34px rgba(0, 0, 0, 0.28);
    animation-play-state: paused;
  }

  /* Pulso continuo en amarillo para que los stamps destaquen incluso sin
     interacción — no solo al pasar el mouse. */
  @keyframes ipr-stamp-pulse {
    0%, 100% {
      box-shadow: 0 0 0 rgba(243, 178, 0, 0);
    }
    50% {
      box-shadow: 0 0 0 3px rgba(243, 178, 0, 0.18), 0 0 26px rgba(243, 178, 0, 0.45);
    }
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

  /* Los stamps combinan la animación de reveal con su rotación --tilt y un
     pequeño overshoot de escala (compound selector para ganarle en
     especificidad a la regla genérica de arriba, que si no, pisa el rotate). */
  .ipr-stamp.ipr-reveal-stagger {
    transform: translateY(26px) scale(.6) rotate(0deg);
    transition: opacity .5s ease, transform .55s cubic-bezier(.34, 1.56, .64, 1);
  }

  .ipr-stamp.ipr-reveal-stagger.is-visible {
    transform: translateY(0) scale(1) rotate(var(--tilt, 0deg));
    animation: ipr-stamp-pulse 3.4s ease-in-out infinite;
    animation-delay: var(--pulse-delay, 0ms);
  }

  .ipr-stamp.ipr-reveal-stagger.is-visible:hover {
    transform: rotate(0deg) scale(1.08);
  }

  @media (prefers-reduced-motion: reduce) {
    .ipr-reveal-up, .ipr-reveal-left, .ipr-reveal-right, .ipr-reveal-stagger,
    .ipr-tab, .ipr-tag {
      opacity: 1 !important;
      transform: none !important;
      transition: none !important;
    }

    .ipr-marquee__track,
    .ipr-stamp {
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

    var prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    // Services carousel — el movimiento infinito lo hace el CSS
    // (@keyframes ipr-services-scroll, pausa en :hover). Acá solo
    // calculamos en cada frame la curva de arco de las cards, según su
    // posición real en pantalla, para que se acomode aunque el track
    // se esté moviendo todo el tiempo.
    document.querySelectorAll(".ipr-carousel").forEach(function (carousel) {
      var track = carousel.querySelector(".ipr-carousel__track");
      if (!track || prefersReducedMotion) return;

      var maxDip = 22;
      var maxRotate = 4;

      function updateCurve() {
        var carouselRect = carousel.getBoundingClientRect();
        var centerX = carouselRect.left + carouselRect.width / 2;
        var items = track.querySelectorAll(".ipr-carousel__item");
        var rects = [];

        items.forEach(function (item) { rects.push(item.getBoundingClientRect()); });

        items.forEach(function (item, i) {
          var itemRect = rects[i];
          var itemCenter = itemRect.left + itemRect.width / 2;
          var dist = (itemCenter - centerX) / (carouselRect.width / 2 || 1);
          var clamped = Math.max(-1, Math.min(1, dist));
          var dip = Math.pow(Math.abs(clamped), 1.6) * maxDip;
          var rot = clamped * maxRotate;
          item.style.transform = "translateY(" + dip.toFixed(1) + "px) rotate(" + rot.toFixed(2) + "deg)";
        });

        requestAnimationFrame(updateCurve);
      }

      requestAnimationFrame(updateCurve);
    });

    // Tilt 3D en las cards de servicio (mousemove mueve rotateX/rotateY;
    // los hijos "flotan" en Z vía CSS :hover — ver estilos de .ipr-tag).
    if (!prefersReducedMotion && window.matchMedia("(hover: hover)").matches) {
      document.querySelectorAll(".ipr-tag").forEach(function (card) {
        var maxTilt = 9;

        card.addEventListener("mousemove", function (e) {
          var rect = card.getBoundingClientRect();
          var x = (e.clientX - rect.left) / rect.width;
          var y = (e.clientY - rect.top) / rect.height;
          var ry = (x - 0.5) * maxTilt * 2;
          var rx = (0.5 - y) * maxTilt * 2;
          card.style.transform =
            "perspective(900px) rotateX(" + rx.toFixed(2) + "deg) rotateY(" + ry.toFixed(2) + "deg) translateY(-4px)";
        });

        card.addEventListener("mouseleave", function () {
          card.style.transform = "perspective(900px) rotateX(0deg) rotateY(0deg) translateY(0px)";
        });
      });
    }
  });
</script>

<?php get_footer(); ?>