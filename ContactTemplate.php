<?php
/**
 * Template Name: Contact Template
 *
 * Página Contact / Request a Quote — Independent Portable Restrooms
 * Brief: Intro, Quote Form (9 campos), Contact details + mapa.
 *
 * Dev (del brief):
 * - Destino del formulario (email de recepción de leads) por definir. [Pend. #I]
 * - Protección anti-spam (honeypot/reCAPTCHA) + mensaje de confirmación.
 * - Microcopy "Se habla español" junto al formulario.
 * - Botón de envío: "Request a Quote".
 *
 * SEO (para el plugin de SEO, no se imprime en el template):
 * Title: Request a Quote — Portable Restroom Rentals │ Independent Portable Restrooms
 * Slug: /contact
 *
 * Nota: el formulario es vanilla JS embebido en este mismo archivo (no React)
 * porque aparece una sola vez en el sitio — mismo criterio que el resto.
 * Self-contained: todos los estilos viven en su propio <style> al final.
 */

get_header(); ?>

<main class="ipr-contact bg-[var(--ipr-white)] text-[var(--ipr-ink)] overflow-hidden">

  <!-- 01 · INTRO -->
  <section class="relative flex min-h-[340px] w-full items-center overflow-hidden bg-[var(--ipr-ink)]">
    <div class="ipr-stamped-contact absolute inset-0"></div>

    <div class="relative z-10 mx-auto w-full max-w-3xl px-4 py-16 text-center">
      <p class="ipr-reveal-up ipr-stencil-eyebrow">Quote Request Manifest</p>

      <h1 class="ipr-reveal-up mt-5 font-[var(--ipr-display)] text-4xl font-bold uppercase leading-[1.05] tracking-[-0.01em] text-[var(--ipr-white)] md:text-5xl">
        Request a Quote
      </h1>

      <p class="ipr-reveal-up mx-auto mt-5 max-w-xl text-base leading-7 text-[var(--ipr-white)]/82">
        Tell us what you need and where, and we'll get you a fast quote. For emergencies, call us any time.
      </p>
    </div>
  </section>

  <div class="ipr-accent-bar" aria-hidden="true"></div>

  <!-- 02 · QUOTE FORM + 03 · CONTACT DETAILS -->
  <section class="bg-[var(--ipr-white)] py-16 lg:py-20">
    <div class="mx-auto max-w-6xl px-4">
      <div class="grid gap-12 lg:grid-cols-[1.3fr_0.9fr] lg:items-start">

        <!-- QUOTE FORM -->
        <div class="ipr-reveal-left ipr-form-card">
          <div class="ipr-form-card__header">
            <p class="ipr-stencil-eyebrow ipr-stencil-eyebrow--dark">Service Ticket</p>
            <h2 class="mt-3 font-[var(--ipr-display)] text-2xl font-bold uppercase tracking-[-0.01em] text-[var(--ipr-ink)]">
              Tell Us About Your Project
            </h2>
            <p class="mt-2 text-sm text-[var(--ipr-steel)]">Se habla español — pregunte por atención en español.</p>
          </div>

          <form
            id="ipr-quote-form"
            class="ipr-quote-form"
            method="post"
            action="#"
            novalidate
          >
            <div class="ipr-quote-form__grid">

              <div class="ipr-quote-form__field">
                <label for="ipr-name">Full Name *</label>
                <input id="ipr-name" type="text" name="full_name" placeholder="Your full name" required>
              </div>

              <div class="ipr-quote-form__field">
                <label for="ipr-phone">Phone *</label>
                <input id="ipr-phone" type="tel" name="phone" placeholder="(541) 000-0000" required>
              </div>

              <div class="ipr-quote-form__field">
                <label for="ipr-email">Email</label>
                <input id="ipr-email" type="email" name="email" placeholder="you@example.com">
              </div>

              <div class="ipr-quote-form__field">
                <label for="ipr-service">Service Needed *</label>
                <select id="ipr-service" name="service" required>
                  <option value="">Select a service</option>
                  <option value="Standard">Standard</option>
                  <option value="ADA">ADA</option>
                  <option value="Handwash">Handwash</option>
                  <option value="Trailer">Trailer</option>
                  <option value="Emergency">Emergency</option>
                  <option value="Not sure">Not sure</option>
                </select>
              </div>

              <div class="ipr-quote-form__field">
                <label for="ipr-quantity">Quantity</label>
                <input id="ipr-quantity" type="number" name="quantity" min="1" placeholder="1">
              </div>

              <div class="ipr-quote-form__field">
                <label for="ipr-period">Rental Period</label>
                <select id="ipr-period" name="rental_period">
                  <option value="">Select a period</option>
                  <option value="Daily">Daily</option>
                  <option value="Weekly">Weekly</option>
                  <option value="Monthly">Monthly</option>
                </select>
              </div>

              <div class="ipr-quote-form__field">
                <label for="ipr-start-date">Start Date</label>
                <input id="ipr-start-date" type="date" name="start_date">
              </div>

              <div class="ipr-quote-form__field">
                <label for="ipr-location">Delivery City / Location *</label>
                <input id="ipr-location" type="text" name="location" placeholder="City or delivery address" required>
              </div>

              <div class="ipr-quote-form__field ipr-quote-form__field--full">
                <label for="ipr-message">Message</label>
                <textarea id="ipr-message" name="message" rows="4" placeholder="Anything else we should know?"></textarea>
              </div>

              <!-- Honeypot anti-spam — invisible para personas, visible para bots -->
              <div class="ipr-quote-form__honeypot" aria-hidden="true">
                <label for="ipr-company">Company</label>
                <input id="ipr-company" type="text" name="company" tabindex="-1" autocomplete="off">
              </div>
            </div>

            <div class="ipr-quote-form__captcha">
              <div
                id="ipr-recaptcha"
                class="js-ipr-recaptcha"
                data-sitekey="YOUR_RECAPTCHA_SITE_KEY_HERE">
              </div>
            </div>

            <div class="ipr-quote-form__feedback">
              <div id="ipr-form-success" class="ipr-form-message ipr-form-message--success" aria-live="polite"></div>
              <div id="ipr-form-error" class="ipr-form-message ipr-form-message--error" aria-live="polite"></div>
            </div>

            <button id="ipr-form-submit" type="submit" class="ipr-tab ipr-tab-yellow ipr-quote-form__submit">
              Request a Quote
            </button>
          </form>
        </div>

        <!-- CONTACT DETAILS -->
        <div class="ipr-reveal-right">
          <div class="ipr-contact-card">
            <p class="ipr-stencil-eyebrow ipr-stencil-eyebrow--dark">Dispatch Line</p>

            <a href="tel:+15414813111" class="ipr-contact-card__phone">
              <span class="ipr-contact-card__phone-label">Office</span>
              541-481-3111
              <span class="ipr-contact-card__hours">Mon–Fri · hours TBD — Pend. #C</span>
            </a>

            <a href="tel:+15417017369" class="ipr-contact-card__phone ipr-contact-card__phone--emergency">
              <span class="ipr-contact-card__phone-label">24/7 Emergencies</span>
              541-701-7369
              <span class="ipr-contact-card__hours">Always on call</span>
            </a>

            <div class="ipr-contact-card__address">
              <span class="ipr-contact-card__phone-label">Address</span>
              207 NW First Street<br>
              Boardman, OR 97818
            </div>
          </div>

          <div class="ipr-reveal-up ipr-contact-map">
            <!-- [MAP — Pend. #G] Ilustración, no es mapa real. Reemplazar por embed de Google Maps. -->
            <svg viewBox="0 0 400 260" class="h-full w-full" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Illustrated map pin at Independent Portable Restrooms office">
              <defs>
                <pattern id="ipr-contact-grid" width="26" height="26" patternUnits="userSpaceOnUse">
                  <path d="M 26 0 L 0 0 0 26" fill="none" stroke="#10263B" stroke-opacity="0.06" stroke-width="1"/>
                </pattern>
              </defs>
              <rect width="400" height="260" fill="url(#ipr-contact-grid)" />
              <circle cx="200" cy="130" r="11" fill="#F3B200" stroke="#10263B" stroke-width="2" />
              <circle cx="200" cy="130" r="24" fill="none" stroke="#C68A3D" stroke-width="1.5" stroke-dasharray="4 6" />
              <text x="200" y="175" text-anchor="middle" font-family="IBM Plex Mono, monospace" font-size="11" font-weight="700" fill="#10263B">207 NW FIRST STREET</text>
              <text x="200" y="192" text-anchor="middle" font-family="IBM Plex Mono, monospace" font-size="10" fill="#59636B">BOARDMAN, OR 97818</text>
            </svg>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=IBM+Plex+Sans:wght@400;500;600&family=IBM+Plex+Mono:wght@500;700&display=swap" rel="stylesheet">

<style>
  .ipr-contact {
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

  .ipr-accent-bar {
    height: 5px;
    width: 100%;
    background: linear-gradient(90deg, var(--ipr-yellow) 0%, var(--ipr-wheat) 100%);
  }

  .ipr-stamped-contact {
    background-image: repeating-linear-gradient(
      135deg,
      var(--ipr-yellow) 0,
      var(--ipr-yellow) 3px,
      transparent 3px,
      transparent 34px
    );
    opacity: 0.1;
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

  /* ── Tarjeta del formulario ── */
  .ipr-form-card {
    border: 2px solid var(--ipr-ink);
    padding: 2rem;
  }

  .ipr-form-card__header {
    margin-bottom: 1.75rem;
  }

  .ipr-quote-form__grid {
    display: grid;
    gap: 1.1rem;
    grid-template-columns: 1fr;
  }

  @media (min-width: 640px) {
    .ipr-quote-form__grid {
      grid-template-columns: 1fr 1fr;
    }
  }

  .ipr-quote-form__field {
    display: flex;
    flex-direction: column;
    gap: 0.4rem;
  }

  .ipr-quote-form__field--full {
    grid-column: 1 / -1;
  }

  .ipr-quote-form__field label {
    font-family: "IBM Plex Mono", monospace;
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    color: var(--ipr-ink);
  }

  .ipr-quote-form__field input,
  .ipr-quote-form__field select,
  .ipr-quote-form__field textarea {
    width: 100%;
    min-height: 48px;
    border: 1px solid rgba(16, 38, 59, 0.24);
    background: var(--ipr-white);
    padding: 0.75rem 0.9rem;
    font-size: 0.95rem;
    font-family: "IBM Plex Sans", sans-serif;
    color: var(--ipr-ink);
    outline: none;
    transition: border-color .2s ease, box-shadow .2s ease;
  }

  .ipr-quote-form__field textarea {
    min-height: 110px;
    resize: vertical;
  }

  .ipr-quote-form__field input:focus,
  .ipr-quote-form__field select:focus,
  .ipr-quote-form__field textarea:focus {
    border-color: var(--ipr-yellow);
    box-shadow: 0 0 0 3px rgba(243, 178, 0, 0.18);
  }

  /* Honeypot — oculto de forma accesible (no display:none, para no gatillar
     algunos filtros anti-bot que ignoran campos display:none) */
  .ipr-quote-form__honeypot {
    position: absolute;
    left: -9999px;
    width: 1px;
    height: 1px;
    overflow: hidden;
  }

  .ipr-quote-form__captcha {
    margin-top: 1.5rem;
  }

  .ipr-quote-form__feedback {
    margin-top: 1rem;
  }

  .ipr-form-message {
    display: none;
    padding: 0.85rem 1rem;
    border: 1px solid transparent;
    font-size: 0.85rem;
    line-height: 1.6;
  }

  .ipr-form-message.is-visible { display: block; }

  .ipr-form-message--success {
    background: rgba(198, 138, 61, 0.12);
    border-color: var(--ipr-wheat);
    color: var(--ipr-ink);
  }

  .ipr-form-message--error {
    background: rgba(139, 58, 43, 0.10);
    border-color: var(--ipr-rust);
    color: var(--ipr-rust);
    margin-top: 0.6rem;
  }

  .ipr-quote-form__submit {
    width: 100%;
    margin-top: 1.5rem;
    min-height: 54px;
    justify-content: center;
    clip-path: none;
  }

  .ipr-quote-form__submit[disabled] {
    opacity: 0.7;
    cursor: not-allowed;
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
    border: none;
    cursor: pointer;
    transition: transform .2s ease, filter .2s ease;
  }

  .ipr-tab:hover { transform: translateX(3px); }
  .ipr-tab-yellow { background: var(--ipr-yellow); color: var(--ipr-ink); }
  .ipr-tab-yellow:hover { filter: brightness(1.08); }

  /* ── Tarjeta de contacto ── */
  .ipr-contact-card {
    background: var(--ipr-ink);
    color: var(--ipr-white);
    padding: 2rem;
  }

  .ipr-contact-card__phone {
    display: flex;
    flex-direction: column;
    gap: 0.15rem;
    margin-top: 1.25rem;
    font-family: "IBM Plex Mono", monospace;
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--ipr-white);
    text-decoration: none;
    padding-bottom: 1.1rem;
    border-bottom: 1px dashed rgba(254, 254, 254, 0.2);
  }

  .ipr-contact-card__phone--emergency {
    color: var(--ipr-yellow);
  }

  .ipr-contact-card__phone-label {
    font-size: 0.65rem;
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: var(--ipr-wheat);
  }

  .ipr-contact-card__hours {
    font-family: "IBM Plex Sans", sans-serif;
    font-size: 0.72rem;
    font-weight: 400;
    color: rgba(254, 254, 254, 0.55);
    margin-top: 0.15rem;
  }

  .ipr-contact-card__address {
    margin-top: 1.25rem;
    font-size: 0.95rem;
    line-height: 1.6;
    color: rgba(254, 254, 254, 0.9);
    display: flex;
    flex-direction: column;
    gap: 0.15rem;
  }

  .ipr-contact-map {
    margin-top: 1.5rem;
    border: 2px solid var(--ipr-ink);
    background: var(--ipr-paper);
  }

  /* ── Reveal animations ── */
  .ipr-reveal-up, .ipr-reveal-left, .ipr-reveal-right {
    opacity: 0;
    will-change: opacity, transform;
    transition: opacity .8s ease, transform .8s ease;
  }

  .ipr-reveal-up { transform: translateY(28px); }
  .ipr-reveal-left { transform: translateX(-30px); }
  .ipr-reveal-right { transform: translateX(30px); }

  .ipr-reveal-up.is-visible, .ipr-reveal-left.is-visible, .ipr-reveal-right.is-visible {
    opacity: 1;
    transform: translate(0, 0);
  }

  @media (prefers-reduced-motion: reduce) {
    .ipr-reveal-up, .ipr-reveal-left, .ipr-reveal-right, .ipr-tab {
      opacity: 1 !important;
      transform: none !important;
      transition: none !important;
    }
  }
</style>

<script>
  window.iprRecaptchaReady = function () {
    var node = document.getElementById("ipr-recaptcha");
    if (!node || node.dataset.widgetId || typeof grecaptcha === "undefined") return;

    var widgetId = grecaptcha.render(node, { sitekey: node.dataset.sitekey });
    node.dataset.widgetId = String(widgetId);
  };
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=iprRecaptchaReady&render=explicit" async defer></script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Reveal-on-scroll
    var items = document.querySelectorAll(".ipr-reveal-up, .ipr-reveal-left, .ipr-reveal-right");

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) entry.target.classList.add("is-visible");
      });
    }, { threshold: 0.12 });

    items.forEach(function (item) { observer.observe(item); });

    // Quote form: honeypot + reCAPTCHA + envío
    var form = document.getElementById("ipr-quote-form");
    if (!form) return;

    var successBox = document.getElementById("ipr-form-success");
    var errorBox = document.getElementById("ipr-form-error");
    var submitBtn = document.getElementById("ipr-form-submit");
    var captchaNode = document.getElementById("ipr-recaptcha");
    var honeypot = document.getElementById("ipr-company");

    function resetMessages() {
      successBox.textContent = "";
      errorBox.textContent = "";
      successBox.classList.remove("is-visible");
      errorBox.classList.remove("is-visible");
    }

    function showSuccess(message) {
      successBox.textContent = message;
      successBox.classList.add("is-visible");
    }

    function showError(message) {
      errorBox.textContent = message;
      errorBox.classList.add("is-visible");
    }

    form.addEventListener("submit", function (event) {
      event.preventDefault();
      resetMessages();

      // Honeypot: si un bot llenó este campo oculto, se descarta el envío
      // silenciosamente (no delatamos al bot que fue detectado).
      if (honeypot && honeypot.value.trim() !== "") {
        showSuccess("Thank you. Your request has been sent successfully. We'll be in touch soon.");
        form.reset();
        return;
      }

      if (typeof grecaptcha === "undefined") {
        showError("reCAPTCHA failed to load. Please refresh the page and try again.");
        return;
      }

      var widgetId = captchaNode.dataset.widgetId;
      if (typeof widgetId === "undefined") {
        showError("reCAPTCHA is still loading. Please wait a moment and try again.");
        return;
      }

      var captchaResponse = grecaptcha.getResponse(Number(widgetId));
      if (!captchaResponse) {
        showError("Please complete the reCAPTCHA verification.");
        return;
      }

      submitBtn.disabled = true;
      var originalText = submitBtn.textContent;
      submitBtn.textContent = "Sending...";

      var formData = {
        name: form.querySelector('input[name="full_name"]').value.trim(),
        phone: form.querySelector('input[name="phone"]').value.trim(),
        email: form.querySelector('input[name="email"]').value.trim(),
        service: form.querySelector('select[name="service"]').value,
        quantity: form.querySelector('input[name="quantity"]').value.trim(),
        rental_period: form.querySelector('select[name="rental_period"]').value,
        start_date: form.querySelector('input[name="start_date"]').value,
        location: form.querySelector('input[name="location"]').value.trim(),
        message: form.querySelector('textarea[name="message"]').value.trim(),
        "g-recaptcha-response": captchaResponse
      };

      // [EMAIL DESTINO — Pend. #I] Reemplazar service_id/template_id/publicKey
      // reales de EmailJS cuando el cliente confirme dónde llegan los leads.
      if (window.emailjs) {
        emailjs.init({ publicKey: "YOUR_EMAILJS_PUBLIC_KEY_HERE" });
        emailjs.send("YOUR_SERVICE_ID_HERE", "YOUR_TEMPLATE_ID_HERE", formData)
          .then(function () {
            form.reset();
            grecaptcha.reset(Number(widgetId));
            showSuccess("Thank you. Your request has been sent successfully. We'll be in touch soon.");
          })
          .catch(function () {
            showError("Something went wrong while sending your request. Please try again, or call us directly.");
          })
          .finally(function () {
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
          });
      } else {
        showError("Form service not configured yet. Please call us directly at 541-481-3111.");
        submitBtn.disabled = false;
        submitBtn.textContent = originalText;
      }
    });
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

<?php get_footer(); ?>