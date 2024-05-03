{{-- {{ dd($beneficiary) }} --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
        <form class="form-horizontal" method="POST" action="/beneficiary/{{$beneficiary->id}}">
        
        @csrf
        @method('PUT')
        
{{-- <input type="text" name="nic" value="{{$beneficiary->nic}}" placeholder="NIC">
<input type="text" name="first_name" value="{{$beneficiary->first_name}}" placeholder="First Name">
<input type="text" name="last_name" value="{{$beneficiary->last_name}}" placeholder="Last Name">
<input type="text" name="address" value="{{$beneficiary->address}}" placeholder="Address">
<input type="text" name="dob" value="{{$beneficiary->dob}}" placeholder="Date Of Birth">
<input type="text" name="gender" value="{{$beneficiary->gender}}" placeholder="Gender">
<input type="text" name="age" value="{{$beneficiary->age}}" placeholder="Age">
<input type="text" name="phone" value="{{$beneficiary->phone}}" placeholder="Phone">
<input type="text" name="income" value="{{$beneficiary->income}}" placeholder="Income">
<input type="text" name="family_members_count" value="{{$beneficiary->family_members_count}}" placeholder="Family Members Count">
<input type="text" name="education" value="{{$beneficiary->education}}" placeholder="Education Level">
<input type="text" name="land_ownership" value="{{$beneficiary->land_ownership}}" placeholder="Land Ownership"> --}}

<div class="container mt-5">
    <h2 class="text-center mb-4">Edit Beneficiary Details</h2>
    <form action="#" method="post">
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                    <label for="nic">Beneficiary NIC</label>
                    <input type="text" class="form-control" name="nic" 
                    value="{{$beneficiary->nic}}" placeholder="Enter Beneficiary NIC" required>
                </div>
                <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" class="form-control"  name="first_name" value="{{$beneficiary->first_name}}" placeholder="Enter Beneficiary First Name" required>
                </div>
                <div class="form-group">
                    <label for="name">Last Name</label>
                    <input type="text" class="form-control"  name="last_name" value="{{$beneficiary->last_name}}" placeholder="Enter Beneficiary Last Name" required>

                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{$beneficiary->address}}" placeholder="Enter Address" required>
                </div>
                <div class="form-group">
                    <label for="dob">Date Of Birth</label>
                    <input type="text" class="form-control" id="dob" name="dob" value="{{$beneficiary->dob}}" placeholder="Select Date of Birth" required>
                   
                    <img src="https://jqueryui.com/resources/demos/datepicker/images/calendar.gif" class="ui-datepicker-trigger" alt="calendar">
                </div>
                
                <div class="form-group">
                    <label>Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male" {{ $beneficiary->gender == 'Male' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female" {{ $beneficiary->gender == 'Female' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="Other" {{ $beneficiary->gender == 'Other' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="other">Other</label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" value="{{$beneficiary->age}}" placeholder="Age" >
                </div>
                
                <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{$beneficiary->phone}}" placeholder="Enter Mobile Number(s)">
                    <small class="form-text text-muted">Separate multiple numbers with comma (,)</small>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="income">Income</label>
                    <input type="text" class="form-control" id="income" name="income" value="{{$beneficiary->income}}" placeholder="Enter Income" required>
                </div>
                <div class="form-group">
                    <label for="familyMembers">Family Members Count</label>
                    <input type="number" class="form-control" id="family_members_count" value="{{$beneficiary->family_members_count}}" name="family_members_count" placeholder="Enter Family Members Count" required>
                </div>
                <div class="form-group">
                    <label for="education">Education Level</label>
                    <select class="form-control" id="education" name="education" required>
                        {{-- <option value="">Select Education Level</option> --}}
                        <option value="Primary" {{ $beneficiary->education == 'Primary' ? 'selected' : '' }}>Primary</option>
                        <option value="Secondary" {{ $beneficiary->education == 'Secondary' ? 'selected' : '' }}>Secondary</option>
                        <option value="Higher Secondary" {{ $beneficiary->education == 'Higher Secondary' ? 'selected' : '' }}>Higher Secondary</option>
                        <option value="Graduate" {{ $beneficiary->education == 'Graduate' ? 'selected' : '' }}>Graduate</option>
                        <option value="Post Graduate" {{ $beneficiary->education == 'Post Graduate' ? 'selected' : '' }}>Post Graduate</option>
                        <option value="Others" {{ $beneficiary->education == 'Others' ? 'selected' : '' }}>Others</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="landOwnership">Land Ownership</label>
                    <input type="text" class="form-control" id="land_ownership" name="land_ownership" value="{{$beneficiary->land_ownership}}" placeholder="Enter Land Ownership" required>
                </div>


       
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</body>
</html>