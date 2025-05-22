<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Offices</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background-color: #f5f5f5;
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
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
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

        .content-wrapper {
            width: 100%;
            overflow: auto;
            padding: 30px 0;
        }

        .content {
            padding: 30px;
            position: relative;
            z-index: 1;
            margin-top: 10px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            transform-origin: top center;
            transition: transform 0.3s ease;
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

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3004e4;
            color: white;
            position: sticky;
            top: 120px;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        /* Zoom Controls */
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

        @media (max-width: 768px) {
            .navbar {
                padding: 20px;
                font-size: 20px;
            }
            
            .navbar button {
                padding: 8px 15px;
                font-size: 18px;
            }
            
            .logo-overlay {
                top: 120px;
                right: 20px;
            }
            
            .logo-overlay img {
                height: 100px;
            }
            
            .content {
                padding: 20px;
            }
            
            .zoom-controls {
                width: 250px;
                padding: 15px;
                bottom: 20px;
                right: 20px;
            }
            
            .zoom-slider {
                margin: 10px 0;
            }
            
            .zoom-buttons button {
                padding: 10px 15px;
                font-size: 18px;
            }

            th, td {
                padding: 10px;
                font-size: 14px;
            }

            th {
                top: 100px;
            }
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div>LIST OF OFFICES</div>
        <button onclick="window.location.href='../index.php'">Go Back</button>
    </div>

    <div class="logo-overlay">
        <img src="../logo.png" alt="MIAA Logo">
    </div>

    <div class="content-wrapper">
        <div class="content" id="zoomContent">
            <table>
                <thead>
                    <tr>
                        <th>OFFICE</th>
                        <th>ADDRESS</th>
                        <th>CONTACT INFORMATION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Office of the General Manager</td>
                        <td>4th Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 2336 / 716</td>
                    </tr>
                    <tr>
                        <td>Office of the Senior Assistant General Manager</td>
                        <td>3rd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 3112 / 3113</td>
                    </tr>
                    <tr>
                        <td>Office of the AGM for Finance and Administration</td>
                        <td>Ground Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 4305</td>
                    </tr>
                    <tr>
                        <td>Office of the AGM for Operations and Safety Standards Compliance</td>
                        <td>2nd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 3735</td>
                    </tr>
                    <tr>
                        <td>Office of the AGM for Airport Development & Corporate Affairs</td>
                        <td>3rd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 4269</td>
                    </tr>
                    <tr>
                        <td>Office of the AGM for Engineering</td>
                        <td>3rd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 3042</td>
                    </tr>
                    <tr>
                        <td>Office of the AGM for Security and Emergency Services</td>
                        <td>Ground Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 3054</td>
                    </tr>
                    <tr>
                        <td>Internal Audit Services Office</td>
                        <td>3rd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 734</td>
                    </tr>
                    <tr>
                        <td>Public Affairs and Protocol Office</td>
                        <td>Ground Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 877-1109 local 748 / 3586</td>
                    </tr>
                    <tr>
                        <td>Legal Office</td>
                        <td>3rd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 877-1109 local 738</td>
                    </tr>
                    <tr>
                        <td>Finance Department</td>
                        <td>Ground Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 743</td>
                    </tr>
                    <tr>
                        <td>Administrative Department</td>
                        <td>2nd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 3186</td>
                    </tr>
                    <tr>
                        <td>Business Development & Concessions Management Department</td>
                        <td>2nd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 3709</td>
                    </tr>
                    <tr>
                        <td>Intelligence and ID Pass Control Department</td>
                        <td>5th Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 4257</td>
                    </tr>
                    <tr>
                        <td>Airport Police Department</td>
                        <td>Ground Floor, APD Headquarters, Chapel Road, Pasay City</td>
                        <td>(02) 8877-1109 local 4230</td>
                    </tr>
                    <tr>
                        <td>Airport Security Inspectorate Office</td>
                        <td>4th Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 3056</td>
                    </tr>
                    <tr>
                        <td>Civil Works Department</td>
                        <td>3rd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 3042</td>
                    </tr>
                    <tr>
                        <td>Screening and Surveillance Department</td>
                        <td>2nd Floor, APD Headquarters, Chapel Road, Pasay City</td>
                        <td>(02) 8877-1109 local 3050</td>
                    </tr>
                    <tr>
                        <td>Office of the Corporate Board Secretary</td>
                        <td>4th Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 3716</td>
                    </tr>
                    <tr>
                        <td>Business and Real Estate Investment Development Division</td>
                        <td>2nd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 759</td>
                    </tr>
                    <tr>
                        <td>Concessions Management Division</td>
                        <td>2nd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 758</td>
                    </tr>
                    <tr>
                        <td>Accounting Division</td>
                        <td>Ground Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 3180</td>
                    </tr>
                    <tr>
                        <td>Budget Division</td>
                        <td>Ground Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 745</td>
                    </tr>
                    <tr>
                        <td>Cashiering Division</td>
                        <td>Ground Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 747</td>
                    </tr>
                    <tr>
                        <td>Collection Division</td>
                        <td>Ground Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 748</td>
                    </tr>
                    <tr>
                        <td>Personnel Division</td>
                        <td>2nd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 753</td>
                    </tr>
                    <tr>
                        <td>Human Resource Development Division</td>
                        <td>2nd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 2523</td>
                    </tr>
                    <tr>
                        <td>Procurement Division</td>
                        <td>2nd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 4300</td>
                    </tr>
                    <tr>
                        <td>Property Management Division</td>
                        <td>MIAA Warehouse, MIAA Admin Compound, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 4094</td>
                    </tr>
                    <tr>
                        <td>General Services Division</td>
                        <td>2nd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 3009</td>
                    </tr>
                    <tr>
                        <td>Airport Terminal Compliance Monitoring Division</td>
                        <td>2nd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 877-1109 local 3735 / 4217</td>
                    </tr>
                    <tr>
                        <td>Airport Grounds Operations Compliance Monitoring Division</td>
                        <td>2nd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 877-1109 local 3735 / 4217</td>
                    </tr>
                    <tr>
                        <td>Plans and Programs Division</td>
                        <td>3rd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 4089</td>
                    </tr>
                    <tr>
                        <td>Systems and Procedures Improvement Division</td>
                        <td>3rd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 736</td>
                    </tr>
                    <tr>
                        <td>Management Information Systems Division</td>
                        <td>3rd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 4105</td>
                    </tr>
                    <tr>
                        <td>Mechanical Division</td>
                        <td>MIAA Admin Compound, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 782</td>
                    </tr>
                    <tr>
                        <td>Electrical Division</td>
                        <td>MIAA Admin Compound, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 431</td>
                    </tr>
                    <tr>
                        <td>Electronics & Communication Division</td>
                        <td>MIAA Admin Compound, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 3999</td>
                    </tr>
                    <tr>
                        <td>Pavements & Grounds Division</td>
                        <td>MIAA Admin Compound, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 783</td>
                    </tr>
                    <tr>
                        <td>Buildings Division</td>
                        <td>MIAA Admin Compound, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 778</td>
                    </tr>
                    <tr>
                        <td>Design & Planning Division</td>
                        <td>3rd Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 3991</td>
                    </tr>
                    <tr>
                        <td>Public Assistance Division</td>
                        <td>Ground Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 4219</td>
                    </tr>
                    <tr>
                        <td>Intelligence and Investigation Division</td>
                        <td>5th Floor, MIAA Administration Building, MIA Road, Pasay City</td>
                        <td>(02) 8877-1109 local 4257</td>
                    </tr>
                    <tr>
                        <td>Medical Division</td>
                        <td>Ground Floor, APD Headquarters, Chapel Road, Pasay City</td>
                        <td>(02) 8877-1109 local 794</td>
                    </tr>
                    <tr>
                        <td>Airside Police Division</td>
                        <td>2nd Floor, APD Headquarters, Chapel Road, Pasay City</td>
                        <td>(02) 8877-1109 local 3911</td>
                    </tr>
                    <tr>
                        <td>Terminal Police Division</td>
                        <td>2nd Floor, APD Headquarters, Chapel Road, Pasay City</td>
                        <td>(02) 8877-1109 local 3045</td>
                    </tr>
                    <tr>
                        <td>Landside Police Division</td>
                        <td>Ground Floor, APD Headquarters, Chapel Road, Pasay City</td>
                        <td>(02) 8877-1109 local 791 / 4288</td>
                    </tr>
                    <tr>
                        <td>Police Intelligence and Investigation Division</td>
                        <td>Ground Floor, APD Headquarters, Chapel Road, Pasay City</td>
                        <td>(02) 8877-1109 local 3653</td>
                    </tr>
                    <tr>
                        <td>Police Detection and Reaction Division</td>
                        <td>APD Headquarters, Chapel Road, Pasay City</td>
                        <td>(02) 8877-1109 local 4222</td>
                    </tr>
                    <tr>
                        <td>Screening Division</td>
                        <td>2nd Floor, APD Headquarters, Chapel Road, Pasay City</td>
                        <td>(02) 8877-1109 local 3051</td>
                    </tr>
                    <tr>
                        <td>Surveillance Division</td>
                        <td>2nd Floor, APD Headquarters, Chapel Road, Pasay City</td>
                        <td>(02) 8877-1109 local 3051</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Zoom Controls -->
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
        const inactivityWarning = document.getElementById('inactivityWarning');
        const countdownElement = document.getElementById('countdown');
        const zoomContent = document.getElementById('zoomContent');
        const zoomSlider = document.getElementById('zoomSlider');
        const zoomValue = document.getElementById('zoomValue');
        const contentWrapper = document.querySelector('.content-wrapper');

        // Current zoom level
        let currentZoom = 100;

        // Set up zoom slider event listener
        zoomSlider.addEventListener('input', function() {
            currentZoom = parseInt(this.value);
            updateZoom();
        });

        // Zoom functions
        function zoomIn() {
            currentZoom = Math.min(currentZoom + 10, 200);
            updateZoom();
            zoomSlider.value = currentZoom;
        }

        function zoomOut() {
            currentZoom = Math.max(currentZoom - 10, 25);
            updateZoom();
            zoomSlider.value = currentZoom;
        }

        function resetZoom() {
            currentZoom = 100;
            updateZoom();
            zoomSlider.value = currentZoom;
        }

        function updateZoom() {
            const scale = currentZoom / 100;
            zoomContent.style.transform = `scale(${scale})`;
            zoomValue.textContent = `${currentZoom}%`;
            
            // Adjust the wrapper width to allow scrolling when zoomed in
            if (currentZoom > 100) {
                const originalWidth = 1200; // matches max-width in .content
                const scaledWidth = originalWidth * scale;
                contentWrapper.style.width = `${scaledWidth}px`;
                contentWrapper.style.margin = '0 auto';
            } else {
                contentWrapper.style.width = '100%';
                contentWrapper.style.margin = '0';
            }
        }

        // Inactivity timer variables
        let inactivityTimer;
        let countdownTimer;
        const inactivityTimeout = 30000; // 30 seconds
        const countdownDuration = 5000; // 5 seconds warning

        // Initialize timer
        resetInactivityTimer();

        // Set up event listeners for activity
        document.addEventListener('mousemove', resetInactivityTimer);
        document.addEventListener('keypress', resetInactivityTimer);
        document.addEventListener('touchstart', resetInactivityTimer);
        document.addEventListener('click', resetInactivityTimer);

        // Inactivity timer functions
        function resetInactivityTimer() {
            // Reset the warning if it's showing
            if (inactivityWarning.style.display === 'block') {
                clearTimeout(countdownTimer);
                inactivityWarning.style.display = 'none';
            }
            
            // Clear existing timer
            clearTimeout(inactivityTimer);
            
            // Set new timer
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
    </script>

</body>
</html>