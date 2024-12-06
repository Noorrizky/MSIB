<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Domain Request Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 5px;
            font-size: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .container {
            width: 210mm;
            max-width: 210mm;
            height: auto;
            padding: 10mm;
            margin: auto;
            overflow: hidden;
            /* border: 2px solid black; */
        }

        h1, h2, h3 {
            text-align: center;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .col-md-6 {
            width: 48%;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            table-layout: fixed;;
        }

        .table th, .table td {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
            font-size: 10px;
            width: 20%;            /* Setiap kolom mendapat lebar yang sama */
            word-wrap: break-word; /* Memastikan teks tidak meluap dan terputus jika panjang */
        }

        .btn {   
            padding: 10px 20px;
            font-size: 14px;
            cursor: pointer;
            background-color: #2487ce;
            color: white;
            border: none;
            border-radius: 30px;
            text-decoration: none;
        }

        .footer-container {
            display: flex;
            justify-content: space-between; /* Space between the two columns */
            gap: 20px; /* Gap between the two columns */
            margin: 20px 0;
            font-size: 11px;
            font-family: Arial, sans-serif;
        }

        .footer-container .column {
            width: 48%; /* Make both columns take up equal space */
        }

        .footer-container ul {
            list-style-type: disc; /* Bullets */
            padding-left: 20px; /* Indentation for bullets */
        }

        .footer-container ul li {
            text-align: left; /* Align text to the left */
        }

    </style>
    
</head>
<body>
    <div class="container">
        <p>[The Alana Yogyakarta] IT-SAA-[Rev1]</p>
        <p style="color: red;"><i>Training MUST be completed prior to submitting this form</i></p><br>
        <h1>SYSTEM ACCESS AUTHORIZATION</h1>
        <h2>USER DOMAIN REQUEST FORM</h2>
        <hr><br>

        <!-- Form Start -->
        <form action="process_form.php" method="POST">
            <!-- General Information -->
            <h3>General Information</h3><br>
            <div class="row">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="date-request" class="form-label">Date Request:</label>
                    <input type="date" id="date-request" name="date_request" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="position" class="form-label">Position:</label>
                    <input type="text" id="position" name="position" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="department" class="form-label">Department:</label>
                    <select id="department" name="department" class="form-control" required>
                        <option value="">Select</option>
                        <option value="Front Office">Front Office</option>
                        <option value="A&G">A&G</option>
                        <option value="FB Product">FB Product</option>
                        <option value="FB Service">FB Service</option>
                        <option value="House Keeping">House Keeping</option>
                        <option value="HR & Security">HR & Security</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Finance & Accounting">Finance & Accounting</option>
                        <option value="Sales & Marketing">Sales & Marketing</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="mobile-phone" class="form-label">Mobile Phone:</label>
                    <input type="tel" id="mobile-phone" name="mobile_phone" class="form-control" required>
                </div>
            </div>
            <hr><br>

            <!-- Action Requested -->
            <h3>Action Requested</h3><br>
            <div class="row">
                <div class="col-md-3">
                    <label><input type="checkbox" name="action_requested[]" value="create"> Create Account</label>
                </div>
                <div class="col-md-3">
                    <label><input type="checkbox" name="action_requested[]" value="modify"> Modify Account</label>
                </div>
                <div class="col-md-3">
                    <label><input type="checkbox" name="action_requested[]" value="delete"> Delete Account</label>
                </div>
            </div>
            <label for="user-id" class="form-label">Domain Logon Name:</label>
            <input style="width: 30%;" type="text" id="user-id" name="user_id" class="form-control"><br><br>
            <h4 class="mt-1">Password: (will send to staff)</h4>

            <!-- Access Modification -->
            <h3>Access Modification</h3>
            <div class="row">
                <div class="col-md-4">
                    <label><input type="checkbox" name="access[]" value="Rename Account"> Rename Account</label><br>
                </div>
                <div class="col-md-4">
                    <label><input type="checkbox" name="access[]" value="Reset Password"> Reset Password</label><br>
                </div>
                <div class="col-md-4">
                    <label><input type="checkbox" name="access[]" value="Rename Display Name"> Rename Display Name</label>
                </div>
            </div>
            <label for="reason" class="form-label">State the reason why you need to do this:</label>
            <textarea name="reason" rows="2" class="form-control"></textarea>
            <br>

           <!-- Approval Table -->
           <table class="table table-bordered">
               <thead>
                   <tr>
                       <th>Requested by</th>
                       <th>Approved by Dept. Head</th>
                       <th>Approved by Hotel/General Manager</th>
                       <th>Verified by IT</th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td>
                           <!-- Placeholder for Dynamic Name and Date -->
                           <div style="margin-top: 80px;" id="requested-by-info" class="dynamic-text"></div>
                       </td>
                       <td><br><br><br><br><br><br><br><br></td>
                       <td><br><br><br><br><br><br><br><br></td>
                       <td><br><br><br><br><br><br><br><br></td>
                   </tr>
               </tbody>
           </table>

            <!-- Footer -->
            <div class="footer-container">
                <div class="column">
                    <ul>
                        <li>Should be using our Google Apps Webmail from our official domain name, not Outlook or anything else. At no point are Gmail, Yahoo, Hotmail, or any other personal email services allowed for business use.</li>
                        <li>Check your email quota every month and delete emails if they are over 90%.</li>
                        <li>Recognize suspicious email attachments and not open files from people you don’t know.</li>
                        <li>All users should be running as "Standard User" – this means you cannot install anything without IT approval.</li>
                        <li>Should be using Google Chrome as your default browser.</li>
                        <li>Illegal software is not allowed.</li>
                    </ul>
                </div>
                <div class="column">
                    <ul>
                        <li>Lock your computer (Windows Key + L) or log off when leaving your computer.</li>
                        <li>Turn off your monitor when leaving your desk and turn off your computer at the end of the day.</li>
                        <li>You are financially responsible for any damage you do to your computer, such as spilling a drink.</li>
                        <li>Not store sensitive information on your computer, like credit card information.</li>
                        <li>If accessing sensitive data through your email, then you should use HTTPS.</li>
                        <li>Storing music, movies, games, personal photos, and the like are not allowed on work-related computers.</li>
                    </ul>
                </div>
            </div>
            <p style="font-size: 11px; text-align: right;"><i>
                Helpdesk Ticket number:<br>
                <span id="helpdesk-ticket-number"></span> <!-- Placeholder for Helpdesk Ticket Number -->
            </i></p>

            <!-- Print -->
             <div style="display: flex; justify-content: center; align-items: center;">
                <button type="button" onclick="preparePrint()" class="btn">Print</button>
            </div>             
        </form>
    </div>

    <script>
        function preparePrint() {
            // Get the name from the input field
            const name = document.getElementById("name").value;

            // Get the current date in DD/MM/YYYY format
            const currentDate = new Date();
            const formattedDate =
                ("0" + currentDate.getDate()).slice(-2) + "/" +
                ("0" + (currentDate.getMonth() + 1)).slice(-2) + "/" +
                currentDate.getFullYear(); // Full year format (2024)

             // Generate Helpdesk Ticket Number in the format HTNxxxxx
            const ticketNumber = 'HTN' + Math.floor(Math.random() * 100000);  // 5 digit random number

            // Update the "Requested by" section with name and date
            const requestedByInfo = document.getElementById("requested-by-info");
            requestedByInfo.innerHTML = `${name}<br> <span style="color: red;">${formattedDate}</span>`;
    

            // Update the Helpdesk Ticket Number in the footer
            const ticketNumberElement = document.getElementById("helpdesk-ticket-number");
            ticketNumberElement.innerHTML = ticketNumber;

            // Trigger print
            window.print();
        }

    </script>
</body>
</html>
