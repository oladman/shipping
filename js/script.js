<script>
  const logosBox = document.getElementById("logosBox");
  let position = -logosBox.offsetWidth / 2;

  function animateSlider() {
    position += 1; // Move right by 1px
    if (position >= 0) {
      position = -logosBox.offsetWidth / 2; // Reset to start
    }
    logosBox.style.transform = `translateX(${position}px)`;
    requestAnimationFrame(animateSlider);
  }

  // Duplicate logos for seamless scroll
  logosBox.innerHTML += logosBox.innerHTML;

  animateSlider();
</script>
