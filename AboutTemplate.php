<?php
/**
 * Template Name: About Template
 *
 * Página About — Independent Portable Restrooms
 * Brief: Intro/story, Mission·Vision·Values, Experience & Credentials, CTA.
 *
 * SEO (para el plugin de SEO, no se imprime en el template):
 * Title: About Us — 15+ Years of Portable Restroom Service │ Independent Portable Restrooms
 * Slug: /about
 *
 * Self-contained: todos los estilos viven en su propio <style> al final.
 */

get_header(); ?>

<main class="ipr-about bg-[var(--ipr-white)] text-[var(--ipr-ink)] overflow-hidden">

  <?php
    $about_image = '/wp-content/uploads/2026/07/IPR4.jpg-scaled.jpeg';

    $mvv = [
      ['tag' => 'M', 'title' => 'Mission', 'copy' => 'To deliver quality service through clear communication and dependable customer care.'],
      ['tag' => 'V', 'title' => 'Vision', 'copy' => "To be the region's leading provider of portable restrooms — a brand you see everywhere you go."],
      ['tag' => 'V', 'title' => 'Values', 'copy' => 'Honesty · Communication · Responsibility'],
    ];

    $credentials = [
      ['label' => 'Permit to Dump', 'status' => 'Pend. #C'],
      ['label' => 'E2 Certification', 'status' => 'Pend. #C'],
      ['label' => 'B1 Certification', 'status' => 'Pend. #C'],
    ];
  ?>

  <!-- 01 · INTRO / STORY -->
  <section class="relative flex min-h-[520px] w-full items-center overflow-hidden bg-[var(--ipr-ink)]">
    <div class="absolute inset-0">
      <img
        src="<?php echo esc_url($about_image); ?>"
        alt="Independent Portable Restrooms unit in the field"
        class="h-full w-full object-cover opacity-40"
      >
    </div>
    <div class="absolute inset-0 bg-[var(--ipr-ink)]/72"></div>
    <div class="ipr-stamped-about absolute inset-0"></div>

    <div class="ipr-ticket-stub" aria-hidden="true">
      <span>ON FILE SINCE</span>
      <strong><?php echo esc_html(date('Y') - 15); ?></strong>
    </div>

    <div class="relative z-10 mx-auto w-full max-w-3xl px-4 py-20 text-center">
      <p class="ipr-reveal-up ipr-stencil-eyebrow">Company Manifest</p>

      <h1 class="ipr-reveal-up mt-5 font-[var(--ipr-display)] text-4xl font-bold uppercase leading-[1.05] tracking-[-0.01em] text-[var(--ipr-white)] md:text-5xl">
        About Us
      </h1>

      <p class="ipr-reveal-up mx-auto mt-6 max-w-2xl text-base leading-7 text-[var(--ipr-white)]/85">
        For over 15 years we've kept the Columbia Basin clean and covered — from farm fields to job sites to the biggest days of people's lives. What started in commercial service has grown to serve families and events across the region.
      </p>
    </div>
  </section>

  <div class="ipr-accent-bar" aria-hidden="true"></div>

  <!-- 02 · MISSION · VISION · VALUES -->
  <section class="bg-[var(--ipr-white)] py-16 lg:py-20">
    <div class="mx-auto max-w-6xl px-4">
      <div class="ipr-reveal-up mx-auto max-w-2xl text-center">
        <p class="ipr-stencil-eyebrow ipr-stencil-eyebrow--dark">What Drives Us</p>
        <h2 class="mt-4 font-[var(--ipr-display)] text-3xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)] md:text-4xl">
          Mission · Vision · Values
        </h2>
      </div>

      <div class="mt-14 grid gap-6 md:grid-cols-3">
        <?php
          $accents = ['var(--ipr-yellow)', 'var(--ipr-wheat)', 'var(--ipr-rust)'];
          foreach ($mvv as $i => $card) :
        ?>
          <div class="ipr-reveal-pop ipr-tag" style="--sec-bg: var(--ipr-white); --accent: <?php echo esc_attr($accents[$i % 3]); ?>; --pop-delay: <?php echo esc_attr($i * 120); ?>ms;">
            <span class="ipr-tag__eyelet" style="--sec-bg: var(--ipr-white);"></span>
            <span class="ipr-tag__badge" style="background: var(--accent);"><?php echo esc_html($card['tag']); ?></span>
            <h3 class="mt-4 font-[var(--ipr-display)] text-xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)]">
              <?php echo esc_html($card['title']); ?>
            </h3>
            <p class="mt-3 text-[15px] leading-7 text-[var(--ipr-steel)]">
              <?php echo esc_html($card['copy']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 03 · EXPERIENCE & CREDENTIALS -->
  <section class="ipr-stamped-about-light relative bg-[var(--ipr-paper)] py-16 lg:py-20">
    <div class="relative z-10 mx-auto max-w-5xl px-4">
      <div class="grid gap-12 lg:grid-cols-[0.9fr_1.1fr] lg:items-center">
        <div class="ipr-reveal-left text-center lg:text-left">
          <p class="ipr-stencil-eyebrow ipr-stencil-eyebrow--dark">Experience On File</p>
          <div class="ipr-counter" data-target="15">
            <span class="ipr-counter__num ipr-counter__num--dark">0</span><span class="ipr-counter__plus ipr-counter__plus--dark">+</span>
          </div>
          <p class="font-[var(--ipr-display)] text-lg font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)]">
            Years of Service
          </p>
          <p class="mt-4 max-w-sm text-[15px] leading-7 text-[var(--ipr-steel)] lg:mx-0 mx-auto">
            Serving farms, ranches, contractors, schools, and events across Eastern Oregon and the Tri-Cities.
          </p>
        </div>

        <div>
          <p class="ipr-reveal-up mb-5 text-center font-mono text-[11px] font-bold uppercase tracking-[0.14em] text-[var(--ipr-rust)] lg:text-left">
            Credentials on File
          </p>
          <div class="grid gap-4 sm:grid-cols-3">
            <?php foreach ($credentials as $i => $cred) : ?>
              <div class="ipr-reveal-pop ipr-cred-stamp ipr-cred-stamp--light" style="--pop-delay: <?php echo esc_attr($i * 120); ?>ms;">
                <h4 class="font-[var(--ipr-display)] text-sm font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)]">
                  <?php echo esc_html($cred['label']); ?>
                </h4>
                <span class="ipr-cred-stamp__status"><?php echo esc_html($cred['status']); ?></span>
              </div>
            <?php endforeach; ?>
          </div>
          <p class="mt-5 text-center font-mono text-[10px] uppercase tracking-[0.06em] text-[var(--ipr-steel)] lg:text-left">
            Licencias/seguros/permisos se muestran como sellos de confianza en cuanto el cliente los confirme.
          </p>
        </div>
      </div>
    </div>
  </section>

  <div class="ipr-accent-bar" aria-hidden="true"></div>

  <!-- 04 · CTA BAND (componente React reutilizado del Home) -->
  <div
    class="ipr-cta-mount"
    data-heading="Ready to work with a local team?"
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
  .ipr-about {
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

  .ipr-stamped-about {
    overflow: hidden;
  }

  .ipr-stamped-about::before {
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
    opacity: 0.08;
    mix-blend-mode: overlay;
    pointer-events: none;
  }

  /* Variante clara del patrón estampado, para secciones sobre --ipr-paper */
  .ipr-stamped-about-light {
    overflow: hidden;
  }

  .ipr-stamped-about-light::before {
    content: "";
    position: absolute;
    inset: 0;
    background-image: repeating-linear-gradient(
      135deg,
      var(--ipr-ink) 0,
      var(--ipr-ink) 2px,
      transparent 2px,
      transparent 30px
    );
    background-attachment: fixed;
    opacity: 0.05;
    mix-blend-mode: multiply;
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

  /* ── Mission/Vision/Values tags (mismo lenguaje de "tag" del Home) ── */
  .ipr-tag {
    position: relative;
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
    background: var(--sec-bg, var(--ipr-white));
    transform: translateY(-50%);
  }

  .ipr-tag__badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    background: var(--ipr-yellow);
    color: var(--ipr-ink);
    font-family: "IBM Plex Mono", monospace;
    font-weight: 700;
    font-size: 0.85rem;
  }

  /* ── Contador animado (15+ años) ── */
  .ipr-counter {
    display: flex;
    align-items: baseline;
    justify-content: center;
    gap: 0.15rem;
    margin: 0.5rem 0 0.15rem;
  }

  .ipr-counter__num {
    font-family: var(--ipr-display);
    font-size: 4.5rem;
    font-weight: 700;
    color: var(--ipr-yellow);
    line-height: 1;
  }

  .ipr-counter__plus {
    font-family: var(--ipr-display);
    font-size: 2rem;
    font-weight: 700;
    color: var(--ipr-yellow);
  }

  @media (min-width: 1024px) {
    .ipr-counter { justify-content: flex-start; }
  }

  .ipr-counter__num--dark {
    color: var(--ipr-rust);
  }

  .ipr-counter__plus--dark {
    color: var(--ipr-rust);
  }

  /* ── Sellos de credenciales ── */
  .ipr-cred-stamp {
    border: 2px dashed var(--ipr-wheat);
    padding: 1.25rem 1rem;
    text-align: center;
  }

  .ipr-cred-stamp--light {
    border-color: var(--ipr-ink);
  }

  .ipr-cred-stamp__status {
    display: inline-block;
    margin-top: 0.5rem;
    font-family: "IBM Plex Mono", monospace;
    font-size: 0.65rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: var(--ipr-wheat);
  }

  /* ── Tabs (reutilizados) ── */
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

  /* ── Reveal tipo "sello cayendo" — para tarjetas MVV y credenciales ── */
  .ipr-reveal-pop {
    opacity: 0;
    transform: scale(1.35) rotate(-6deg);
    transition: opacity .45s ease, transform .45s cubic-bezier(.34, 1.56, .64, 1);
    transition-delay: var(--pop-delay, 0ms);
  }

  .ipr-reveal-pop.is-visible {
    opacity: 1;
    transform: scale(1) rotate(0deg);
  }

  .ipr-tag.ipr-reveal-pop:hover {
    transform: translateY(-4px) rotate(-1.5deg);
    box-shadow: 0 14px 30px rgba(16, 38, 59, 0.12);
  }

  .ipr-tag.ipr-reveal-pop {
    border-top: 4px solid var(--accent, var(--ipr-yellow));
  }

  @media (prefers-reduced-motion: reduce) {
    .ipr-reveal-up, .ipr-reveal-left, .ipr-reveal-right, .ipr-reveal-stagger, .ipr-reveal-pop, .ipr-tab, .ipr-tag {
      opacity: 1 !important;
      transform: none !important;
      transition: none !important;
    }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Reveal-on-scroll
    var items = document.querySelectorAll(
      ".ipr-reveal-up, .ipr-reveal-left, .ipr-reveal-right, .ipr-reveal-stagger, .ipr-reveal-pop"
    );

    var revealObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry, idx) {
        if (entry.isIntersecting) {
          var delay = entry.target.classList.contains("ipr-reveal-stagger") ? (idx % 6) * 60 : 0;
          setTimeout(function () {
            entry.target.classList.add("is-visible");
          }, delay);
        }
      });
    }, { threshold: 0.12 });

    items.forEach(function (item) { revealObserver.observe(item); });

    // Contador animado (15+ años) — corre una sola vez cuando entra en vista
    var counters = document.querySelectorAll(".ipr-counter");

    var counterObserver = new IntersectionObserver(function (entries, observer) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;

        var el = entry.target;
        var target = parseInt(el.getAttribute("data-target"), 10) || 0;
        var numEl = el.querySelector(".ipr-counter__num");
        var duration = 1400;
        var startTime = null;

        function step(timestamp) {
          if (!startTime) startTime = timestamp;
          var progress = Math.min((timestamp - startTime) / duration, 1);
          numEl.textContent = Math.floor(progress * target);
          if (progress < 1) {
            window.requestAnimationFrame(step);
          } else {
            numEl.textContent = target;
          }
        }

        window.requestAnimationFrame(step);
        observer.unobserve(el);
      });
    }, { threshold: 0.4 });

    counters.forEach(function (counter) { counterObserver.observe(counter); });
  });
</script>

<?php get_footer(); ?>