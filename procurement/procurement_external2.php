<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROCUREMENT
    - EXTERNAL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            touch-action: none;
        }

        .navbar {
            background: linear-gradient(to right, #3004e4, rgb(107, 74, 255), #3004e4);
            background-size: 300% 100%;
            animation: gradientSlide 3s ease infinite;
            color: white;
            padding: 30px 35px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 25px;
            font-weight: bold;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        @keyframes gradientSlide {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .navbar button {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            padding: 10px 20px;
            font-size: 25px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar button:hover {
            background-color: white;
            color: #3004e4;
        }

        .logo-overlay {
            position: fixed;
            top: 150px;
            right: 35px;
            z-index: 999;
            pointer-events: none;
        }

        .logo-overlay img {
            height: 150px;
            opacity: 1;
        }

        .content {
            padding: 30px;
            position: relative;
            z-index: 1;
            margin-top: 10px;
            text-align: center;
            overflow: hidden;
        }
        
        .image-container {
            display: inline-block;
            overflow: auto;
            max-width: 100%;
            border: 5px solid white;
            box-shadow: 0 0 10px rgb(255, 255, 255);
            cursor: grab;
            touch-action: none;
        }
        
        .image-container.grabbing {
            cursor: grabbing;
        }
        
        /* Hide scrollbar for WebKit browsers */
        .image-container::-webkit-scrollbar {
            display: none; /* Hide scrollbar */
        }
        /* For Firefox */
        .image-container {
            scrollbar-width: none; /* Hide scrollbar for Firefox */
        }
        
        #zoomImage {
            max-width: none;
            width: 1800px;
            height: auto;
            transform-origin: 0 0;
            transition: transform 0.1s ease;
            user-select: none;
            -webkit-user-drag: none;
        }

        .zoom-controls {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            width: 300px;
        }

        .zoom-slider {
            width: 100%;
            height: 30px;
            margin: 15px 0;
            -webkit-appearance: none;
            appearance: none;
            background: #ddd;
            outline: none;
            border-radius: 15px;
        }

        .zoom-slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #3004e4;
            cursor: pointer;
            border: 3px solid white;
        }

        .zoom-slider::-moz-range-thumb {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #3004e4;
            cursor: pointer;
            border: 3px solid white;
        }

        .zoom-value {
            display: inline-block;
            width: 60px;
            text-align: center;
            font-weight: bold;
            font-size: 20px;
        }

        .zoom-label {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 20px;
            justify-content: center;
        }

        .zoom-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .zoom-buttons button {
            margin: 0 5px;
            padding: 12px 20px;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            background-color: #3004e4;
            color: white;
            flex-grow: 1;
            transition: background-color 0.3s;
        }

        .zoom-buttons button:hover {
            background-color: #1a02a0;
        }

        .zoom-buttons button:active {
            transform: scale(0.95);
        }

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

    <div class="navbar">
        <div>PROCUREMENT
        (External Services)</div>
        <button onclick="window.history.back()">Go Back</button>
    </div>

    <div class="logo-overlay">
        <img src="../logo.png" alt="MIAA Logo">
    </div>

    <div class="content">
        <div class="image-container" id="imageContainer">
            <img id="zoomImage" src="../images/table-images/procurement/2.png" alt="">
        </div>
    </div>

    <div class="zoom-controls">
        <div class="zoom-label">
            <span>Zoom:</span>
            <span id="zoomValue" class="zoom-value">100%</span>
        </div>
        <input type="range" min="25" max="200" value="100" class="zoom-slider" id="zoomSlider">
        <div class="zoom-buttons">
            <button onclick="zoomOut()">-</button>
            <button onclick="resetZoom()">Reset</button>
            <button onclick="zoomIn()">+</button>
        </div>
    </div>

    <div class="inactivity-warning" id="inactivityWarning">
        Returning to homepage in <span id="countdown">5</span> seconds...
    </div>

    <script>
    const zoomImage = document.getElementById('zoomImage');
    const imageContainer = document.getElementById('imageContainer');
    const zoomSlider = document.getElementById('zoomSlider');
    const zoomValue = document.getElementById('zoomValue');
    const inactivityWarning = document.getElementById('inactivityWarning');
    const countdownElement = document.getElementById('countdown');

    // Inactivity timer variables
    let inactivityTimer;
    let countdownTimer;
    const inactivityTimeout = 30000; // 30 seconds
    const countdownDuration = 5000; // 5 seconds warning

    // Zoom and pan variables - Set default zoom to 67%
    let currentZoom = 0.67;
    let posX = (imageContainer.clientWidth - zoomImage.width * currentZoom) / 2; // Start centered horizontally
    let posY = 0;
    let isDragging = false;
    let startX, startY;
    let initialDistance = 0;
    let touchStartZoom = 0.67;
    let touchStartPosX = 0;
    let touchStartPosY = 0;

    // Initialize transform
    updateTransform();
    resetInactivityTimer();

    // Set initial slider position and display
    zoomSlider.value = currentZoom * 100;
    zoomValue.textContent = `${zoomSlider.value}%`;

    // Set up event listeners for activity
    document.addEventListener('mousemove', resetInactivityTimer);
    document.addEventListener('keypress', resetInactivityTimer);
    document.addEventListener('touchstart', resetInactivityTimer);
    document.addEventListener('click', resetInactivityTimer);

    // Touch event handlers
    imageContainer.addEventListener('touchstart', handleTouchStart, { passive: false });
    imageContainer.addEventListener('touchmove', handleTouchMove, { passive: false });
    imageContainer.addEventListener('touchend', handleTouchEnd);

    // Mouse event handlers
    imageContainer.addEventListener('mousedown', handleMouseDown);
    imageContainer.addEventListener('mousemove', handleMouseMove);
    imageContainer.addEventListener('mouseup', handleMouseUp);
    imageContainer.addEventListener('mouseleave', handleMouseUp);

    // Update zoom level when slider changes
    zoomSlider.addEventListener('input', function() {
        const oldZoom = currentZoom;
        currentZoom = this.value / 100;
        
        // When zooming out, center horizontally but maintain vertical position
        if (currentZoom <= 1) {
            centerHorizontally();
        } else {
            // When zooming in, maintain the current view center
            const containerRect = imageContainer.getBoundingClientRect();
            const centerX = containerRect.width / 2;
            
            posX = centerX - (centerX - posX) * (currentZoom / oldZoom);
            // Vertical position remains unchanged
        }
        
        updateTransform();
        zoomValue.textContent = `${this.value}%`;
    });

    // Function to center horizontally only
    function centerHorizontally() {
        const containerRect = imageContainer.getBoundingClientRect();
        posX = (containerRect.width - zoomImage.width * currentZoom) / 2;
        // Vertical position (posY) remains unchanged
    }

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

    // Zoom functions
    function zoomIn() {
        const oldZoom = currentZoom;
        currentZoom = Math.min(2, currentZoom + 0.25);
        
        // When zooming in, maintain the current view center horizontally
        const containerRect = imageContainer.getBoundingClientRect();
        const centerX = containerRect.width / 2;
        
        posX = centerX - (centerX - posX) * (currentZoom / oldZoom);
        // Vertical position remains unchanged
        
        updateZoom();
    }

    function zoomOut() {
        const oldZoom = currentZoom;
        currentZoom = Math.max(0.25, currentZoom - 0.25);
        
        // When zooming out, center horizontally but maintain vertical position
        if (currentZoom <= 1) {
            centerHorizontally();
        } else {
            // If still zoomed in, maintain the current view center horizontally
            const containerRect = imageContainer.getBoundingClientRect();
            const centerX = containerRect.width / 2;
            
            posX = centerX - (centerX - posX) * (currentZoom / oldZoom);
            // Vertical position remains unchanged
        }
        
        updateZoom();
    }

    function resetZoom() {
        currentZoom = 0.67; // Reset to 67% instead of 100%
        centerHorizontally();
        posY = 0; // Reset vertical position to top
        updateZoom();
    }

    function updateZoom() {
        updateTransform();
        const zoomPercent = Math.round(currentZoom * 100);
        zoomSlider.value = zoomPercent;
        zoomValue.textContent = `${zoomPercent}%`;
    }

    function updateTransform() {
        zoomImage.style.transform = `translate(${posX}px, ${posY}px) scale(${currentZoom})`;
    }

    // Touch event handlers
    function handleTouchStart(e) {
        e.preventDefault();
        if (e.touches.length === 1) {
            isDragging = true;  
            startX = e.touches[0].clientX;
            startY = e.touches[0].clientY;
            imageContainer.classList.add('grabbing');
        } else if (e.touches.length === 2) {
            initialDistance = getDistanceBetweenTouches(e.touches);
            touchStartZoom = currentZoom;
            
            const containerRect = imageContainer.getBoundingClientRect();
            const touchCenterX = (e.touches[0].clientX + e.touches[1].clientX) / 2 - containerRect.left;
            const touchCenterY = (e.touches[0].clientY + e.touches[1].clientY) / 2 - containerRect.top;
            
            touchStartPosX = touchCenterX - posX;
            touchStartPosY = touchCenterY - posY;
        }
    }

    function handleTouchMove(e) {
        e.preventDefault();
        if (isDragging && e.touches.length === 1) {
            // Calculate movement delta
            const deltaX = e.touches[0].clientX - startX;
            const deltaY = e.touches[0].clientY - startY;
            
            // Update position based on delta
            posY += deltaY;
            
            // Only allow horizontal movement when zoomed in
            if (currentZoom > 1) {
                posX += deltaX;
            }
            
            // Update start position for next move
            startX = e.touches[0].clientX;
            startY = e.touches[0].clientY;
            
            updateTransform();
        } else if (e.touches.length === 2) {
            const newDistance = getDistanceBetweenTouches(e.touches);
            const zoomFactor = newDistance / initialDistance;
            const newZoom = touchStartZoom * zoomFactor;
            
            // Clamp zoom values
            currentZoom = Math.max(0.25, Math.min(2, newZoom));
            
            const containerRect = imageContainer.getBoundingClientRect();
            const touchCenterX = (e.touches[0].clientX + e.touches[1].clientX) / 2 - containerRect.left;
            const touchCenterY = (e.touches[0].clientY + e.touches[1].clientY) / 2 - containerRect.top;
            
            if (currentZoom <= 1) {
                // When zoomed out, center horizontally
                centerHorizontally();
            } else {
                // When zoomed in, zoom toward the touch center
                posX = touchCenterX - touchStartPosX * (currentZoom / touchStartZoom);
            }
            
            // Always allow vertical movement
            posY = touchCenterY - touchStartPosY * (currentZoom / touchStartZoom);
            
            updateTransform();
            
            // Update the zoom slider
            const zoomPercent = Math.round(currentZoom * 100);
            zoomSlider.value = zoomPercent;
            zoomValue.textContent = `${zoomPercent}%`;
        }
    }

    function handleTouchEnd() {
        isDragging = false;
        imageContainer.classList.remove('grabbing');
        
        // If zoomed out, ensure the image is horizontally centered
        if (currentZoom <= 1) {
            centerHorizontally();
            updateTransform();
        }
    }

    // Mouse event handlers
    function handleMouseDown(e) {
        e.preventDefault();
        isDragging = true;
        startX = e.clientX;
        startY = e.clientY;
        imageContainer.classList.add('grabbing');
    }

    function handleMouseMove(e) {
        if (!isDragging) return;
        e.preventDefault();
        
        // Calculate movement delta
        const deltaX = e.clientX - startX;
        const deltaY = e.clientY - startY;
        
        // Update position based on delta
        posY += deltaY;
        
        // Only allow horizontal movement when zoomed in
        if (currentZoom > 1) {
            posX += deltaX;
        }
        
        // Update start position for next move
        startX = e.clientX;
        startY = e.clientY;
        
        updateTransform();
    }

    function handleMouseUp() {
        isDragging = false;
        imageContainer.classList.remove('grabbing');
        
        // If zoomed out, ensure the image is horizontally centered
        if (currentZoom <= 1) {
            centerHorizontally();
            updateTransform();
        }
    }

    function getDistanceBetweenTouches(touches) {
        const dx = touches[0].clientX - touches[1].clientX;
        const dy = touches[0].clientY - touches[1].clientY;
        return Math.sqrt(dx * dx + dy * dy);
    }
</script>



</body>
</html>