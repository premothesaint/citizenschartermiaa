<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Services</title>
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

        /* Services styling */
        .services-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .service-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            width: 100%;
            max-width: 500px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }

        .department-header {
            background-color: #3004e4;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 15px;
            font-weight: bold;
            text-align: center;
            font-size: 1.2em;
        }

        .division-header {
            background-color: #4a2ce0;
            color: white;
            padding: 8px 12px;
            border-radius: 4px;
            margin: 15px 0 10px 0;
            font-weight: bold;
        }

        .service-type {
            font-weight: bold;
            margin: 15px 0 5px 0;
            color: #555;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
        }

        .service-item {
            padding: 8px 0;
            border-bottom: 1px dashed #eee;
            display: flex;
        }

        .service-number {
            font-weight: bold;
            margin-right: 10px;
            color: #3004e4;
            min-width: 25px;
        }

        .service-name {
            flex-grow: 1;
        }

        .service-name a {
            color: #0066cc;
            text-decoration: none;
            transition: all 0.3s ease;
            padding: 2px 4px;
            border-radius: 3px;
            position: relative;
        }

        .service-name a:hover {
            color: #004499;
            text-decoration: underline;
            background-color: #f0f6ff;
        }

        .service-name a:active {
            transform: scale(0.98);
        }

        .service-name a::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
        }

        /* Police division sub-header */
        .police-subheader {
            font-weight: bold;
            margin: 10px 0 5px 0;
            color: #333;
            font-size: 0.95em;
            padding-left: 10px;
            border-left: 3px solid #3004e4;
        }

        h1 {
            color: #3004e4;
            text-align: center;
            margin-bottom: 30px;
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
        }

        /* Modal styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2000;
            display: none;
        }

        .modal-content {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            max-width: 500px;
            width: 90%;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        .modal-title {
            color: #3004e4;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .modal-message {
            margin-bottom: 25px;
            font-size: 18px;
            line-height: 1.5;
        }

        .modal-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .modal-button {
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
        }

        .modal-button-confirm {
            background-color: #3004e4;
            color: white;
        }

        .modal-button-confirm:hover {
            background-color: #1a02a0;
        }

        .modal-button-cancel {
            background-color: #e0e0e0;
            color: #333;
        }

        .modal-button-cancel:hover {
            background-color: #c0c0c0;
        }

        @media (max-width: 768px) {
            .modal-content {
                padding: 20px;
            }
            
            .modal-title {
                font-size: 20px;
            }
            
            .modal-message {
                font-size: 16px;
            }
            
            .modal-buttons {
                flex-direction: column;
                gap: 10px;
            }
            
            .modal-button {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div>LIST OF SERVICES</div>
        <button onclick="window.location.href='../index.php'">Go Back</button>
    </div>

    <div class="logo-overlay">
        <img src="../logo.png" alt="MIAA Logo">
    </div>

    <div class="content-wrapper">
        <div class="content" id="zoomContent">
            <div class="services-container">
                <!-- LEGAL OFFICE -->
                <div class="service-card">
                    <div class="department-header">LEGAL OFFICE</div>
                    
                    <div class="service-type">External Services</div>
                    <div class="service-item">
                        <span class="service-number">1.</span>
                        <span class="service-name"><a href="../legal/legal_external.php">Contract Preparation Through Procurement Process</a></span>
                    </div>
                </div>
                
                <!-- FINANCE DEPARTMENT -->
                <div class="service-card">
                    <div class="department-header">FINANCE DEPARTMENT</div>
                    
                    <!-- ACCOUNTING DIVISION -->
                    <div class="division-header">ACCOUNTING DIVISION</div>
                    <div class="service-type">External Services</div>
                    <div class="service-item">
                        <span class="service-number">2.</span>
                        <span class="service-name"><a href="../accounting/accounting_external.php">Issuance of Account Clearance</a></span>
                    </div>
                    
                    <!-- BUDGET DIVISION -->
                    <div class="division-header">BUDGET DIVISION</div>
                    <div class="service-type">External Services</div>
                    <div class="service-item">
                        <span class="service-number">3.</span>
                        <span class="service-name"><a href="../abc_division/abc_division_external.php">Processing of Request for Payment for External Clients</a></span>
                    </div>
                    <div class="service-type">Internal Services</div>
                    <div class="service-item">
                        <span class="service-number">4.</span>
                        <span class="service-name"><a href="../abc_division/abc_division_internal.php">Processing of Request for Payment for Internal Clients</a></span>
                    </div>
                    
                    <!-- CASHIERING DIVISION -->
                    <div class="division-header">CASHIERING DIVISION</div>
                    <div class="service-type">External Services</div>
                    <div class="service-item">
                        <span class="service-number">5.</span>
                        <span class="service-name"><a href="../collection/collection_2.php">Over-the-Counter Payment</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">6.</span>
                        <span class="service-name"><a href="../collection/collection_3.php">Refund of Passenger Service Charge (PSC) – Individual transaction</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">7.</span>
                        <span class="service-name"><a href="../collection/collection_4.php">Refund of Passenger Service Charge (PSC) – Group or Corporate transaction</a></span>
                    </div>
                    
                    <!-- COLLECTION DIVISION -->
                    <div class="division-header">COLLECTION DIVISION</div>
                    <div class="service-type">External Services</div>
                    <div class="service-item">
                        <span class="service-number">8.</span>
                        <span class="service-name"><a href="../collection/collection_1.php">Issuance of MIAA Exemption Certificate (MEC) to Locally Recognized Exempted Passengers</a></span>
                    </div>
                </div>
                
                <!-- ADMINISTRATIVE DEPARTMENT -->
                <div class="service-card">
                    <div class="department-header">ADMINISTRATIVE DEPARTMENT</div>
                    
                    <!-- PERSONNEL DIVISION -->
                    <div class="division-header">PERSONNEL DIVISION</div>
                    <div class="service-type">External Services</div>
                    <div class="service-item">
                        <span class="service-number">9.</span>
                        <span class="service-name"><a href="../personnel/personnel_external.php">Hiring of Outsourced Employees</a></span>
                    </div>
                    <div class="service-type">Internal Services</div>
                    <div class="service-item">
                        <span class="service-number">10.</span>
                        <span class="service-name"><a href="../personnel/personnel_internal1.php">Processing of Payroll of Employees</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">11.</span>
                        <span class="service-name"><a href="../personnel/personnel_internal2.php">Overtime Pay and Night Differential Pay</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">12.</span>
                        <span class="service-name"><a href="../personnel/personnel_internal3.php">First Salary of Newly Hired Employees</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">13.</span>
                        <span class="service-name"><a href="../personnel/personnel_internal4.php">MIAA Separation Claims</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">14.</span>
                        <span class="service-name"><a href="../personnel/personnel_internal5.php">Special Payroll (PBB, CAN, MID-YEAR BONUS, YEAR-END BONUS and Other Benefits)</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">15.</span>
                        <span class="service-name"><a href="../personnel/personnel_internal6.php">Travel Authority (Personal Travel)</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">16.</span>
                        <span class="service-name"><a href="../personnel/personnel_internal7.php">Leave of Absence Without Pay (LWOP) Certificate</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">17.</span>
                        <span class="service-name"><a href="../personnel/personnel_internal8.php">Monetization of Leave Credits (MOLC)</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">18.</span>
                        <span class="service-name"><a href="../personnel/personnel_internal9.php">Processing of Application for Leave</a></span>
                    </div>
                    
                    <!-- PROCUREMENT DIVISION -->
                    <div class="division-header">PROCUREMENT DIVISION</div>
                    <div class="service-type">External Services</div>
                    <div class="service-item">
                        <span class="service-number">19.</span>
                        <span class="service-name"><a href="../procurement/procurement_external1.php">Procurement of Goods and Services</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">20.</span>
                        <span class="service-name"><a href="../procurement/procurement_external2.php">Accreditation of Suppliers/Contractors</a></span>
                    </div>
                    
                    <!-- GENERAL SERVICES DIVISION -->
                    <div class="division-header">GENERAL SERVICES DIVISION</div>
                    <div class="service-type">External Services</div>
                    <div class="service-item">
                        <span class="service-number">21.</span>
                        <span class="service-name"><a href="../gsd/gsd_external.php">Preparation of Request for Payment for Service Rendered by Service Provider/Contractor</a></span>
                    </div>
                    <div class="service-type">Internal Services</div>
                    <div class="service-item">
                        <span class="service-number">22.</span>
                        <span class="service-name"><a href="../gsd/gsd_internal1.php">Reproduction of Documents</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">23.</span>
                        <span class="service-name"><a href="../gsd/gsd_internal2.php">Dissemination of Office Order, Memorandum Circular and other Memoranda</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">24.</span>
                        <span class="service-name"><a href="../gsd/gsd_internal3.php">Transfer of Records</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">25.</span>
                        <span class="service-name"><a href="../gsd/gsd_internal4.php">Delivery of Mailing Letters/Documents</a></span>
                    </div>
                    
                    <!-- HUMAN RESOURCE DEVELOPMENT DIVISION -->
                    <div class="division-header">HUMAN RESOURCE DEVELOPMENT DIVISION</div>
                    <div class="service-type">External Services</div>
                    <div class="service-item">
                        <span class="service-number">26.</span>
                        <span class="service-name"><a href="../hrdd/hrdd_1.php">Data Gathering of School Requirement</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">27.</span>
                        <span class="service-name"><a href="../hrdd/hrdd_2.php">School Accreditation for MIAA OJT Program</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">28.</span>
                        <span class="service-name"><a href="../hrdd/hrdd_3.php">Student On-the-Job Training</a></span>
                    </div>
                </div>
                
                <!-- AIRPORT POLICE DEPARTMENT -->
                <div class="service-card">
                    <div class="department-header">AIRPORT POLICE DEPARTMENT</div>
                    
                    <!-- SURVEILLANCE OPERATIONS DIVISION -->
                    <div class="division-header">SURVEILLANCE OPERATIONS DIVISION</div>
                    <div class="service-type">External Services</div>
                    <div class="service-item">
                        <span class="service-number">29.</span>
                        <span class="service-name"><a href="../sod/sod_1.php">Approval for CCTV Viewing Request</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">30.</span>
                        <span class="service-name"><a href="../sod/sod_2.php">Approval of Captured Video Footage (CVF) Copy Request</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">31.</span>
                        <span class="service-name"><a href="../sod/sod_3.php">Approval of Captured Video Footage (CVF) Copy Request for Complex Cases</a></span>
                    </div>
                    
                    <!-- TERMINAL POLICE DIVISION -->
                    <div class="division-header">TERMINAL POLICE DIVISION</div>
                    <div class="service-type">External Services</div>
                    <div class="service-item">
                        <span class="service-number">32.</span>
                        <span class="service-name"><a href="../talpi/talpi_external.php">Handling of Complaints and Filing of Criminal Charges</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">33.</span>
                        <span class="service-name"><a href="../tpi/tpi_external.php">Handling of Complaints for Administrative Charges</a></span>
                    </div>
                    
                    <!-- AIRSIDE POLICE DIVISION -->
                    <div class="division-header">AIRSIDE POLICE DIVISION</div>
                    <div class="service-type">External Services</div>
                    <div class="service-item">
                        <span class="service-number">34.</span>
                        <span class="service-name"><a href="../talpi/talpi_external.php">Handling of Complaints and Filing of Criminal Charges</a></span>
                    </div>
                    
                    <!-- LANDSIDE POLICE DIVISION -->
                    <div class="division-header">LANDSIDE POLICE DIVISION</div>
                    <div class="service-type">External Services</div>
                    <div class="service-item">
                        <span class="service-number">35.</span>
                        <span class="service-name"><a href="../talpi/talpi_external.php">Handling of Complaints and Filing of Criminal Charges</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">36.</span>
                        <span class="service-name"><a href="../landslide/landslide_external.php">Request for Issuance of Police Report (Road Crash Investigation Report)</a></span>
                    </div>
                    
                    <!-- POLICE INTELLIGENCE AND INVESTIGATION DIVISION -->
                    <div class="division-header">POLICE INTELLIGENCE AND INVESTIGATION DIVISION</div>
                    <div class="service-type">External Services</div>
                    <div class="service-item">
                        <span class="service-number">37.</span>
                        <span class="service-name"><a href="../talpi/talpi_external.php">Handling of Complaints and Filing of Criminal Charges</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">38.</span>
                        <span class="service-name"><a href="../tpi/tpi_external.php">Handling of Complaints for Administrative Charges</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">39.</span>
                        <span class="service-name"><a href="../piid/piid_1.php">Issuance of Certificate of Detention</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">40.</span>
                        <span class="service-name"><a href="../piid/piid_2.php">Issuance of Incident Certificate</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">41.</span>
                        <span class="service-name"><a href="../piid/piid_3.php">Request for Issuance of Police Report</a></span>
                    </div>
                </div>
                
                <!-- CORPORATE MANAGEMENT SERVICES DEPARTMENT -->
                <div class="service-card">
                    <div class="department-header">CORPORATE MANAGEMENT SERVICES DEPARTMENT</div>
                    
                    <!-- SYSTEMS AND PROCEDURES IMPROVEMENT DIVISION -->
                    <div class="division-header">SYSTEMS AND PROCEDURES IMPROVEMENT DIVISION</div>
                    <div class="service-type">Internal Services</div>
                    <div class="service-item">
                        <span class="service-number">42.</span>
                        <span class="service-name"><a href="../spid/spid_1.php">Conduct of Survey or Study Assistance</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">43.</span>
                        <span class="service-name"><a href="../spid/spid_2.php">Facilitation for Memorandum Circular Constitution and Revision</a></span>
                    </div>
                </div>
                
                <!-- BUSINESS DEV'T. & CONCESSIONS MGMT. DEPARTMENT -->
                <div class="service-card">
                    <div class="department-header">BUSINESS DEV'T. & CONCESSIONS MGMT. DEPARTMENT</div>
                    
                    <!-- BUSINESS AND REAL ESTATE INVESTMENT DEVELOPMENT DIVISION -->
                    <div class="division-header">BUSINESS AND REAL ESTATE INVESTMENT DEVELOPMENT DIVISION</div>
                    <div class="service-type">External Services</div>
                    <div class="service-item">
                        <span class="service-number">44.</span>
                        <span class="service-name"><a href="../bridd/bridd_1.php">Issuance of Notice of Conditional Award (NOCA)/Notice of Award (NOA)</a></span>
                    </div>
                    <div class="service-item">
                        <span class="service-number">45.</span>
                        <span class="service-name"><a href="../bridd/bridd_2.php">Issuance of Lease and Concessions Contract</a></span>
                    </div>
                </div>
            </div>
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

    <!-- Confirmation Modal -->
    <div class="modal-overlay" id="confirmationModal">
        <div class="modal-content">
            <div class="modal-title">Confirm Navigation</div>
            <div class="modal-message" id="modalMessage">Are you sure you want to proceed to this service?</div>
            <div class="modal-buttons">
                <button class="modal-button modal-button-confirm" id="confirmButton">Proceed</button>
                <button class="modal-button modal-button-cancel" id="cancelButton">Cancel</button>
            </div>
        </div>
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

        // Confirmation modal functionality
        const confirmationModal = document.getElementById('confirmationModal');
        const modalMessage = document.getElementById('modalMessage');
        const cancelButton = document.getElementById('cancelButton');
        const confirmButton = document.getElementById('confirmButton');
        
        let targetUrl = '';
        
        // Add click event listeners to all service links
        document.querySelectorAll('.service-name a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                targetUrl = this.href;
                
                // Update modal message with the service name
                const serviceName = this.textContent.trim();
                modalMessage.textContent = `Are you sure you want to proceed to: "${serviceName}"?`;
                
                // Show the modal
                confirmationModal.style.display = 'flex';
            });
        });
        
        // Modal button handlers
        cancelButton.addEventListener('click', function() {
            confirmationModal.style.display = 'none';
            targetUrl = '';
        });
        
        confirmButton.addEventListener('click', function() {
            confirmationModal.style.display = 'none';
            if (targetUrl) {
                window.location.href = targetUrl;
            }
        });
        
        // Close modal when clicking outside the content
        confirmationModal.addEventListener('click', function(e) {
            if (e.target === confirmationModal) {
                confirmationModal.style.display = 'none';
                targetUrl = '';
            }
        });

        // Close modal when page loads (in case user navigates back)
        window.addEventListener('DOMContentLoaded', function() {
            confirmationModal.style.display = 'none';
            targetUrl = '';
        });

        // Also close modal when page is shown (for back/forward cache)
        window.addEventListener('pageshow', function() {
            confirmationModal.style.display = 'none';
            targetUrl = '';
        });
    </script>
</body>
</html>