<?php
/**
 * Template Name: Services Template
 *
 * Página Services — Independent Portable Restrooms
 * Objetivo (brief): detallar cada servicio con copy claro y CTA de cotización.
 * Confirmar specs técnicas (medidas, capacidad, frecuencia de servicio, ADA). [Pend. #C]
 *
 * SEO (para el plugin de SEO, no se imprime en el template):
 * Title: Portable Restroom, ADA & Handwash Station Rentals │ Independent Portable Restrooms
 * Slug: /services
 *
 * Nota: self-contained (todos los estilos viven en su propio <style> al
 * final) para no depender de que index.css esté reconstruido/desplegado.
 */

get_header(); ?>

<main class="ipr-services bg-[var(--ipr-white)] text-[var(--ipr-ink)] overflow-hidden" style="--sec-bg: var(--ipr-white);">

  <?php
    $service_blocks = [
      [
        'anchor' => 'standard-portable-restrooms',
        'tag'    => '01',
        'title'  => 'Standard Portable Restrooms',
        'image'  => '/wp-content/uploads/2026/07/IPR3.jpg-scaled.jpeg',
        'body'   => "Clean, well-stocked units for daily use on farms, job sites, and events. Available in red, blue, pink, and gray. Regular servicing keeps every unit fresh.",
        'note'   => 'Medidas, capacidad y frecuencia de servicio exactas: Pend. #C.',
      ],
      [
        'anchor' => 'ada-accessible-units',
        'tag'    => '02',
        'title'  => 'ADA-Accessible Units',
        'image'  => '/wp-content/uploads/2026/07/IPR4.jpg-scaled.jpeg',
        'body'   => 'Spacious, ground-level units built for wheelchair access — a must for inclusive events and compliant job sites.',
        'note'   => 'Confirmar cumplimiento y medidas ADA exactas: Pend. #C.',
      ],
      [
        'anchor' => 'handwash-stations',
        'tag'    => '03',
        'title'  => 'Handwash Stations',
        'image'  => '/wp-content/uploads/2026/07/IPR5.jpg-scaled.jpeg',
        'body'   => 'Internal, external, and separate standalone handwash stations — keep crews and guests clean and meet field-sanitation expectations.',
        'note'   => 'Diferencia interna/externa/separada + foto de cada una: Pend. #C / #D.',
      ],
      [
        'anchor' => 'restroom-trailers-doubles',
        'tag'    => '04',
        'title'  => 'Restroom Trailers & Doubles',
        'image'  => '/wp-content/uploads/2026/07/IPR1.jpg-scaled.jpeg',
        'body'   => "Trailer-mounted options and two-stall doubles with separate men's and women's sides — a step up in comfort for weddings and larger events.",
        'note'   => 'Aclarar variantes (con/sin remolque; dobles boy/girl): Pend. #C.',
      ],
      [
        'anchor'    => 'emergency-service',
        'tag'       => '05',
        'title'     => 'Emergency Service',
        'image'     => '/wp-content/uploads/2026/07/IPR2.jpg-scaled.jpeg',
        'body'      => 'Need a unit now? Our 24/7 line gets you covered fast, any day of the year.',
        'note'      => '',
        'emergency' => true,
      ],
      [
        'anchor' => 'flexible-rental-terms',
        'tag'    => '06',
        'title'  => 'Flexible Rental Terms',
        'image'  => '/wp-content/uploads/2026/07/IPR3.jpg-scaled.jpeg',
        'body'   => 'Daily, weekly, and monthly rentals — with delivery, servicing, and pickup handled for you.',
        'note'   => 'Modelo de precios/mínimos si aplica: Pend. #C.',
      ],
    ];

    $faqs = [
      ['q' => 'How many units do I need?', 'a' => '[Respuesta según guía del cliente — Pend. #C. La regla general depende de asistentes/crew y duración; se completa cuando confirmen su tabla de referencia.]'],
      ['q' => 'How often are units serviced?', 'a' => '[Frecuencia exacta por tipo de renta — Pend. #C.]'],
      ['q' => 'What areas do you deliver to?', 'a' => 'Eastern Oregon and the Washington Tri-Cities — see our full Service Area for the complete list of towns we cover.'],
      ['q' => 'Do you handle emergencies?', 'a' => 'Yes, 24/7. Call 541-701-7369 any time, day or night.'],
    ];
  ?>

  <!-- 01 · HERO INTERNO -->
  <section class="relative flex min-h-[440px] w-full items-center overflow-hidden bg-[var(--ipr-ink)]">
    <div class="ipr-stamped-services absolute inset-0"></div>

    <div class="ipr-ticket-stub" aria-hidden="true">
      <span>MANIFEST NO.</span>
      <strong><?php echo esc_html(date('ymd')); ?>-SVC</strong>
    </div>

    <div class="relative z-10 mx-auto w-full max-w-4xl px-4 py-20 text-center">
      <p class="ipr-reveal-up ipr-stencil-eyebrow">Service Manifest · 6 Units On File</p>

      <h1 class="ipr-reveal-up mt-5 font-[var(--ipr-display)] text-4xl font-bold uppercase leading-[1.05] tracking-[-0.01em] text-[var(--ipr-white)] md:text-5xl">
        Portable Restroom & Handwash Rentals
      </h1>

      <p class="ipr-reveal-up mx-auto mt-6 max-w-2xl text-base leading-7 text-[var(--ipr-white)]/82">
        Standard units, ADA-accessible restrooms, handwash stations, and restroom trailers — delivered, serviced, and picked up, on the schedule you need.
      </p>

      <div class="ipr-reveal-up mt-8">
        <a href="/contact" class="ipr-tab ipr-tab-yellow">Request a Quote</a>
      </div>
    </div>
  </section>

  <div class="ipr-accent-bar" aria-hidden="true"></div>

  <!-- 02–07 · BLOQUES DE SERVICIO (alternados, con ancla) -->
  <section class="bg-[var(--ipr-white)] py-16 lg:py-20">
    <div class="mx-auto max-w-5xl px-4">
      <?php foreach ($service_blocks as $i => $block) : ?>
        <?php $isReversed = ($i % 2 === 1); ?>
        <article
          id="<?php echo esc_attr($block['anchor']); ?>"
          class="ipr-service-block <?php echo $isReversed ? 'ipr-service-block--reversed' : ''; ?> <?php echo !empty($block['emergency']) ? 'ipr-service-block--emergency' : ''; ?> ipr-reveal-up"
        >
          <div class="ipr-service-block__media">
            <span class="ipr-service-block__tag">Tag No. <?php echo esc_html($block['tag']); ?></span>
            <img src="<?php echo esc_url($block['image']); ?>" alt="<?php echo esc_attr($block['title']); ?>" loading="lazy">
          </div>

          <div class="ipr-service-block__copy">
            <h2 class="font-[var(--ipr-display)] text-2xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)] md:text-3xl">
              <?php echo esc_html($block['title']); ?>
            </h2>
            <p class="mt-4 max-w-md text-[15px] leading-7 text-[var(--ipr-steel)]">
              <?php echo esc_html($block['body']); ?>
            </p>

            <?php if (!empty($block['emergency'])) : ?>
              <a href="tel:+15417017369" class="ipr-tab ipr-tab-yellow mt-6">Call 24/7 · 541-701-7369</a>
            <?php else : ?>
              <a href="/contact" class="ipr-tab ipr-tab-ink mt-6">Request a Quote</a>
            <?php endif; ?>

            <?php if (!empty($block['note'])) : ?>
              <p class="mt-4 font-mono text-[11px] uppercase tracking-[0.06em] text-[var(--ipr-wheat)]">
                <?php echo esc_html($block['note']); ?>
              </p>
            <?php endif; ?>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- 08 · FAQ -->
  <section class="border-t-4 border-[var(--ipr-ink)] bg-[var(--ipr-paper)] py-20 lg:py-24">
    <div class="mx-auto max-w-3xl px-4">
      <div class="ipr-reveal-up text-center">
        <p class="ipr-stencil-eyebrow ipr-stencil-eyebrow--dark">Manifest Q&amp;A</p>
        <h2 class="mt-4 font-[var(--ipr-display)] text-3xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)] md:text-4xl">
          Frequently Asked Questions
        </h2>
      </div>

      <div class="ipr-faq mt-12">
        <?php foreach ($faqs as $i => $faq) : ?>
          <div class="ipr-faq__item ipr-reveal-stagger">
            <button type="button" class="ipr-faq__question" aria-expanded="false">
              <span class="font-mono text-xs font-bold text-[var(--ipr-wheat)]"><?php printf('Q%d', $i + 1); ?></span>
              <span><?php echo esc_html($faq['q']); ?></span>
              <span class="ipr-faq__icon" aria-hidden="true">+</span>
            </button>
            <div class="ipr-faq__answer">
              <p><?php echo esc_html($faq['a']); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 09 · CTA BAND (componente React reutilizado del Home) -->
  <div
    class="ipr-cta-mount"
    data-heading="Ready to book your units?"
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
  .ipr-services {
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

  /* ── Ticket stub (reusa el mismo lenguaje del Home) ── */
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

  /* ── Barra de acento — separador limpio entre hero oscuro y contenido claro ── */
  .ipr-accent-bar {
    height: 5px;
    width: 100%;
    background: linear-gradient(90deg, var(--ipr-yellow) 0%, var(--ipr-wheat) 100%);
  }

  /* ── Stamped diagonal pattern with parallax scroll (mismo truco del Home) ── */
  .ipr-stamped-services {
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

  /* ── Bloques de servicio alternados ── */
  .ipr-service-block {
    display: grid;
    gap: 2rem;
    align-items: center;
    padding: 2.5rem 0;
    border-bottom: 2px dashed rgba(16, 38, 59, 0.16);
  }

  .ipr-service-block:last-child {
    border-bottom: none;
  }

  @media (min-width: 768px) {
    .ipr-service-block {
      grid-template-columns: 1fr 1fr;
    }

    .ipr-service-block--reversed .ipr-service-block__media {
      order: 2;
    }

    .ipr-service-block--reversed .ipr-service-block__copy {
      order: 1;
    }
  }

  .ipr-service-block__media {
    position: relative;
  }

  .ipr-service-block__media img {
    width: 100%;
    height: 260px;
    object-fit: cover;
    border: 2px solid var(--ipr-ink);
  }

  .ipr-service-block__tag {
    position: absolute;
    top: -12px;
    left: 1rem;
    z-index: 2;
    background: var(--ipr-yellow);
    color: var(--ipr-ink);
    font-family: "IBM Plex Mono", monospace;
    font-size: 0.68rem;
    font-weight: 700;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    padding: 0.3rem 0.75rem;
  }

  .ipr-service-block--emergency .ipr-service-block__media img {
    border-color: var(--ipr-rust);
  }

  .ipr-service-block--emergency .ipr-service-block__tag {
    background: var(--ipr-rust);
    color: var(--ipr-white);
  }

  /* ── FAQ accordion (vanilla, no React — aparece una sola vez en el sitio) ── */
  .ipr-faq__item {
    border-bottom: 2px dashed rgba(16, 38, 59, 0.22);
  }

  .ipr-faq__question {
    width: 100%;
    display: flex;
    align-items: center;
    gap: 0.9rem;
    padding: 1.25rem 0;
    background: none;
    border: none;
    text-align: left;
    cursor: pointer;
    font-family: var(--ipr-display);
    font-size: 1rem;
    font-weight: 600;
    text-transform: uppercase;
    color: var(--ipr-ink);
  }

  .ipr-faq__icon {
    margin-left: auto;
    font-family: "IBM Plex Mono", monospace;
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--ipr-wheat);
    transition: transform .25s ease;
  }

  .ipr-faq__question[aria-expanded="true"] .ipr-faq__icon {
    transform: rotate(45deg);
  }

  .ipr-faq__answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height .3s ease;
  }

  .ipr-faq__answer p {
    padding: 0 0 1.25rem 2.1rem;
    font-size: 0.92rem;
    line-height: 1.7;
    color: var(--ipr-steel);
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

  @media (prefers-reduced-motion: reduce) {
    .ipr-reveal-up, .ipr-reveal-left, .ipr-reveal-right, .ipr-reveal-stagger,
    .ipr-tab {
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

    // FAQ accordion
    var questions = document.querySelectorAll(".ipr-faq__question");

    questions.forEach(function (button) {
      button.addEventListener("click", function () {
        var answer = button.nextElementSibling;
        var isOpen = button.getAttribute("aria-expanded") === "true";

        questions.forEach(function (otherButton) {
          if (otherButton !== button) {
            otherButton.setAttribute("aria-expanded", "false");
            otherButton.nextElementSibling.style.maxHeight = null;
          }
        });

        button.setAttribute("aria-expanded", String(!isOpen));
        answer.style.maxHeight = isOpen ? null : answer.scrollHeight + "px";
      });
    });
  });
</script>

<?php get_footer(); ?>