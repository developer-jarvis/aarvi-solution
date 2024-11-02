<!-- Preloader Overlay -->
<div class="preloader-overlay" id="preloaderOverlay">
  <div class="spinner-container">
    <div class="spinner"></div>
    <div class="spinner-layer"></div>
    <div class="spinner-core"></div>
  </div>
</div>

<style>
  /* Preloader Overlay */
  .preloader-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    z-index: 999999;
    display: none; /* Set to block via JS to show */
    
    /* Flexbox for centering content */
    display: flex;
    align-items: center;
    justify-content: center;
    
    transition: opacity 0.3s ease-in-out;
  }

  .spinner-container {
    position: relative;
    width: 100px;
    height: 100px;
  }

  .spinner {
    position: absolute;
    top: 0;
    left: 0;
    width: 70px;
    height: 70px;
    border: 8px solid rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    border-top-color: #ff79c6;
    animation: spin 1.5s linear infinite;
  }

  .spinner-layer {
    position: absolute;
    top: 10px;
    left: 10px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 5px solid transparent;
    border-top-color: #bd93f9;
    animation: spin 2s linear infinite reverse;
  }

  .spinner-core {
    position: absolute;
    top: 20px;
    left: 20px;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    border: 4px solid transparent;
    border-top-color: #50fa7b;
    animation: spin 2.5s linear infinite;
  }

  @keyframes spin {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }

  /* Responsive Adjustments */
  @media (max-width: 900px) {
    .spinner-container {
      width: 80px;
      height: 80px;
    }
    .spinner {
      width: 80px;
      height: 80px;
    }
    .spinner-layer {
      width: 60px;
      height: 60px;
      top: 10px;
      left: 10px;
    }
    .spinner-core {
      width: 50px;
      height: 50px;
      top: 15px;
      left: 15px;
    }
  }

  @media (max-width: 600px) {
    .preloader-overlay {
      background-color: rgba(0, 0, 0, 0.9);
    }
    .spinner-container {
      width: 70px;
      height: 70px;
    }
    .spinner {
      width: 70px;
      height: 70px;
    }
    .spinner-layer {
      width: 50px;
      height: 50px;
      top: 10px;
      left: 10px;
    }
    .spinner-core {
      width: 40px;
      height: 40px;
      top: 15px;
      left: 15px;
    }
  }
</style>

<script>
  // JavaScript to control the preloader (optional)
  window.addEventListener('load', function() {
    const preloader = document.getElementById('preloaderOverlay');
    preloader.style.opacity = '0';
    setTimeout(() => {
      preloader.style.display = 'none';
    }, 600); // Delay to allow fade-out effect
  });
</script>
