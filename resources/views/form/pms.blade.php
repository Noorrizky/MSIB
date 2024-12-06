<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMS Request Form</title>
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

        .footer {
            margin-top: 15px;
            font-size: 9px;
            text-align: justify;
        }

    </style>
    
</head>
<body>
    <div class="container">
        <p>[The Alana Yogyakarta] IT-SAA-[Rev1]</p>
        <p style="color: red;"><i>Training MUST be completed prior to submitting this form</i></p><br>
        <h1>SYSTEM ACCESS AUTHORIZATION</h1>
        <h2>PMS REQUEST FORM</h2>
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
                    <label><input type="checkbox" name="action_requested[]" value="suspend"> Suspend Account</label>
                </div>
                <div class="col-md-3">
                    <label><input type="checkbox" name="action_requested[]" value="delete"> Delete Account</label>
                </div>
            </div>
            <label for="user-id" class="form-label">PMS User ID:</label>
            <input style="width: 30%;" type="text" id="user-id" name="user_id" class="form-control"><br><br>
            <h4 class="mt-1">Password: (will send to staff directly)</h4>
            <br>

            <!-- Access Modification -->
            <h3>Access Modification</h3>
            <div class="row">
                <div class="col-md-4">
                    <label><input type="checkbox" name="access[]" value="Front Office"> Front Office</label><br>
                    <label><input type="checkbox" name="access[]" value="F/O Cashier"> F/O Cashier</label><br>
                    <label><input type="checkbox" name="access[]" value="Housekeeping"> Housekeeping</label><br>
                    <label><input type="checkbox" name="access[]" value="Income Audit"> Income Audit</label><br>
                    <label><input type="checkbox" name="access[]" value="Operator"> Operator</label><br>
                </div>
                <div class="col-md-4">
                    <label><input type="checkbox" name="access[]" value="Sales Marketing"> Sales Marketing</label><br>
                    <label><input type="checkbox" name="access[]" value="Night Audit"> Night Audit</label><br>
                    <label><input type="checkbox" name="access[]" value="Account Receivable"> Account Receivable</label><br>
                    <label><input type="checkbox" name="access[]" value="POS"> POS</label><br>
                    <label><input type="checkbox" name="access[]" value="Purchasing"> Purchasing</label><br>
                </div>
                <div class="col-md-4">
                    <label><input type="checkbox" name="access[]" value="General Cashier"> General Cashier</label><br>
                    <label><input type="checkbox" name="access[]" value="Inventory/Cost Control"> Inventory/Cost Control</label><br>
                    <label><input type="checkbox" name="access[]" value="General Ledger"> General Ledger</label><br>
                    <label><input type="checkbox" name="access[]" value="Banquet"> Banquet</label><br>
                </div>
                <!-- Additional Access Items -->
            </div>
            <label><input type="checkbox" name="access[]" value="Others"> Others (Please write 3 digit access code needed):</label>
            <input style="width: 15%;" type="text" name="others" class="form-control"><br><br>
            <label for="reason" class="form-label">State the reason why you need this access:</label>
            <textarea name="reason" rows="2" class="form-control"></textarea>
            <br><br>

           <!-- Approval Table -->
           <table class="table table-bordered">
               <thead>
                   <tr>
                       <th>Requested by</th>
                       <th>Approved by Dept. Head</th>
                       <th>Approved by Finance Leader</th>
                       <th>Approved by Hotel/General Manager</th>
                       <th>Verified and Created by IT</th>
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
                       <td><br><br><br><br><br><br><br><br></td>
                   </tr>
               </tbody>
           </table>

            <!-- Footer -->
            <div class="footer text-muted">
                <p style="font-size: 11px;"><i>
                    Please keep this information confidential. Always use a strong password (min. 8 characters and alphanumeric combination with some uppercase). Change your password every 6 months. If you have any questions, please do not hesitate to contact IT.
                </i></p><br>
                <p style="font-size: 11px; text-align: right;"><i>
                    Date & time created on PMS:<br>
                    <span id="date-time-created"></span> <!-- Placeholder for Date and Time -->
                </i></p>
            </div><br>

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

            // Get the current time in HH:MM:SS format
            const hours = ("0" + currentDate.getHours()).slice(-2);
            const minutes = ("0" + currentDate.getMinutes()).slice(-2);
            const seconds = ("0" + currentDate.getSeconds()).slice(-2);
            const formattedTime = `${hours}:${minutes}:${seconds}`;

            // Update the "Requested by" section with name and date
            const requestedByInfo = document.getElementById("requested-by-info");
            requestedByInfo.innerHTML = `${name}<br> <span style="color: red;">${formattedDate}</span>`;

             // Update Date and Time created on PMS in footer
            const dateTimeCreated = document.getElementById("date-time-created");
            dateTimeCreated.innerHTML = `<br>${formattedDate} ${formattedTime}`;

            // Trigger print
            window.print();
        }

    </script>
</body>
</html>
