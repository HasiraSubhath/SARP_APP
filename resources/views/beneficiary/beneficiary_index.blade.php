<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/pagination.css')}} ">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    
   





    <div class="container-fluid">
        <div class="center-heading">
            <h1>Beneficiary Details</h1>
        </div>
        <div class="row">
            <div class="col">
                <input placeholder="beneficiary"/>
                <button onclick="window.location.href='{{ route('beneficiary.create') }}'" class="add_new"> + Add New </button>
            </div>
        </div>
        
        <div class="row table-container">
            <div class="col">
                <table id="beneficiariesTable" class="table table-bordered border-primary">
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
                            <th scope="col">Province</th>
                            <th scope="col">District</th>
                            <th scope="col">DS Division</th>

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
                            <td>{{$beneficiary->province_name}}</td>
                            <td>{{$beneficiary->district_name}}</td>
                            <td>{{$beneficiary->ds_division_name}}</td>
                            <td>
                                <a href="{{ route('beneficiary.show', $beneficiary->id) }}" class="btn btn-info view-family-btn">View Details</a>
                            </td>
                            



                            <td>
                                <a href="{{ route('family/create', ['beneficiaryId' => $beneficiary->id]) }}" class="btn btn-primary">Add Family Member</a>
                            {{-- </td> --}}
                            {{-- <td> --}}
                                {{-- <a href="{{ route('beneficiary/edit', ['id' => $beneficiary->id]) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('beneficiary/delete', ['id' => $beneficiary->id]) }}" class="btn btn-danger">Delete</a> --}}
                                <a href="beneficiary/{{$beneficiary->id}}/edit" class="btn btn-primary">Edit</a>
                            {{-- </td> --}}
                            {{-- <td> --}}
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                </table>
    
    
    {{-- Beneficiary Detailsssssssss
    

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
                    
                {{-- </td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editBeneficiary" data-id="{{ $beneficiary->id }}">
                        Edit
                    </button>
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
    </table> --}}
    <h1>BAR CHART </h1>
<div id="donut-chart"></div>


<!-- Pagination Section -->
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item {{ $beneficiaries->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $beneficiaries->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        @for ($i = 1; $i <= $beneficiaries->lastPage(); $i++)
            <li class="page-item {{ $i == $beneficiaries->currentPage() ? 'active' : '' }}">
                <a class="page-link" href="{{ $beneficiaries->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="page-item {{ $beneficiaries->hasMorePages() ? '' : 'disabled' }}">
            <a class="page-link" href="{{ $beneficiaries->nextPageUrl() }}">Next</a>
        </li>
    </ul>
</nav>

                </nav>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    @foreach ($beneficiaries as $beneficiary)
    {{-- popup modal --}}
    <!-- Bootstrap modal code -->
{{-- <div class="modal fade" id="editBeneficiary" tabindex="-1" role="dialog" aria-labelledby="editBeneficiaryLabel" aria-hidden="true"> --}}
 <!-- Modal for editing beneficiary -->
 <div class="modal fade" id="editBeneficiary{{ $beneficiary->id }}" tabindex="-1" role="dialog" aria-labelledby="editBeneficiaryLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBeneficiaryLabel">Edit Beneficiary Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Edit form goes here -->
                <form id="editBeneficiaryForm" method="POST" action="{{ route('beneficiary.update', $beneficiary->id) }}">
                    {{-- <form class="form-horizontal" id="editBeneficiaryForm" method="POST" action="/beneficiary/{{$beneficiary->id}}"> --}}
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
@endforeach




<!-- JavaScript to open modal and populate form fields -->
{{-- <script>
    $(document).ready(function() {
        // Function to populate modal fields with beneficiary details
        $('.edit-btn').click(function() {
            var beneficiaryId = $(this).data('id');
            $.ajax({
                url: '/beneficiary/' + beneficiaryId,
                type: 'GET',
                success: function(response) {
                    // Populate modal fields with beneficiary details
                    $('#editBeneficiary' + beneficiaryId + ' #editNic').val(response.nic);
                $('#editBeneficiary' + beneficiaryId + ' #editFirstName').val(response.first_name);
                $('#editBeneficiary' + beneficiaryId + ' #editlastName').val(response.last_name);
                $('#editBeneficiary' + beneficiaryId + ' #editAddress').val(response.address);
                $('#editBeneficiary' + beneficiaryId + ' #editDob').val(response.dob);
                $('#editBeneficiary' + beneficiaryId + ' #editGender').val(response.gender);
                $('#editBeneficiary' + beneficiaryId + ' #editAge').val(response.age);
                $('#editBeneficiary' + beneficiaryId + ' #editPhone').val(response.phone);
                $('#editBeneficiary' + beneficiaryId + ' #editIncome').val(response.income);
                $('#editBeneficiary' + beneficiaryId + ' #editFamilyMembersCount').val(response.family_members_count);
                $('#editBeneficiary' + beneficiaryId + ' #editEducation').val(response.education);
                $('#editBeneficiary' + beneficiaryId + ' #editLandOwnership').val(response.land_ownership);

                    // Repeat for other fields
                    // Open the modal
                    $('#editBeneficiary' + beneficiaryId).modal('show');
                },
                error: function(xhr) {
                    // Handle errors
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script> --}}

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

{{-- PIE CHART TEST --}}
<script src=
"https://d3js.org/d3.v4.min.js"></script>
<script src=
"https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.js"></script>
<link rel="stylesheet"
      href=
"https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.css" />
<link rel=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
      type="text/css" />
 
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
</script>
 
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/Chart.min.js">
</script>


<style>
    body {
        text-align: center;
        color: green;
    }
 
    h2 {
        text-align: center;
        font-family: "Verdana", sans-serif;
        font-size: 40px;
    }
</style>

<div class="col-xs-12 text-center">
    <h2>Donut Chart</h2>
</div>




<script>
    let chart = bb.generate({
        data: {
            columns: [
                ["Male", {{ $maleCount }}],
                ["Female", {{ $femaleCount }}],
            ],
            type: "donut",
            onclick: function (d, i) {
                console.log("onclick", d, i);
            },
            onover: function (d, i) {
                console.log("onover", d, i);
            },
            onout: function (d, i) {
                console.log("onout", d, i);
            },
        },
        donut: {
            title: "Beneficiaries by Gender",
        },
        bindto: "#donut-chart",
    });
</script>

            {{-- <a href="{{ route('beneficiary/create') }}" class="btn btn-primary">Add Beneficiary</a> --}}
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

        </body>
</html>