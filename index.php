<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Home Page</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    /* Base styles */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      overflow: hidden;
    }
    
    /* Background slideshow */
    #bg-slideshow {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }
    
    #bg-slideshow img {
      position: absolute;
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0;
      transition: opacity 1s ease;
    }
    
    #bg-slideshow img.active {
      opacity: 1;
    }
    
    /* Blur overlay */
    #blur-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      backdrop-filter: blur(5px);
      background-color: rgba(0, 0, 0, 0.3);
      z-index: 0;
    }
    
    /* Button container */
    #button-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.5s ease;
      z-index: 1;
      padding: 20px;
      box-sizing: border-box;
      overflow-y: auto;
    }
    
    #button-container.visible {
      opacity: 1;
      pointer-events: auto;
    }
    
    /* Button grid */
    .button-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 15px;
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
    }
    
    /* Office buttons */
    .office-button {
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 15px;
      background: linear-gradient(270deg, #3004e4, rgb(107, 74, 255), #3004e4);
      background-size: 200% 200%;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      transition: all 0.3s ease;
      min-height: 80px;
      border: 2px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      word-break: break-word;
      animation: gradientSlide 3s ease infinite;
    }
    
    .office-button:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }
    
    /* Gradient animation */
    @keyframes gradientSlide {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
    }
    
    /* Close button */
    .close-btn {
      position: absolute;
      top: 20px;
      right: 20px;
      background: linear-gradient(270deg, #3004e4, rgb(107, 74, 255), #3004e4);
      border: none;
      color: white;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      font-size: 60px;
      cursor: pointer;
      z-index: 2;
    }
    
    .close-btn:hover {
      background-color: rgba(255, 255, 255, 0.3);
    }
    
    /* Title */
    .menu-title {
      color: white;
      text-align: center;
      margin-bottom: 30px;
      font-size: 2rem;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      width: 100%;
    }
    
/* Tap instruction text */
.tap-instruction {
  position: fixed;
  bottom: 50px;
  left: 50%;
  transform: translateX(-50%);
  color: white;
  font-size: 1.5rem;
  text-align: center;
  z-index: 1;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.69);
  opacity: 0.9;
  animation: fadeBlink 1.5s infinite ease-in-out;
}

/* Fade blink keyframes */
@keyframes fadeBlink {
  0%, 100% {
    opacity: 1;
  }
  50% {
    opacity: 0.1;
  }
}

    
    /* Responsive adjustments */
    @media (max-width: 768px) {
      .button-grid {
        grid-template-columns: 1fr;
      }
      
      .office-button {
        min-height: 60px;
        font-size: 14px;
      }
      
      .menu-title {
        font-size: 1.5rem;
        margin-bottom: 20px;
      }
      
      .tap-instruction {
        font-size: 1.2rem;
        bottom: 20px;
      }
    }
  </style>
