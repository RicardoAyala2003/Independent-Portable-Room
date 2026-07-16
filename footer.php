<div id="render-footer-here"></div>

<!-- Botón flotante "Call Us" — fijo en toda página, se expande al hacer hover. -->
<a
  href="tel:+15417017369"
  class="ipr-floating-call"
  aria-label="Call us now at 541-701-7369"
>
  <span class="ipr-floating-call__icon" aria-hidden="true">
    <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor">
      <path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.8 21 3 13.2 3 3.9c0-.6.4-1 1-1h3.4c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8Z" />
    </svg>
  </span>
  <span class="ipr-floating-call__text">
    <strong>Call Us</strong>
    541-701-7369
  </span>
</a>

<style>
  .ipr-floating-call {
    position: fixed;
    right: 1.5rem;
    bottom: 1.5rem;
    z-index: 999;
    display: inline-flex;
    align-items: center;
    height: 60px;
    width: 60px;
    padding: 0;
    background: #1A1A1A;
    color: #FEFEFE;
    border-radius: 999px;
    overflow: hidden;
    text-decoration: none;
    white-space: nowrap;
    box-shadow: 0 10px 26px rgba(26, 26, 26, .35), 0 0 0 0 rgba(208, 22, 28, .35);
    transition: width .4s cubic-bezier(.22, 1, .36, 1), box-shadow .3s ease, transform .3s ease;
    animation: ipr-floating-call-pulse 2.6s ease-in-out infinite;
  }

  .ipr-floating-call:hover,
  .ipr-floating-call:focus-visible {
    width: 232px;
    transform: translateY(-2px);
    animation-play-state: paused;
    box-shadow: 0 16px 34px rgba(26, 26, 26, .45);
  }

  .ipr-floating-call__icon {
    flex: 0 0 60px;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .ipr-floating-call__text {
    display: flex;
    flex-direction: column;
    line-height: 1.3;
    font-family: "IBM Plex Mono", monospace;
    font-size: .8rem;
    font-weight: 600;
    padding-right: 1.25rem;
    opacity: 0;
    transform: translateX(-6px);
    transition: opacity .25s ease .08s, transform .25s ease .08s;
  }

  .ipr-floating-call:hover .ipr-floating-call__text,
  .ipr-floating-call:focus-visible .ipr-floating-call__text {
    opacity: 1;
    transform: translateX(0);
  }

  .ipr-floating-call__text strong {
    font-family: 'Oswald', 'Segoe UI', Arial, sans-serif;
    font-size: .8rem;
    font-weight: 700;
    letter-spacing: .05em;
    text-transform: uppercase;
    color: #D0161C;
  }

  @keyframes ipr-floating-call-pulse {
    0%, 100% { box-shadow: 0 10px 26px rgba(26, 26, 26, .35), 0 0 0 0 rgba(208, 22, 28, .35); }
    50%      { box-shadow: 0 10px 26px rgba(26, 26, 26, .35), 0 0 0 10px rgba(208, 22, 28, 0); }
  }

  @media (max-width: 640px) {
    .ipr-floating-call {
      right: 1rem;
      bottom: 1rem;
      height: 52px;
      width: 52px;
    }

    .ipr-floating-call__icon {
      flex-basis: 52px;
      width: 52px;
      height: 52px;
    }

    .ipr-floating-call:hover,
    .ipr-floating-call:focus-visible {
      width: 210px;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .ipr-floating-call {
      animation: none !important;
      transition: none !important;
    }

    .ipr-floating-call__text {
      transition: none !important;
    }
  }
</style>

    <?php wp_footer(); ?>
  </body>
</html>