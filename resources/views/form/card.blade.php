<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Card Request Form</title>
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
        <h2>ACCESS CARD REQUEST FORM</h2>
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
                    <label><input type="checkbox" name="action_requested[]" value="create"> New Card</label>
                </div>
                <div class="col-md-3">
                    <label><input type="checkbox" name="action_requested[]" value="modify"> Replace Card</label>
                </div>
                <div class="col-md-3">
                    <label><input type="checkbox" name="action_requested[]" value="delete"> Modify Card</label>
                </div>
            </div>
            <label for="user-id" class="form-label">Card Number/ID:</label>
            <input style="width: 30%;" type="text" id="user-id" name="user_id" class="form-control"><br><br>

            <!-- Authorized Request -->
            <h3>Authorised Request</h3><br>
            <div class="row">
                <div class="col-md-4">
                    <label><input type="checkbox" name="access[]" value="Add Storage"> Add Storage</label><br><br>
                    <label><input type="checkbox" name="access[]" value="Group - Create Group"> Group - Create Group</label><br><br>
                    <label><input type="checkbox" name="access[]" value="Rename Account"> Rename Account</label><br><br>
                    <label><input type="checkbox" name="access[]" value="Deactivate Card"> Deactivate Card</label><br>
                </div>
                <div class="col-md-4">
                    <label style="margin-right:15px;"><input type="checkbox" name="access[]" value="Floor"> Floor</label>
                    <input style="width: 37%;" type="text" name="floor" class="form-control"><br><br>
                    <label><input type="checkbox" name="access[]" value="Building"> Building</label>
                    <input style="width: 37%;" type="text" name="building" class="form-control"><br><br>
                    <label style="margin-right:8px;"><input type="checkbox" name="access[]" value="Period"> Period</label>
                    <input style="width: 37%;" type="date" name="period" class="form-control">
                    <label for="to">to</label>
                    <input style="width: 37%;" type="date" name="period" class="form-control">                    
                </div>
                <div class="col-md-4">
                    <label><input type="checkbox" name="access[]" value="Elevator Only"> Elevator Only</label><br><br>
                    <label><input type="checkbox" name="access[]" value="All Building"> All Building</label><br><br>
                </div>
            </div>

            <p>Please choose a reason for deactivation:</p><br>
            <div class="row">
                <div class="col-md-3">
                    <label><input type="checkbox" name="reason[]" value="create"> Lost</label>
                </div>
                <div class="col-md-3">
                    <label><input type="checkbox" name="reason[]" value="modify"> Broken/Not Working</label>
                </div>
                <div class="col-md-3">
                    <label><input type="checkbox" name="reason[]" value="delete"> Employee Terminated</label>
                </div>
            </div><br>
            <p>The Front Office leader must be notified immediately if the Master/Access Card is lost or stolen or if the employee is no longer
                authorised for access to the rooms/ floor.</p><br><br>
            
           <!-- Approval Table -->
           <table class="table table-bordered">
               <thead>
                   <tr>
                       <th>Requested by</th>
                       <th>Approved by Front Office Leader</th>
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
           </table><br><br>

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

            // Update the "Requested by" section with name and date
            const requestedByInfo = document.getElementById("requested-by-info");
            requestedByInfo.innerHTML = `${name}<br> <span style="color: red;">${formattedDate}</span>`;

            // Trigger print
            window.print();
        }

    </script>
</body>
</html>
