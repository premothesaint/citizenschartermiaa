<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Home Page</title>
  <link rel="stylesheet" href="../style.css" />
  <style>
/* Glassmorphism overlay style */
.glass-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  backdrop-filter: blur(10px);
  background: rgba(56, 56, 56, 0.45);
  z-index: 10;
  display: flex;
  flex-direction: column;
  align-items: center;
  color: white;
  padding: 20px;
  box-sizing: border-box;
}

/* Header container styling */
.header-container {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 20px;
}

h1 {
  margin: 0;
  font-size: 2rem;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 10px;
}

h2 {
  margin: 0;
  font-size: 1.8rem;
  text-transform: uppercase;
  text-align: center;
}

/* Centered options container */
.options-container {
  display: flex;
  gap: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 15;
}

/* Rest of your option box styles remain the same */
.option-box {
  width: 400px;
  height: 450px;
  background: rgba(255, 255, 255, 0.9);
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  display: flex;
  flex-direction: column;
}

.option-box:hover {
  transform: translateY(-10px);
  box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
}

.option-header {
  background: linear-gradient(to right, #3004e4, rgb(107, 74, 255), #3004e4);
  background-size: 300% 100%;
  color: white;
  padding: 20px;
  text-align: center;
  font-size: 1.5rem;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 1px;
  animation: gradientSlide 3s ease infinite;
}

.option-image {
  width: 100%;
  height: 250px;
  background-color: #f0f0f0;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #555;
  font-size: 1.2rem;
}

.option-button {
  flex-grow: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 16px 10px; /* Slightly reduce vertical padding if needed */
  min-height: 60px; /* Ensures minimum space */
  line-height: 1.3; /* Better spacing for text (adjust if needed) */
  background: linear-gradient(to right, #3004e4, rgb(107, 74, 255), #3004e4);
  background-size: 300% 100%;
  color: white;
  font-size: 1.2rem;
  font-weight: bold;
  text-decoration: none;
  transition: all 0.3s ease;
  animation: gradientSlide 3s ease infinite;
  border: none;
  cursor: pointer;
  border-radius: 0;
  border-bottom-left-radius: 12px;
  border-bottom-right-radius: 12px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  background-clip: padding-box;
  text-align: center;
  width: 100%;
  box-sizing: border-box; /* Ensures padding is included in height */
}

.option-button:hover {
  background-position: 100% 50%;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

.back-button {
  position: absolute;
  bottom: 100px;
  left: 50%;
  transform: translateX(-50%);
  font-size: 20px;
  font-weight: bold;
  border: none;
  border-radius: 12px;
  cursor: pointer;
  transition: background-color 0.2s ease, box-shadow 0.2s ease;
  display: flex;
  align-items: center;
  background-color: white;
  justify-content: center;
  padding: 16px 32px;
  color: black;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 1px;
  text-decoration: none;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  margin: 10px 0;
}

.back-button:hover {
  background-color: #f0f0f0;
}

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

/* Inactivity warning styles */
.inactivity-warning {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: rgba(0, 0, 0, 0.8);
  color: white;
  padding: 20px 40px;
  border-radius: 10px;
  font-size: 24px;
  z-index: 2000;
  display: none;
}
  </style>
</head>
<body>
<!-- Inactivity warning -->
<div class="inactivity-warning" id="inactivityWarning">
  Returning to homepage in <span id="countdown">5</span> seconds...
</div>
  <!-- Background slideshow -->
  <div id="bg-slideshow">
    <img src="../images/slideshow_1.jpg" class="active">
    <img src="../images/slideshow_2.jpg">
    <img src="../images/slideshow_3.jpg">
    <img src="../images/slideshow_4.jpg">
    <img src="../images/slideshow_5.jpg">
  </div>

  <!-- Glassmorphism overlay -->
  <div class="glass-overlay">
    <div class="header-container">
      <h1>SYSTEMS AND PROCEDURES IMPROVEMENT DIVISION      </h1>
      <h2>Internal</h2>
    </div>
    <div class="options-container">
      <div class="option-box">
        <div class="option-image">
        <img src="../images/button-images/spid/1.png">
        </div>
        <a href="../spid/spid_1.php" class="option-button">Conduct of Survey or Study Assistance</a>
      </div>
      
      <div class="option-box">
        <div class="option-image">
        <img src="../images/button-images/spid/2.png">
        </div>
        <a href="../spid/spid_2.php" class="option-button">Facilitation for Memorandum Circular Constitution and Revision</a>
      </div>
    </div>
    <a href="../index.php" class="back-button">Go Back</a>
  </div>

<script>

  // Inactivity timer variables
let inactivityTimer;
let countdownTimer;
const inactivityTimeout = 30000; // 30 seconds
const countdownDuration = 5000; // 5 seconds warning
const inactivityWarning = document.getElementById('inactivityWarning');
const countdownElement = document.getElementById('countdown');

// Set up event listeners for activity
document.addEventListener('mousemove', resetInactivityTimer);
document.addEventListener('keypress', resetInactivityTimer);
document.addEventListener('touchstart', resetInactivityTimer);
document.addEventListener('click', resetInactivityTimer);

// Initialize the timer
resetInactivityTimer();

// Inactivity timer functions
function resetInactivityTimer() {
  if (inactivityWarning.style.display === 'block') {
    clearTimeout(countdownTimer);
    inactivityWarning.style.display = 'none';
  }
  clearTimeout(inactivityTimer);
  inactivityTimer = setTimeout(showInactivityWarning, inactivityTimeout);
}

function showInactivityWarning() {
  inactivityWarning.style.display = 'block';
  let secondsLeft = 5;
  countdownElement.textContent = secondsLeft;
  
  countdownTimer = setInterval(function() {
    secondsLeft--;
    countdownElement.textContent = secondsLeft;
    
    if (secondsLeft <= 0) {
      clearInterval(countdownTimer);
      window.location.href = '../index.php';
    }
  }, 1000);
}
  // Slideshow effect
  const slides = document.querySelectorAll('#bg-slideshow img');
  let current = 0;

  setInterval(() => {
    slides[current].classList.remove('active');
    current = (current + 1) % slides.length;
    slides[current].classList.add('active');
  }, 5000);

  
</script>

</body>
</html>