</head>
<body>

  <!-- Background slideshow -->
  <div id="bg-slideshow">
    <img src="images/slideshow_1.jpg" class="active">
    <img src="images/slideshow_2.jpg">
    <img src="images/slideshow_3.jpg">
    <img src="images/slideshow_4.jpg">
    <img src="images/slideshow_5.jpg">
  </div>


  
  <!-- Tap instruction text -->
  <h1 class="tap-instruction">"TAP ANYWHERE TO INTERACT"</h1>
  
  <!-- Office buttons -->
  <div class="button-container" id="button-container">
    <button class="close-btn" id="close-btn">×</button>
    
    <div class="button-grid">
      <a href="list_of_services/services.php" class="office-button">LIST OF SERVICES</a>
      <a href="legal/legal_external.php" class="office-button">LEGAL OFFICE</a>
      <a href="bridd/bridd.php" class="office-button">BUSINESS AND REAL ESTATE INVESTMENT DEVELOPMENT DIVISION</a>
      <a href="accounting/accounting_external.php" class="office-button">ACCOUNTING DIVISION</a>
      <a href="abc_division/abc_division.php" class="office-button">ACCOUNTING/BUDGET/CASHIERING DIVISIONS</a>
      <a href="collection/collection.php" class="office-button">COLLECTION DIVISION</a>
      <a href="personnel/personnel.php" class="office-button">PERSONNEL DIVISION</a>
      <a href="procurement/procurement_external.php" class="office-button">PROCUREMENT DIVISION</a>
      <a href="gsd/gsd.php" class="office-button">GENERAL SERVICES DIVISION</a>
      <a href="hrdd/hrdd_external.php" class="office-button">HUMAN RESOURCE DEVELOPMENT DIVISION</a>
      <a href="talpi/talpi_external.php" class="office-button">TERMINAL/AIRSIDE/LANDSIDE POLICE & INVESTIGATION DIVISIONS</a>
      <a href="tpi/tpi_external.php" class="office-button">TERMINAL POLICE & INVESTIGATION DIVISIONS</a>
      <a href="landslide/landslide_external.php" class="office-button">LANDSIDE POLICE DIVISION</a>
      <a href="piid/piid_external.php" class="office-button">POLICE INTELLIGENCE & INVESTIGATION DIVISION</a>
      <a href="sod/sod_external.php" class="office-button">SURVEILLANCE OPERATIONS DIVISION</a>
      <a href="spid/spid_internal.php" class="office-button">SYSTEMS & PROCEDURES IMPROVEMENT DIVISION</a>
      <a href="feebacks_and_compliant\feedbacksAndCompliant.php" class="office-button">FEEDBACK & COMPLAINTS MECHANISM</a>
      <a href="list_of_offices/offices.php" class="office-button">LIST OF OFFICES</a>
    </div>
  </div>

  <script>
  // Slideshow effect
  const slides = document.querySelectorAll('#bg-slideshow img');
  let current = 0;

  setInterval(() => {
    slides[current].classList.remove('active');
    current = (current + 1) % slides.length;
    slides[current].classList.add('active');
  }, 5000);

  // Toggle button container visibility
  const buttonContainer = document.getElementById('button-container');
  const tapInstruction = document.querySelector('.tap-instruction');
  let inactivityTimer;
  
  // Function to reset the inactivity timer
  function resetInactivityTimer() {
    clearTimeout(inactivityTimer);
    if (buttonContainer.classList.contains('visible')) {
      inactivityTimer = setTimeout(() => {
        buttonContainer.classList.remove('visible');
        tapInstruction.style.display = 'block';
        // Store the state when hiding due to inactivity
        sessionStorage.setItem('menuOpen', 'false');
      }, 30000); // 30 seconds
    }
  }
  
  // Check session storage on page load
  window.addEventListener('DOMContentLoaded', () => {
    const menuOpen = sessionStorage.getItem('menuOpen');
    if (menuOpen === 'true') {
      buttonContainer.classList.add('visible');
      tapInstruction.style.display = 'none';
      resetInactivityTimer();
    }
  });

  // Show buttons when clicking anywhere
  document.body.addEventListener('click', (e) => {
    // If buttons are visible, hide them when clicking anywhere
    if (buttonContainer.classList.contains('visible')) {
      buttonContainer.classList.remove('visible');
      tapInstruction.style.display = 'block'; // Show the instruction again
      clearTimeout(inactivityTimer);
      // Store the closed state
      sessionStorage.setItem('menuOpen', 'false');
    } 
    // If buttons are hidden and not clicking on buttons themselves, show them
    else if (!buttonContainer.contains(e.target)) {
      buttonContainer.classList.add('visible');
      tapInstruction.style.display = 'none'; // Hide the instruction when menu is open
      // Store the open state
      sessionStorage.setItem('menuOpen', 'true');
      resetInactivityTimer();
    }
  });
  
  // Track activity within the button container
  buttonContainer.addEventListener('mousemove', resetInactivityTimer);
  buttonContainer.addEventListener('scroll', resetInactivityTimer);
  buttonContainer.addEventListener('click', resetInactivityTimer);
  buttonContainer.addEventListener('touchstart', resetInactivityTimer);
  
  // Redirection when clicking on a button
  const officeButtons = document.querySelectorAll('.office-button');
  officeButtons.forEach(button => {
    button.addEventListener('click', (e) => {
      const targetURL = button.getAttribute('href');
      
      if (!targetURL) return; // Don't proceed if no URL
      
      // Store that the menu should remain open when returning
      sessionStorage.setItem('menuOpen', 'true');
      
      // Hide UI first before redirection
      buttonContainer.classList.remove('visible');
      document.getElementById('blur-overlay').style.backdropFilter = 'blur(0px)';
      clearTimeout(inactivityTimer);

      // Redirect after a short delay
      setTimeout(() => {
        window.location.href = targetURL;
      }, 300);
    });
  });
</script>

</body>
</html>