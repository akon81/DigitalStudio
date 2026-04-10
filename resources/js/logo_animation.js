/**
 * Logo DS – Animation Script
 *
 * Zależności: brak (vanilla JS, brak frameworków)
 * Użycie:
 *   1. Umieść SVG inline w szablonie Blade (logo_ds_animated.svg lub jako partial).
 *   2. Załaduj logo_animation.css.
 *   3. Załaduj ten skrypt (np. <script src="{{ asset('js/logo_animation.js') }}" defer></script>).
 *   Skrypt sam uruchamia animację po DOMContentLoaded.
 */

(function () {
  'use strict';

  // ── Config ──────────────────────────────────────────────────────────────────
  const SQUARE_DELAY  = 0.12;   // sekundy między kolejnymi kwadratami
  const SQUARE_DUR    = 0.40;   // czas trwania pojedynczego kwadratu (s)
  const TEXT_START_MS = 950;    // opóźnienie startu reveal tekstu (ms)
  const TEXT_DUR_MS   = 1250;   // czas trwania reveal tekstu (ms)
  const TEXT_TARGET_W = 340;    // szerokość obszaru tekstu w jednostkach SVG

  // ── Easing ──────────────────────────────────────────────────────────────────
  function easeInOut(t) {
    return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
  }

  // ── Animacja reveal tekstu przez requestAnimationFrame ───────────────────────
  function animateReveal(targetW, durationMs, delayMs) {
    setTimeout(function () {
      var rect  = document.getElementById('revealRect');
      if (!rect) return;
      var start = performance.now();

      function step(now) {
        var raw   = Math.min((now - start) / durationMs, 1);
        var eased = easeInOut(raw);
        rect.setAttribute('width', eased * targetW);
        if (raw < 1) requestAnimationFrame(step);
      }

      requestAnimationFrame(step);
    }, delayMs);
  }

  // ── Główna funkcja animacji ──────────────────────────────────────────────────
  function runAnimation() {
    var squares = document.querySelectorAll(
      '#sq1, #sq2, #sq3, #sq4, #sq5, #sq6, #sq7, #sq8'
    );

    // Resetuj reveal tekstu
    var revealRect = document.getElementById('revealRect');
    if (revealRect) revealRect.setAttribute('width', '0');

    // Resetuj i uruchom każdy kwadrat
    squares.forEach(function (sq, i) {
      sq.classList.remove('sq-animate');
      sq.style.opacity = '0';
      sq.style.animationDelay = '';

      // Force reflow – konieczny do restartu animacji CSS
      void sq.offsetWidth;

      sq.style.animationDelay = (i * SQUARE_DELAY) + 's';
      sq.classList.add('sq-animate');
    });

    // Reveal tekstu po zakończeniu kwadratów
    animateReveal(TEXT_TARGET_W, TEXT_DUR_MS, TEXT_START_MS);
  }

  // ── Boot ────────────────────────────────────────────────────────────────────
  document.addEventListener('DOMContentLoaded', function () {
    runAnimation();

    var btn = document.getElementById('logoReplayBtn');
    if (btn) btn.addEventListener('click', runAnimation);
  });

})();
