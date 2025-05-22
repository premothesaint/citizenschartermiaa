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
      border-radius: 0;
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.06);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: white;
      font-size: 2rem;
      text-align: center;
      padding: 20px;
    }

    h1 {
      margin-bottom: 40px; /* Space between title and buttons */
      font-size: 4rem; /* Larger font size for better visibility */
      text-transform: uppercase; /* Uppercase for emphasis */
    }

    .type-button {
      font-size: 40px;
      font-weight: bold;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      transition: background-color 0.2s ease, box-shadow 0.2s ease;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 16px 32px; /* More padding for the buttons */
      color: black;
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 1px;
      text-decoration: none;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add shadow */
      word-break: break-word;
      margin: 10px 0; /* Margin between buttons */
      background: linear-gradient(to right, #3004e4, rgb(107, 74, 255), #3004e4);
      background-size: 300% 100%;
      color: white; /* Text color */
      animation: gradientSlide 3s ease infinite; /* Gradient animation */
    }

    .back-button {
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
      padding: 16px 32px; /* More padding for the buttons */
      color: black;
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 1px;
      text-decoration: none;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add shadow */
      word-break: break-word;
      margin: 10px 0; /* Margin between buttons */
    }
    .type-button:hover {
      background-color: #0a28d8;
      color: white; /* Change text color on hover */
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
    <h1>PERSONNEL DIVISION</h1>
    <div style="display: flex; flex-direction: column; gap: 20px; align-items: center;">
      <a href="../personnel/personnel_external.php" class="type-button">External Services</a>
      <a href="../personnel/personnel_internal.php" class="type-button">Internal Services</a>
      <a href="../index.php" class="back-button">Go Back</a>
    </div>
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
