<footer class="ft-footer">
  <div class="ft-footer-container">

    <!-- Left Column -->
    <div class="ft-footer-col ft-brand">
      <div class="ft-logo">
       <a href="/">
        <svg
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 500 120"
    class="logo-svg"
    aria-label="Marinex logo"
  >
                        <!-- Orange Square with Plane Icon -->
                        <g transform="translate(10,20)">
                            <!-- Square -->
                            <rect x="0" y="0" width="80" height="70" rx="10"
                                fill="none" stroke="#FF7A00" stroke-width="2" />

                            <!-- Plane Icon -->
                            <path d="M20 50 L40 40 L20 10 L30 10 L50 35 L70 25 L75 30 L50 45 L30 60 L20 60 Z"
                                fill="#fff" />
                        </g>

                        <!-- Text -->
                        <text x="120" y="70"
                            font-family="Montserrat, Arial, sans-serif"
                            font-size="46"
                            font-weight="700"
                            fill="#fff">
                            Marinex
                        </text>
                    </svg> </a>
      </div>

      <p class="ft-description">
       Progress built on consistency, <br /> purpose, and movement
      </p>

      <div class="ft-socials">
        <a href="#" aria-label="Instagram"><img src="./images/icons/instagram-new.svg" alt="Instagram"></a>
        <a href="#" aria-label="Facebook"><img src="./images/icons/facebook-new.svg" alt="Facebook"></a>
        <a href="#" aria-label="Twitter"><img src="./images/icons/twitter.svg" alt="Twitter"></a>
      </div>
    </div>

    <!-- Middle Column -->
    <div class="ft-footer-col ft-contact">
      <p>4517 Washington Ave.<br />Manchester, Kentucky<br />39495</p>
      <p>(319) 555-0115</p>
      <p>(603) 555-0123</p>
    </div>

    <!-- Right Column -->
    <div class="ft-footer-col ft-newsletter">
      <h3>Stay Tuned</h3>
      <p>Subscribe to our newsletter<br />and never miss our news.</p>

      <form class="ft-form">
        <input type="email" placeholder="Email" />
        <button type="submit">Subscribe</button>
      </form>
    </div>

  </div>

  <!-- Bottom Row -->
  <div class="ft-footer-bottom">
    <nav class="ft-footer-nav">
      <a href="#">ABOUT</a>
      <a href="#">CAREER</a>
      <a href="#">BUSSINESS</a>
      <a href="#">SERVICES</a>
    </nav>

    <p class="ft-copy">
      © 2021–2026 | All Rights Reserved<br />
     
    </p>
  </div>
   <script>
    const logosBox = document.getElementById("logosBox");
    let position = -logosBox.offsetWidth / 2;

    function animateSlider() {
      position += 0.5; // Move right by 1px
      if (position >= 0) {
        position = -logosBox.offsetWidth / 2; // Reset to start
      }
      logosBox.style.transform = `translateX(${position}px)`;
      requestAnimationFrame(animateSlider);
    }

    // Duplicate logos for seamless scroll
    logosBox.innerHTML += logosBox.innerHTML;

    animateSlider();

function initOlTestimonialSlider() {
  const track = document.getElementById('olTestiTrack');
  const cards = Array.from(track.querySelectorAll('.ol-testimonial-card'));
  const dotsBox = document.getElementById('olTestiDots');

  if (!cards.length) return;

  let index = 0;
  let autoID;

  dotsBox.innerHTML = '';

  cards.forEach((_, i) => {
    const dot = document.createElement('span');
    dot.className = 'ol-testimonial-dot' + (i === 0 ? ' active' : '');
    dot.onclick = () => go(i);
    dotsBox.appendChild(dot);
  });

  function activate() {
    const gap = parseFloat(getComputedStyle(track).gap) || 20;
    const slideWidth = cards[0].offsetWidth + gap;

    track.style.transform =
      `translateX(${-index * slideWidth}px)`;

    cards.forEach((c, i) =>
      c.classList.toggle('ol-testimonial-active', i === index)
    );

    dotsBox.querySelectorAll('.ol-testimonial-dot')
      .forEach((d, i) =>
        d.classList.toggle('active', i === index)
      );
  }

  function next(step = 1) {
    index = (index + step + cards.length) % cards.length;
    activate();
  }

  function go(i) {
    index = i;
    activate();
    resetAuto();
  }

  function resetAuto() {
    clearInterval(autoID);
    autoID = setInterval(() => next(1), 5000);
  }

  resetAuto();
  activate();

  // Swipe support
  let startX = null;

  track.addEventListener('pointerdown', e => startX = e.clientX);
  track.addEventListener('pointerup', e => {
    if (startX === null) return;
    const dx = e.clientX - startX;
    if (Math.abs(dx) > 50) next(dx < 0 ? 1 : -1);
    resetAuto();
    startX = null;
  });

  window.addEventListener('resize', activate);
}
initOlTestimonialSlider();

document.getElementById("mobileNavToggle").addEventListener("click", function() {
    document.getElementById("mobileNavMenu").classList.toggle("open");
});

document.querySelectorAll('.question').forEach(question => {
    question.addEventListener('click', () => {
        const faqItem = question.closest('.faq-item');
        document.querySelectorAll('.faq-item').forEach(item => {
            if (item !== faqItem && item.classList.contains('active')) {
                item.classList.remove('active');
            }
        });
        faqItem.classList.toggle('active');
    });
});
  </script>
</footer>