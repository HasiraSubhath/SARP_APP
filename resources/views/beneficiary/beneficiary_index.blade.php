<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    Beneficiary Detailsssssssss
    

    <table class="table">
        <thead>
            <tr>
                <th scope="col">NIC</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Address</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">gender</th>
                <th scope="col">Age</th>
                <th scope="col">phone</th>
                <th scope="col">Income</th>
                <th scope="col">Family Members</th>
                <th scope="col">Education level</th>
                <th scope="col">Land Ownership</th>
                <th scope="col">Actions</th> 

            </tr>
        </thead>
        <tbody>
            @foreach ($beneficiaries as $beneficiary)
            <tr>

                <td>{{$beneficiary->nic}}</td>
                <td>{{$beneficiary->first_name}}</td>
                <td>{{$beneficiary->last_name}}</td>
                <td>{{$beneficiary->address}}</td>
                <td>{{$beneficiary->dob}}</td>
                <td>{{$beneficiary->gender}}</td>
                <td>{{$beneficiary->age}}</td>
                <td>{{$beneficiary->phone}}</td>
                <td>{{$beneficiary->income}}</td>
                <td>{{$beneficiary->family_members_count}}</td>
                <td>{{$beneficiary->education}}</td>
                <td>{{$beneficiary->land_ownership}}</td>
                
                <td>
                    <a href="{{ route('family/create', ['beneficiaryId' => $beneficiary->id]) }}" class="btn btn-primary">Add Family Member</a>
                </td>
                <td>
                    {{-- <a href="{{ route('beneficiary/edit', ['id' => $beneficiary->id]) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('beneficiary/delete', ['id' => $beneficiary->id]) }}" class="btn btn-danger">Delete</a> --}}
                    
                </td>
                <td>
                    <button type="button" class="btn btn-primary edit-btn" data-toggle="modal" data-target="#editBeneficiaryModal" data-beneficiaryid="{{ $beneficiary->id }}">Edit</button>
                   
                    <div>
                        <a href='beneficiary/{{$beneficiary->id}}/edit'>Edit</a>
                    </div>
               
                </td>
                
                <td>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- popup modal --}}
    <!-- Bootstrap modal code -->
<div class="modal fade" id="editBeneficiaryModal" tabindex="-1" role="dialog" aria-labelledby="editBeneficiaryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBeneficiaryModalLabel">Edit Beneficiary Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Edit form goes here -->
                <form id="editBeneficiaryForm" method="POST" action="{{ route('beneficiary.update', $beneficiary->id) }}">
                    @csrf
                    @method('PUT')
                    <!-- Form fields for editing beneficiary details -->
                   
                    <div class="form-group">
                        <label for="editNic">NIC</label>
                        <input type="text" class="form-control" name="nic">
                    </div>
                    <div class="form-group">
                        <label for="editFirstName">First Name</label>
                        <input type="text" class="form-control" name="first_name">
                    </div>
                    <div class="form-group">
                        <label for="editlastName">Last Name</label>
                        <input type="text" class="form-control" name="last_name">
                    </div>
                    <div class="form-group">
                        <label for="editAddress">Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="form-group">
                        <label for="editDob">Date Of Birth</label>
                        <input type="text" class="form-control" name="dob">
                    </div>
                    <div class="form-group">
                        <label for="editGender">Gender</label>
                        <input type="text" class="form-control" name="gender">
                    </div>
                    <div class="form-group">
                        <label for="editAge">Age</label>
                        <input type="text" class="form-control" name="age">
                    </div>
                    <div class="form-group">
                        <label for="editPhone">Phone</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="editIncome">Income</label>
                        <input type="text" class="form-control" name="income">
                    </div>
                    <div class="form-group">
                        <label for="editFamilyMembersCount">Family Members Count</label>
                        <input type="text" class="form-control" name="family_members_count">
                    </div>
                    <div class="form-group">
                        <label for="editEducation">Education Level</label>
                        <input type="text" class="form-control" name="education">
                    </div>
                    <div class="form-group">
                        <label for="editLandOwnership">Land Ownership </label>
                        <input type="text" class="form-control" name="land_ownership">
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to open modal and populate form fields -->
<script>
    $(document).ready(function() {
        // Function to populate modal fields with beneficiary details
        $('.edit-btn').click(function() {
            var beneficiaryId = $(this).data('beneficiaryid');
            $.ajax({
                url: '/beneficiary/' + beneficiaryId,
                type: 'GET',
                success: function(response) {
                    // Populate modal fields with beneficiary details
                    $('#editBeneficiary #editNic').val(response.id);
                    $('#editBeneficiary #editFirstName').val(response.first_name);
                    $('#editBeneficiary #editlastName').val(response.last_name);
                    $('#editBeneficiary #editAddress').val(response.address);
                    $('#editBeneficiary #editDob').val(response.dob);
                    $('#editBeneficiary #editGender').
                    $('#editBeneficiary #editAge').val(response.age);
                    $('#editBeneficiary #editPhone').val(response.phone);
                    $('#editBeneficiary #editIncome').val(response.income);
                    $('#editBeneficiary #editFamilyMembersCount').val(response.family_members_count);
                    $('#editBeneficiary #editEducation').val(response.education);
                    $('#editBeneficiary #editLandOwnership').val(response.land_ownership);

                    // Repeat for other fields
                    // Open the modal
                    $('#editBeneficiary').modal('show');
                },
                error: function(xhr) {
                    // Handle errors
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>


    {{-- <script>
        $(document).ready(function() {
    // Function to populate modal fields with beneficiary details
    $('.edit-btn').click(function() {
        var beneficiaryId = $(this).data('beneficiaryid');
        $.ajax({
            url: '/beneficiary/' + beneficiaryId, // Adjust the URL as per your route
            type: 'GET',
            success: function(response) {
                // Populate modal fields with beneficiary details
                $('#editBeneficiaryModal #beneficiaryId').val(response.id);
                $('#editBeneficiaryModal #editFirstName').val(response.first_name);
                // Repeat for other fields
            },
            error: function(xhr) {
                // Handle errors
                console.log(xhr.responseText);
            }
        });
    });
});
        </script> --}}
            {{-- <a href="{{ route('beneficiary/create') }}" class="btn btn-primary">Add Beneficiary</a> --}}
</body>
</html>