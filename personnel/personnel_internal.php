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
  margin: 10px 0;
}

h1 {
  margin: 0;
  font-size: 1.8rem;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 5px;
}

h2 {
  margin: 0;
  font-size: 1.5rem;
  text-transform: uppercase;
  text-align: center;
}

/* Centered grid layout */
.options-wrapper {
  width: 100%;
  display: flex;
  justify-content: center;
  margin: 30px 0;
}

.options-container {
  display: grid;
  grid-template-columns: repeat(5, 240px);
  gap: 20px;
  justify-content: center;
  padding: 10px;
}

/* Second row with 4 items */
.options-container .option-box:nth-child(n+6) {
  grid-column: span 1;
}

/* Center the last row */
.options-container::after {
  content: "";
  grid-column: 1 / span 5;
  height: 0;
}

.option-box {
  width: 240px;
  height: 320px;
  background: rgba(255, 255, 255, 0.9);
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  display: flex;
  flex-direction: column;
}

.option-box:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
}

.option-header {
  background: linear-gradient(to right, #3004e4, rgb(107, 74, 255), #3004e4);
  background-size: 300% 100%;
  color: white;
  padding: 12px;
  text-align: center;
  font-size: 1rem;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 1px;
  animation: gradientSlide 3s ease infinite;
}

.option-image {
  width: 100%;
  height: 140px;
  background-color: #f0f0f0;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

.option-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.option-button {
  flex-grow: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 12px 15px;
  min-height: 60px;
  line-height: 1.3;
  background: linear-gradient(to right, #3004e4, rgb(107, 74, 255), #3004e4);
  background-size: 300% 100%;
  color: white;
  font-size: 0.95rem;
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
  text-align: center;
  width: 100%;
  box-sizing: border-box;
}

.option-button:hover {
  background-position: 100% 50%;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
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
  padding: 16px 32px;
  color: black;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 1px;
  text-decoration: none;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  word-break: break-word;
  margin: 20px 0;
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

/* Responsive adjustments */
@media (max-width: 1400px) {
  .options-container {
    grid-template-columns: repeat(4, 240px);
  }
  
  .options-container::after {
    grid-column: 1 / span 4;
  }
}

@media (max-width: 1200px) {
  .options-container {
    grid-template-columns: repeat(3, 240px);
  }
  
  .options-container::after {
    grid-column: 1 / span 3;
  }
  
  h1 {
    font-size: 1.6rem;
  }
  
  h2 {
    font-size: 1.3rem;
  }
}

@media (max-width: 900px) {
  .options-container {
    grid-template-columns: repeat(2, 240px);
  }
  
  .options-container::after {
    grid-column: 1 / span 2;
  }
}

@media (max-width: 600px) {
  .glass-overlay {
    padding: 15px 10px;
  }
  
  .options-container {
    grid-template-columns: 240px;
  }
  
  .options-container::after {
    grid-column: 1;
  }
  
  .option-button {
    font-size: 0.9rem;
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
      <h1>PERSONNEL DIVISION</h1>
      <h2>INTERNAL</h2>
    </div>
    
    <div class="options-wrapper">
      <div class="options-container">
        <div class="option-box">
          <div class="option-image">
            <img src="../images/button-images/personnel/internal/1.png">
          </div>
          <a href="../personnel/personnel_internal1.php" class="option-button">Processing of Payroll of Employees</a>
        </div>
        
        <div class="option-box">
          <div class="option-image">
          <img src="../images/button-images/personnel/internal/2.png">
          </div>
          <a href="../personnel/personnel_internal2.php" class="option-button">Overtime Pay and Night Differential Pay</a>
        </div>
        
        <div class="option-box">
          <div class="option-image">
          <img src="../images/button-images/personnel/internal/3.png">
          </div>
          <a href="../personnel/personnel_internal3.php" class="option-button">First Salary of Newly Hired Employees</a>
        </div>
        
        <div class="option-box">
          <div class="option-image">
          <img src="../images/button-images/personnel/internal/4.png">
          </div>
          <a href="../personnel/personnel_internal4.php" class="option-button">MIAA Separation Claims</a>
        </div>

        <div class="option-box">
          <div class="option-image">
          <img src="../images/button-images/personnel/internal/5.png">
          </div>
          <a href="../personnel/personnel_internal5.php" class="option-button">Special Payroll (PBB, CAN, MID-YEAR BONUS, YEAR-END BONUS and Other Benefits)</a>
        </div>

        <div class="option-box">
          <div class="option-image">
          <img src="../images/button-images/personnel/internal/6.png">
          </div>
          <a href="../personnel/personnel_internal6.php" class="option-button">Travel Authority (Personal Travel)</a>
        </div>

        <div class="option-box">
          <div class="option-image">
          <img src="../images/button-images/personnel/internal/7.png">
          </div>
          <a href="../personnel/personnel_internal7.php" class="option-button">Leave of Absence Without Pay (LWOP) Certificate</a>
        </div>

        <div class="option-box">
          <div class="option-image">
          <img src="../images/button-images/personnel/internal/8.png">
          </div>
          <a href="../personnel/personnel_internal8.php" class="option-button">Monetization of Leave Credits (MOLC)</a>
        </div>

        <div class="option-box">
          <div class="option-image">
          <img src="../images/button-images/personnel/internal/9.png">
          </div>
          <a href="../personnel/personnel_internal9.php" class="option-button">Processing of Application for Leave</a>
        </div>
      </div>
    </div>
    
    <a href="../personnel/personnel.php" class="back-button">Go Back</a>
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