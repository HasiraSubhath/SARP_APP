<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beneficiary Registration</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include jQuery UI library -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        /* Optional: Style for calendar icon */
        .ui-datepicker-trigger {
            margin-left: 5px;
            cursor: pointer;
        }
    </style>

    <script>
        $(function() {
            // Initialize datepicker
            $("#dob").datepicker({
                dateFormat: 'yy-mm-dd',
                maxDate: '0', // Restrict selection to today or earlier
                changeYear: true, // Allow changing year
                yearRange: '-100:+0' // Allow selection of dates up to 100 years ago
            });
        });
    </script>
    
</head>
<body>
    <div class="container mt-5 border rounded border-primary p-4">
    <form class="form-horizontal" method="POST" action="/beneficiary">
        @csrf



        <div class="container mt-5">
        <h2 class="text-center mb-4">Beneficiary Registration</h2>
        <form action="#" method="post">
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                        <label for="nic">Beneficiary NIC</label>
                        <input type="text" class="form-control" name="nic" placeholder="Enter Beneficiary NIC" required>
                    </div>
                    <div class="form-group">
                        <label for="name">First Name</label>
                        <input type="text" class="form-control"  name="first_name" placeholder="Enter Beneficiary Name" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Last Name</label>
                        <input type="text" class="form-control"  name="last_name" placeholder="Enter Beneficiary Name" required>

                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date Of Birth</label>
                        <input type="text" class="form-control" id="dob" name="dob" placeholder="Select Date of Birth" required>
                       
                        <img src="https://jqueryui.com/resources/demos/datepicker/images/calendar.gif" class="ui-datepicker-trigger" alt="calendar">
                    </div>
                    
                    <div class="form-group">
                        <label>Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female" required>
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="other" value="Other" required>
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" class="form-control" id="age" name="age" placeholder="Age" >
                    </div>
                    
                    <div class="form-group">
                        <label for="mobile">Mobile Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Mobile Number(s)">
                        <small class="form-text text-muted">Separate multiple numbers with comma (,)</small>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="income">Income</label>
                        <input type="text" class="form-control" id="income" name="income" placeholder="Enter Income" required>
                    </div>
                    <div class="form-group">
                        <label for="familyMembers">Family Members Count</label>
                        <input type="number" class="form-control" id="family_members_count" name="family_members_count" placeholder="Enter Family Members Count" required>
                    </div>
                    <div class="form-group">
                        <label for="education">Education Level</label>
                        <select class="form-control" id="education" name="education" required>
                            <option value="">Select Education Level</option>
                            <option value="Primary">Primary</option>
                            <option value="Secondary">Secondary</option>
                            <option value="Higher Secondary">Higher Secondary</option>
                            <option value="Graduate">Graduate</option>
                            <option value="Post Graduate">Post Graduate</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="landOwnership">Land Ownership</label>
                        <input type="text" class="form-control" id="land_ownership" name="land_ownership" placeholder="Enter Land Ownership" required>
                    </div>
                    <!--
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">Account Details</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="accountName">Account Name</label>
                                <input type="text" class="form-control" id="accountName" placeholder="Enter Account Name" required>
                            </div>
                            <div class="form-group">
                                <label for="accountNumber">Account Number</label>
                                <input type="text" class="form-control" id="accountNumber" placeholder="Enter Account Number" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <button type="submit" name="button" class="btn btn-primary mt-3">Submit</button>
            </form>
    
    </div>
    </div>
</body>
</html>