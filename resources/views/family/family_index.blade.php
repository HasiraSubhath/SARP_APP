<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <!-- Add jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Add Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/pagination.css')}} ">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

</head>
<body>
    @csrf
    {{-- <div class="modal fade" id="editFamilyModal" tabindex="-1" role="dialog" aria-labelledby="editFamilyModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editFamilyModalLabel">Edit Family Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editFamilyForm" method="POST" action="#">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <!-- Your form fields for editing -->
                        <!-- Example: -->
                        <input type="text" name="first_name" id="edit_first_name" class="form-control" placeholder="First Name" required>
                        <input type="text" name="last_name" id="edit_last_name" class="form-control" placeholder="Last Name" required>
                        <input type="text" name="phone" id="edit_phone" class="form-control" placeholder="" required>
                        <input type="text" name="gender" id="edit_gender" class="form-control" placeholder="" required>
                        <input type="text" name="dob" id="edit_dob" class="form-control" placeholder="" required>
                        <input type="text" name="youth" id="edit_youth" class="form-control" placeholder="" required>
                        <input type="text" name="education_level" id="edit_"education_level class="form-control" placeholder="" required>
                        <input type="text" name="employement" id="edit_employement" class="form-control" placeholder="" required>
                        <input type="text" name="nutrition_level" id="edit_nutrition_level" class="form-control" placeholder="" required>
                        

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    <div class="container-fluid">
        <div class="center-heading">
            <h1>Beneficiary Famaily Members Details</h1>
        </div>
        


   
        <div class="row table-container">
            <div class="col">
                <table  class="table table-bordered border-primary">
</div>
        <thead>
            <tr>
             
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Phone</th>
                <th scope="col">gender</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Youth</th>
                
                
                <th scope="col">Education</th>
                <th scope="col">Employment</th>
                <th scope="col">Nutrition Level</th>
                <th scope="col">Actions</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($families as $family)
            <tr>
                <td>{{ $family->first_name }}</td>
                <td>{{ $family->last_name }}</td>
                <td>{{ $family->phone }}</td>
                <td>{{ $family->gender }}</td>
                <td>{{ $family->dob }}</td>
                <td>{{ $family->youth }}</td>
                <td>{{ $family->education }}</td>
                <td>{{ $family->employment }}</td>
                <td>{{ $family->nutrition_level }}</td>
                <td>
                    {{-- <button class="btn btn-primary edit-family-btn" data-toggle="modal" data-target="#editFamilyModal" data-family-id="{{ $family->id }}">Edit</button> --}}
                    {{-- <a href="/family/{{ $family->id }}/edit">Edit</a>
                    <form action="/family/{{ $family->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <form action="/crud/{{$crud->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>
                </form>
                    <a href="/family/{{ $family->id }}/delete
                        
                        <button type="submit">Delete</button> --}}
                        <div class="d-flex">
                        <a class="btn btn-primary  mr-2" href='family/{{$family->id}}/edit'>Edit</a>

                        <form action="/family/{{ $family->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</a>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item {{ $families->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $families->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            @for ($i = 1; $i <= $families->lastPage(); $i++)
                <li class="page-item {{ $i == $families->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $families->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            <li class="page-item {{ $families->hasMorePages() ? '' : 'disabled' }}">
                <a class="page-link" href="{{ $families->nextPageUrl() }}">Next</a>
            </li>
        </ul>
    </nav>

    <script>
        // JavaScript to handle edit button click and populate form fields
        $(document).ready(function() {
            $('.edit-family-btn').click(function() {
                // Get family ID from data attribute
                var familyId = $(this).data('family-id');
                // Ajax call to fetch family details
                $.ajax({
                    url: '/family/' + familyId + '/edit',
                    method: 'GET',
                    success: function(response) {
                        // Populate form fields with fetched data
                        $('#edit_first_name').val(response.first_name);
                        $('#edit_last_name').val(response.last_name);
                        $('#edit_phone').val(response.phone);
                        $('#edit_gender').val(response.genfer);
                        $('#edit_dob').val(response.dob);
                        $('#edit_youth').val(response.youth);
                        $('#edit_education').val(response.education);
                        $('#edit_employment').val(response.employment);
                        $('#edit_nutrition_level').val(response.nutrition_level);
                        
                        // Populate other fields similarly
                    },
                    error: function(xhr, status, error) {
                        // Handle errors
                    }
                });
            });
        });
    </script>
</body>
</html>